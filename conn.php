<?php
error_reporting(0);
$login = $_POST['login']

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/conn.min.css">
    <title>Document</title>
</head>

<body>
    <header>
        <a href="./index.php">Deconnexion</a>
    </header>

    <h1>Bongiorno, <?php echo $login; ?></h1>

</body>

</html>