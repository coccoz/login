<?php
    session_start();

    $correctU = "admin";
    $correctP = "1234";


    $username = $_POST["username"];
    $password = $_POST["password"];

    if(($correctP == $password) && ($correctU == $username))
    {

        $_SESSION["login_user"] = $username;
        //$_SESSION["login_pass"] = $password;

        $date = time();
        $_SESSION["date"] = $date;


        header('Location: ./benvenuto.php');
            
    } else {
        header('Location: ./errore.php');
    }

?>
