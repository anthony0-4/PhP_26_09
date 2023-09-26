<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $txt="Aluno";
    $text2="Anthony";
    $idade="18";
    $count=0;
    $ano=2023;
    echo "$txt $text2 <br>";
    echo "Olá Mundo! Sou $text2<br>";
    echo "$idade<br>";
    echo "<h3> Bem Vinde ao IFSC, aqui você enloquece</h3>";
    $count +=2;
    echo $count.$idade;
    $ano -=2010;
    echo "<br><br> $ano<br><br>";
    if($ano>=18){
        echo "Maior de idade";
    }
    else{
        echo "Menor de idade";
    }
        echo "<br><br>";
    switch($ano){
        case ($ano <=4):
            echo "Bebe";
            break;
        case ($ano>4 && $ano<=12):
            echo "Criança";
            break;
        case ($ano>12 && $ano<18):
            echo "Adolescente";
            break;
        case ($ano>=18):
            echo "Adulto";
            break;
    }
    ?>
</body>
</html>