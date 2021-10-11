<?php
    session_start();
    require_once( '../database/connect.php' );

    $amount = $_POST['amount'];
    $goodID = $_POST['good'];
    $goodAvailability = true;

    // получить новое значиение количества продуктов
    $query = "SELECT `Goodquantity` FROM `goods` WHERE `GoodID` = '$goodID'";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) );
    $goodQuantity = mysqli_fetch_array( $result )['Goodquantity'] + $amount ;

    // изменить таблицу в соотвествии с новым значением продуктов
    $query = "UPDATE `goods` SET `Goodquantity` = '$goodQuantity' WHERE `GoodID` = '$goodID'";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) );

    // изменить значение Goodavailability если количество = 0
    if( $goodQuantity == 0 ) {
        $goodAvailability = false;
    }

    $query = "UPDATE `goods` SET `Goodavailability` = '$goodAvailability' WHERE `GoodID` = '$goodID'";
    $result = mysqli_query( $link, $query )
        or die( $link );

    header( 'Location: ../content/alterProduct.php' );
    
?>