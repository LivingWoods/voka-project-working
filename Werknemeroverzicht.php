<?php 

$connection = mysqli_connect('localhost', 'root', 'root', 'Human Resources');
$query = "SELECT wnVoornaam, wnAchternaam, wnFunctie FROM Werknemers"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Werknemer Overzicht</title>
    <link rel="stylesheet" href="CSS/werknemeroverzicht.css">
</head>
<body>
    <table>
        <tr>
            <th>Naam</th>
            <th>Voornaam</th>
            <th>Functie</th>
            <th>Bewerken</th>
        </tr>
        <?php $result = mysqli_query($connection, $query); while($row = mysqli_fetch_assoc($result)){$voornaam = $row["wnVoornaam"]; $achternaam = $row["wnAchternaam"]; $functie = $row["wnFunctie"]; echo '<tr><td name="' . $achternaam . '">' . $achternaam . '</td><td name="' . $voornaam . '">' . $voornaam . '</td><td name="' . $functie . '">' . $functie . '</td><td><button><img src="IMG/edit.png"></button><button><img src="IMG/delete.png"></button></td></tr>';}?>
    </table>
    <a href="werknemertoevoegen.php"><button>Nieuwe Werknemer</button></a>
</body>
</html>