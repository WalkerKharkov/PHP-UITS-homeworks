<?php
$file1 = fopen( 'file1.txt', 'r' );
$file2 = fopen( 'file2.txt', 'r' );
$firstString = explode( ' ', fread( $file1, filesize( 'file1.txt' ) ) );
$secondString = explode( ' ', fread( $file2, filesize( 'file2.txt' ) ) );
fclose( $file1 );
fclose( $file2 );
$resultFile = fopen( 'result.txt', 'w' );
fwrite( $resultFile, '<! subtask 1 !>' );
$resultArray = [];
function setResults( $file, &$arr ){
    fwrite( $file, implode( ' ', $arr ) );
    $arr = [];
}
foreach ( $firstString as $referenceWord ){
    if ( ( ! in_array( $referenceWord, $secondString ) )  && ( ! in_array( $referenceWord, $resultArray ) ) ){
        array_push( $resultArray, $referenceWord );
    }
}
setResults( $resultFile, $resultArray );
fwrite( $resultFile, '<! subtask 2 !>' );
foreach ( $firstString as $referenceWord ){
    if ( ( in_array( $referenceWord, $secondString ) ) && ( ! in_array( $referenceWord, $resultArray ) ) ){
        array_push( $resultArray, $referenceWord );
    }
}
setResults( $resultFile, $resultArray );
fwrite( $resultFile, '<! subtask 3 !>' );
$countWords = array_merge( array_count_values( $firstString ), array_count_values( $secondString ) );
foreach( $countWords as $key => $value){
    if ( $value > 2 && ( ! in_array( $key, $resultArray ) ) ){
        array_push( $resultArray, $key);
    }
}
setResults( $resultFile, $resultArray );
fclose( $resultFile );
