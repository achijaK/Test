<?php
	include('connect.php');
    $idI = $_GET['id'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.scss">
    <link rel="icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href='../images/logo.ico'/>
    <link rel="stylesheet" href="../css/fic.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-image: url(../images/im5.jpg);
            background-repeat:no-repeat;
            background-position:center 30%;
            background-size: cover;
        }
        .text{
            color:white;
        }
        h1{
            position: center 40%;
        }
    </style>
    <title>Resultat</title>
</head>
<body>
    <CENTer>
        <h1 class='text'>
            <b>
                Vous vous êtes inscrit avec succès 
            </b>
        </h1>
        <h2>
        <?php
            echo'<div class='.'text'.'><b>Votre identifiant de connexion est:'.$idI.'</b></div>';
        ?>
        </h2>
        <br>
        <h2>
            <a href="login.php">Se connecter ici</a>
        </h2>
    </CENTer>

</div>
</body>
</html>