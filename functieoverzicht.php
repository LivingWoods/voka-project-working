<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'Human Resources');
$query = "SELECT FunctieNaam FROM Functies";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functie Overzicht</title>
    <link rel="stylesheet" href="CSS/werknemeroverzicht.css">
</head>
<body>
    <table>
        <tr>
            <th>Functie Naam</th>
            <th>Bewerken</th>
        </tr>
        <?php $result = mysqli_query($connection, $query); while($row = mysqli_fetch_assoc($result)){$functie = $row["FunctieNaam"]; echo '<tr><td>' . $functie . '</td><td><button><img src="IMG/edit.png"></button><button><img src="IMG/delete.png"></button></td></tr>';}?>
    </table>
    <a href="functietoevoegen.php"><button>Functie toevoegen</button></a>
</body>
</html>