<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kokokokoS</title>
</head>
<body>

<input type ="text" value="name">

<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Créer la connexion

$conn = new mysqli($servername, $username, $password);


// Vérifier la connexion

// Créer une base de donné avec la requete mysql
$sql = "CREATE DATABASE sadda2";
if ($conn->query($sql) === TRUE) {
  echo "Base de donnée crée";
} else {
  echo "Erreur lors de la création de la base de donnée: " . $conn->error;
}

$conn->close();




        ?>
    

</body>
</html>