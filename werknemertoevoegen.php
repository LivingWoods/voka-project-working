<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'Human Resources');

$fetch = mysqli_fetch_assoc($result);
$aantalFuncties = $fetch['AantalFuncties'];

if($_POST['submit'])
{
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $functie = $_POST['functienaam'];
    $statuut = $_POST['statuut'];
    $wachtwoord = $_POST['wachtwoord'];
    $wachtwoordHash = password_hash($wachtwoord, PASSWORD_DEFAULT);
    $query = "INSERT INTO Werknemers(wnVoornaam, wnAchternaam, wnFunctie, wnStatuut, wnEmail, wnWachtwoord)";
    $query .= "VALUES ('$voornaam', '$achternaam', '$functie', '$statuut', '$email', '$wachtwoordHash')";
}
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Werknemer Aanmaken</title>
        <meta name="description" content="Pagina voor het aanmaken van een nieuwe werknemer">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/werknemertoevoegen.css">
    </head>
    <body>
        <form action="werknemertoevoegen.php" method="POST">
            <input type="text" class="invoerlabel" name="voornaam" placeholder="Voornaam">
            <input type="text" class="invoerlabel" name="achternaam" placeholder="Achternaam">
            <input type="email" class="invoerlabel" name="email" placeholder="Email-adres">
            <input type="text" class="invoerlabel" name="wachtwoord" placeholder="Wachtwoord">            
            <select name="functienaam" id="functienaam">
                <?php $query = "SELECT FunctieNaam AS FunctieNaam FROM Functies"; $result = mysqli_query($connection, $query); while($row = mysqli_fetch_assoc($result)){echo '<option value="' . $row['FunctieNaam'] . '" name="functie"' . $row['FunctieNaam'] . '">' . $row['FunctieNaam'] . '</option>';}?> 
            </select>
            <select name="functienaam" id="functienaam">
            <?php $statuutQuery = "SELECT statuutNaam AS StatuutNaam FROM Statuten;"; $result = mysqli_query($connection, $statuutQuery); while($row = mysqli_fetch_assoc($result)){echo '<option value="' . $row['StatuutNaam'] . '" name="statuut"' . $row['StatuutNaam'] . '">' . $row['StatuutNaam'] . '</option>';}?>
            </select>
            <input type="submit" name="submit" value="Voeg toe">
        </form>
    </body>
</html>

