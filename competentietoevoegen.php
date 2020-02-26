<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'Human Resources');

if($_POST['submit'])
{
    $competentie = $_POST['competentie'];

    $query = "INSERT INTO Competenties(Competentie)";
    $query .= "VALUES ('$competentie')";

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
    <title>HR-Platform - Competentie toevoegen</title>
</head>
<body>
    <form action="competentietoevoegen.php" method="post">
        <input type="text" id="competentie" name="competentie">
        <input type="submit" name="submit" value="Voeg toe">
    </form>
</body>
</html>