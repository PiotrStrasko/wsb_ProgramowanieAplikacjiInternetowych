<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $firstname ="Janusz";
        $lastname = "Nowak";
        echo "imie i nazwisko $firstname $lastname<br>";
        echo 'imie i nazwisko $firstname $lastname<br>';

        //heredoc
        echo <<< DATA
            <hr>
            Imię $firstname <br>
            Nazwisko $lastname<br>
DATA;

        //przypisanie here doc'a do zmiennej
    $data = <<< DATA
            <hr>
            Imię $firstname <br>
            Nazwisko $lastname<br>
DATA;
    echo $data;

    //nowdoc
    echo <<< 'DATA'
            <hr>
            Imię $firstname <br>
            Nazwisko $lastname<br>
DATA;
    $bin = 0b1011;
    echo $bin; //11
    $oct = 010;
    $oct = 0o10;
    echo $oct; //8
    $hex = 0x1A;
    echo $hex; //26
    ?>
</body>
</html>