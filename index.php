<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
<?php
    $heure = date('H');
    $message = '';
        if ($heure < 12) {
        $message = 'Bonjour';
    } elseif ($heure < 18) {
        $message = 'Bonjour';
    } else {
        $message = 'Bonsoir';
    }
    ?>
    <h1>Bienvenue sur notre application de traitement de données SAR !</h1>
    <!-- Add a button to navigate to enter_coordinates.php -->
    <a href="enter_coordinates.php"><button>Start</button></a>
</body>
</html>
