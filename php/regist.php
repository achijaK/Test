<?php
	include('connect.php')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.scss">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href='../images/logo.ico'/>
    <link rel="stylesheet" href="../css/fic.css">
    <link rel="stylesheet" href="../css/fic_reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    </style>
    <title>Inscription</title>
</head>
<body>
    <!-- Creation du formulaire -->
    <center>
        <fieldset>
            <legend align="center">
                <h2>INSCRIPTION</h2>
            </legend>
            <div class='nav'>
            <form class='formulaire' method="POST">
               <div>
                   <label for="name" class='pos'>
                       <b>NOM</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   </label>
                   <input name="nom" id='name' type='text' placeholder='Entrer un nom' required> 
               </div>
               <br>
               <div>
                   <label for="surname" class='pos'>
                       <b>PRENOM(S)</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   </label>
                   <input name='pnom' id='surname' type='text' placeholder='Entrer vos prenoms' required>
               </div>
               <br>
               <div>
                   <label for="num" class='pos'>
                       <b>TELEPHONE</b>&nbsp&nbsp&nbsp&nbsp
                   </label>
                   <input minlength="10" maxlength="10" name="tel" id='num' type='text' placeholder='0101010101' required>
               </div>
               <br>
               <div>
                   <label for="email" class='pos'>
                       <b>EMAIL</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   </label>
                   <input type="email" name="mail" id="email" placeholder="mail@gmail.com" required>
               </div>
               <br>
               <div>
                   <label for="password" class='pos'>
                       <b>MOT DE PASSE</b>
                   </label>
                   <input minlength="8" maxlength="20" type="password" name="pwd" id="password" required>
               </div>
               <br>
               <button name="submit" class="valid" type="submit" value="submit">VALIDER</button>&nbsp
               <button class="clear" type="reset" value="vider">VIDER</button>
            </form>
            </div>
            <i>
                <h3>
                    Déja membre <a href="login.php">je me connecte</a>
                </h3>
            </i>
        </fieldset>
    <center>
    <!-- Fin création formulaire -->
    <!-- Enregistrement des informations -->
    <?php 
        if (isset($_POST['submit'])){
                $nom=($_POST['nom']);
                $pnom=($_POST['pnom']);
                $tel=$_POST['tel'];
                $mail=($_POST['mail']);
                $password=md5(md5($_POST['pwd']));
                $identifiant=($nom.$tel);
                $date=date('r');
                $req="insert into clients values('','$identifiant','$nom','$pnom','$tel','$mail','$password','$date','')";
                $res = mysqli_query($conn,$req);
            if ($res) {
                # code...
                header('location:submit.php?id='.$identifiant);
            }
            else
            {
                echo'Erreur de requette';
            }
        }
    ?>
</div>
</body>
</html>