<form name="new_post" method="post" action="">
    <label>Enter your email address : </label>
    <input type="email" name="email"  required />
    <br>
    <br>
    <textarea name="message" cols="50" rows="10">Enter your message...</textarea>
    <br>
    <input type="submit" value="Send" />
</form>
<?php
$fileName = 'guestbook.txt';
$posts = '';
$guestBook = fopen( $fileName, 'a+' );
if ( ! empty( $_POST ) ){
    $thePost =  $_POST[ 'email' ] . '|' . $_POST[ 'message' ] . '|' . date( 'd.m.Y', time() ) . '~';
    fwrite( $guestBook, $thePost );
}
fseek( $guestBook, 0 );
if ( ( $fileSize = filesize( $fileName ) ) > 0 ) {
    $posts = explode('~', fread($guestBook, $fileSize - 1));
    foreach ($posts as $post) {
        $post = explode('|', $post);
        echo 'user ' . $post[0] . ' says <br>"' . $post[1] . '"<br> at ' . $post[2] . '<br><hr>';
    }
}