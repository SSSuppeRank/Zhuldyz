<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "yernar_project";

    $link = mysqli_connect( $host, $user, $password, $database )
        or die( "Error: " . mysqli_error( $link ) );
?>