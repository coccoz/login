<?php
    setcookie ("PHPSESSID", "2suuvrf873s6tj9ec77t2cbk2s", time()-1);
    session_unset();
    session_start();

    if(!isset($_SESSION["login_user"]))
    {
        header("Location: errore.php");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Benvenuto</h1>
    <br>
    <br>
    <a href="./logout.php"><p>premi per effettuare il logout</p></a>
</body>
</html>