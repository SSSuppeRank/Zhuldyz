<?php
    require_once '../database/connect.php';

    $link = mysqli_connect( $host, $user, $password, $database )
        or die( "Error: " . mysqli_error( $link ) );

    $login = $_POST["login"];
    $password = $_POST["password"];

    $query = "SELECT * FROM `users`";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) ); 

    $count = 0;

    while( $row = mysqli_fetch_array( $result ) ) {
        if( $row["Userlogin"] == $login && $row["Userpassword"] == $password ) {
            echo "SUCCESS";
            $count++;
            break;
        }
    }

    if( $count == 0 ) {
        echo "UNLUCK";
    }

    mysqli_close( $link );
?>