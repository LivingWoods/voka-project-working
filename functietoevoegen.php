<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'Human Resources');

if($_POST['submit'])
{
    $functie = $_POST['functie'];

    $query = "INSERT INTO Functies(FunctieNaam)";
    $query .= "VALUES ('$functie')";

    $result = mysqli_query($connection, $query);

    if(!$result)
    {
        die('Query failed!');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR-Platform - Functie toevoegen</title>
</head>
<body>
    <form action="functietoevoegen.php" method="post">
        <input type="text" id="functie" name="functie">
        <input type="submit" name="submit" value="Voeg toe">
    </form>
</body>
</html>