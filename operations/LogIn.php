<?php
    session_start();

    require_once '../database/connect.php';

    $login = $_POST["login"];
    $password = $_POST["password"];

    $query = "SELECT * FROM `users`";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) ); 

    $count = 0;

    while( $row = mysqli_fetch_array( $result ) ) {
        if( $row["Userlogin"] == $login && $row["Userpassword"] == $password && $row['Userstatus'] == "shop owner") {
            $_SESSION['admin'] = true;
            header( 'Location: ../index.php' );
            $_SESSION['inSystem'] = true;
        } else if( $row["Userlogin"] == $login && $row["Userpassword"] == $password ) {
            header( 'Location: ../index.php' );
            $_SESSION['inSystem'] = true;
        }
    }

    if( $count == 0 ) {
        echo "UNLUCK";
    }

    mysqli_close( $link );
?>