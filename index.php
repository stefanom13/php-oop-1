<!-- è definita una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
    vengono istanziati almeno due oggetti ‘Movie’
stampate a schermo i valori delle relative proprietà di ogni oggetto (potete creare un array con dentro le due istanze e fare un ciclo per stampare i dati) -->

<?php
    include_once __DIR__."/db.php";

    $theGuilty = new movie("The Guilty", "Antoine Fuqua", 2020, "FR");
    $freaksOut = new movie("Freaks Out", "Gabriele Mainetti", 2020, "IT");
    $promises = new movie("Promises", "Amanda Sthers", 2020, "IT");
    $deep = new movie("Deep", "Sita Likitvanichkul", 2020, "EN");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <ul>
            <li>
                <?php echo $theGuilty->getDescription();?>  
            </li>
        </ul>
    </div>
  
</body>
</html>