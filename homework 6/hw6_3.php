<?php
$characters = 3000; // you can change it
$charCounter = 0;
$text = '';
$startPage = ( ( isset( $_GET[ 'startPos' ] ) && ( ! empty( $_GET[ 'startPos' ] ) ) ) ) ? $_GET[ 'startPos' ] : 1;
$fileName = 'text.txt';
$file = fopen( $fileName, 'r' );
$fileSize = fileSize( $fileName );
fseek( $file, ( $startPage - 1 ) * $characters );
while ( false !== ( $char = fgetc( $file ) ) && $charCounter < $characters ){
    $text .= $char;
    $charCounter++;
}
$pages = ( $fileSize - ( $fileSize % $characters ) ) / $characters;
$pages += ( $fileSize % $characters === 0 ) ? 0 : 1;
echo $text . '<br><hr>';
for ( $i = 1; $i <= $pages; $i++ ){
    $class = ( $startPage == $i ) ? 'active' : '';
    echo '<a href="" data-page="' . $i . '" class="' . $class . '">' . $i . '</a> ';
}
?>
<style>
    a{
        text-decoration: none;
        color: blue;
    }
    a.active{
        text-decoration: underline;
        color: red;
    }
</style>
<script>
    document.addEventListener('click', function(event){
        if ( event.target.tagName !== 'A' ) return;
        event.preventDefault();
        var uri = '<?php echo $_SERVER[ 'REQUEST_URI' ] ?>';
        uri = ( uri.indexOf( '?' )  > 0 ) ? uri.substr ( 0, uri.length - uri.indexOf( '?' ) - 1 ) : uri;
        document.location.href = uri + '?startPos=' + event.target.getAttribute( 'data-page' );
    });
</script>
