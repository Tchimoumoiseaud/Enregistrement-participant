<?php

    require("connexion_db.php");

    $nom = "";
    $prenom = "";
    $tel = "";
    $email = "";
    $ok = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $tel = trim($_POST['tel']);
        $email = trim($_POST['email']);

        $sql = "INSERT INTO participant(nom,prenom,telephone,email) values('$nom','$prenom','$tel','$email')";
        
        $result = mysqli_query($conn, $sql);

        $ok = "Enregistrement réussi !!";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css">
    <title>Accueil</title>
</head>
<body>
<section>
        <div class="box">
            <div class="container">
                <div class="form">
                    <h2>Ajout de participant</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <span class="sucess"><?php echo $ok; ?></span>
                        <div class="inputbox">
                            <input type="text" placeholder="Nom du Participant" name="nom" required>
                        </div>

                        <div class="inputbox">
                            <input type="text" placeholder="Prenom du participant" name="prenom" required>
                        </div>

                        <div class="inputbox">
                            <input type="text" placeholder="numero de telephone" name="tel" required>
                        </div>

                        <div class="inputbox">
                            <input type="text" placeholder="Adresse email" name="email" required>
                        </div>

                        <div class="inputbox">
                            <input type="submit" value="Ajouter participant">
                        </div>

                        <div class="inputbox">
                            <a href="affichage.php">
                                <input type="button" value="Liste des participants">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>