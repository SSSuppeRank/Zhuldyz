<?php
    session_start();

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
            $query2 = "SELECT `Userstatus` FROM `users` WHERE `Userlogin` = '$login'";
            $result2 = mysqli_query( $link, $query2 )
                or die( "Error: " . mysqli_error( $link ) );

            if( mysqli_fetch_array( $result2 )['Userstatus'] == "Shop owner" ) {
                // $_SESSION['admin'] = true;
                header( 'Location: ../admin.php' );
            }
            else {
                $_SESSION['inSystem'] = true;
                header( 'Location: ../index.php' );
            }
            $count++;
            break;
        }
    }

    if( $count == 0 ) {
        echo "UNLUCK";
    }

    mysqli_close( $link );
?>