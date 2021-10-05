<?php
    require_once( '../database/connect.php' );
    session_start();

    $goodName = $_POST['goodName'];
    $goodQuantity = $_POST['goodQuantity'];
    $goodPrice = $_POST['goodPrice'];
    $goodAvailability = true;

    $query = "INSERT INTO `goods` (`Goodname`, `Goodquantity`, `Goodprice`) VALUES ('$goodName', '$goodQuantity', '$goodPrice')";
    $result = mysqli_query( $link, $query )
        or die( $link );

    if( $goodQuantity == 0 ) {
        $goodAvailability = false;
    }

    $query = "UPDATE `goods` SET `Goodavailability` = '$goodAvailability' WHERE `Goodname` = '$goodName'";
    $result = mysqli_query( $link, $query )
        or die( $link );

    $_SESSION['success'] = true;
    header( 'Location: ../pages/imports.php' );

    mysqli_close( $link );
?>