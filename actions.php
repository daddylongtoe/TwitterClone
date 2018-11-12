<?php

    include("functions.php");

    if($_GET['action'] == "loginRegister"){

        if ($_POST['loginActive'] == "0"){
            echo "Sign user up!";
        }
    }



?>