<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>

</head>
<body>
    <h4>Lista</h4>
    <ul>
        <li>Poznan</li>
        <li>Gniezno</li>
        <li>Wrzesnia</li>
    </ul>
    <?php
    $city = "Jarocin";
        echo <<< LISTA
        <ul>
            <li>Poznan</li>
            <li>Gniezno</li>
            <li>Wrzesnia</li>
            <li>$city</li>
        </ul>   
LISTA;
    ?>

    <h4>Zawartosc skryptu</h4>
    <?php
        //include, require, include_once, require_once
        include "./scripts/skrypt1.php";
        include_once "./scripts/skrypt.php";
        //require nie wyświetla zawartosci po błędzie skryptu
        @require "./scripts/skrypt1.php";
    ?>
    <h4>Zawartosc po wyswietleniu skryptu</h4>
</body>
</html>