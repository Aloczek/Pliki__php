<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$a= getcwd();
$a1 = "dokumenty";

if (!file_exists($a1)) {
    mkdir($a1);
}

$a2 = scandir($a1);

?>


<h1> MOJE PLIKI</h1>    
<h2>Aktualny katalog:</h2>

<?php echo $a; ?>

<h2>Zawartość katalogu </h2>

<?php

$dir = 'dokumenty';
$pliki = scandir($dir);

echo '<ul>';

foreach ($pliki as $plik) {
    if ($plik != '.' && $plik != '..') {
        echo '<li>' . $plik . '</li>';
    }
}

echo '</ul>';

?>
<h2> Pliki są: </h2>

<?php
$dir1 = ".";
$pliki1 = scandir($dir1);

foreach ($pliki1 as $plik) {
    $sciezka = $dir1 . "/" . $plik;

    
    if ($plik == "." || $plik == "..") {
        continue;
    }

    if (is_file($sciezka)) {
        echo $plik . " jest plikiem<br>";
    } elseif (is_dir($sciezka)) {
        echo $plik . " jest katalogiem<br>";
    }
}
?>

<h2> Rozmiary plikow </h2>

<?php


foreach ($pliki1 as $plik) {
    $sciezka = $dir1 . "/" . $plik;

    if ($plik == "." || $plik == "..") {
        continue;
    }

    if (is_file($sciezka)) {
        echo $plik . " PLIK " . filesize($sciezka) . " B<br>";
    }
}


?>





</body>
</html>