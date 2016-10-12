<a href="index.html">home</a>
<br>
<br>
<br>
<form name="registration" action="" method="post" enctype="multipart/form-data">
    <label>Name : </label>
    <input type="text" name="name" required />
    <br>
    <label>Surname : </label>
    <input type="text" name="surname" required />
    <br>
    <label>Gender : male </label>
    <input type="radio" name="gender" value="male" checked />
    <label> female </label>
    <input type="radio" name="gender" value="female "/>
    <br>
    <label>Email : </label>
    <input type="email" name="email" required />
    <br>
    <label>Password : </label>
    <input type="password" name="password" required />
    <br>
    <label>Photo : </label>
    <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
    <input type="file" name="photo" required />
    <br>
    <br>
    <input type="submit" value="send" />
</form>
<?php
if ( ! empty ( $_POST ) ){
  $registration = $_POST[ 'name' ] . ';' . $_POST[ 'surname' ] . ';' . $_POST[ 'gender' ] . ';' . $_POST[ 'email' ] .
                    ';' . $_POST[ 'password' ];
    $time = time();
    file_put_contents( $_POST[ 'name' ] . $time . '.dat', $registration );
    $uploadDirectory = 'D:\web\photo';
    $uploadParentDirectory = 'D:\web';
    $filenameOld = $_FILES[ 'photo' ][ 'name' ];
    $fileType = substr( $filenameOld, $strp = strpos( $filenameOld, '.' ), strlen( $filenameOld ) -  $strp );
    $filenameNew = $_POST[ 'name' ] . '_' . $time . $fileType;
    if ( ! file_exists( $uploadDirectory ) ){
        try{
            mkdir( $uploadParentDirectory );
            mkdir( $uploadDirectory );
        }catch(Exception $ex){
            die ( 'Cannot create upload directory!');
        }
    }
    if ( move_uploaded_file( $_FILES[ 'photo' ][ 'tmp_name' ], $uploadDirectory . '\\' . $filenameNew ) ){
        echo "file upload successfully";
    }
}
