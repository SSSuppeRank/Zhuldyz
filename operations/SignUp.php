<?php
    require_once '../database/connect.php';

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $status = $_POST["status"];

    $query = "INSERT INTO `users` (`Username`, `Usersurname`, `Userlogin`, `Userpassword`, `Userstatus`, `Userregdate`) VALUES ('$name', '$surname', '$login', '$password', '$status', now())";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) );  

    $newURL = "../scripts/SignUp.php";
    header( 'Location: ' . $newURL );

    mysqli_close( $link );
?>