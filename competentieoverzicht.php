<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'Human Resources');
$query = "SELECT Competentie FROM Competenties";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competentie Overzicht</title>
    <link rel="stylesheet" href="CSS/werknemeroverzicht.css">
</head>
<body>
<!--     <nav>
        <table class="navigation">
            <tr class="navbar">
                <td class="navbuttons"><a href="competentieoverzicht.php"><button>Competentie Overzicht</button></a></td>
                <td class="navbuttons"><a href="functieoverzicht.php"><button>Functie Overzicht</button></a></td>
                <td class="navbuttons"><a href="Werknemeroverzicht.php"><button>Werknemeroverzicht</button></a></td>
            </tr>
        </table>
    </nav> -->
    <table>
        <tr>
            <th>Competentienaam</th>
            <th>Bewerken</th>
        </tr>
        <?php $result = mysqli_query($connection, $query); while($row = mysqli_fetch_assoc($result)){$competentie = $row["Competentie"]; echo '<tr><td name="' . $competentie . '">' . $competentie . '</td><td><button><img src="IMG/edit.png"></button><button><img src="IMG/delete.png"></button></tr>';}?>
    </table>
    <a href="competentietoevoegen.php"><button>Competentie toevoegen</button></a>
</body>
</html>