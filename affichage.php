<?php
    require("connexion_db.php");

    if(isset($_GET['delete'])) {
        $sql = "DELETE FROM participant WHERE id='".$_GET["delete"]."'";

        mysqli_query($conn,$sql);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="affichage.css">
    <title>Liste des participants</title>
</head>
<body>
    
<section>
    <table class="tableau">
        <thead>
            <tr>
                <th>Nom du participant</th>
                <th>Prenom du participant</th>
                <th>Telephone du client</th>
                <th>Email du client</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $query = mysqli_query($conn,"select *from participant");

                while($row = mysqli_fetch_assoc($query)) {
                    echo '<tr><td>' .$row["nom"]. '</td>';
                    echo '<td>' .$row["prenom"]. '</td>';
                    echo '<td>' .$row["telephone"]. '</td>';
                    echo '<td>' .$row["email"]. '</td>';
                    echo '<td><a href="?delete='.$row["id"].'" class="btn">Supprimer</a></td>';
                    '</tr>';
                }
                ?>
                </tbody>
            </table>
            <div class="ajouter">
                <a href="accueil.php">
                    <input type="button" value="Ajouter des participants">
                </a>
            </div>
    </section>
    </body>
</html>