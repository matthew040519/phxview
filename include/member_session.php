<?php

    include('../include/connection.php');
    session_start();

    if(!$_SESSION['role'] == 0)
    {
        session_destroy();
        header('location: ../index.php');
    }

    if(!$_SESSION['loggedin']){

        session_destroy();

        header('location: ../index.php');
    }

?>