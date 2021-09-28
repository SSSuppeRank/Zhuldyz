<?php
    session_start();
    unset( $_SESSION['inSystem'] );

    header( 'Location: ../index.php' );
?>