<?php
	include('connect.php');
	session_start();
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.scss">
    <link rel="icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href='../images/logo.ico'/>
    <link rel="stylesheet" href="../css/fic.css">
    <link rel="stylesheet" href="../css/fic_login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <center>
        <!-- Remplissage du formulaire -->
        <fieldset>
            <legend align="center">
                <h2>CONNEXION</h2> 
            </legend>
            <form method="post">
                <div class='ide'>
                    <label for="num">
                        <b>IDENTIFIANT</b>
                    </label>
                    <input name="ident" id='num' type='text' required>
                </div>
                <br>
                <div class='mdp'>
                    <label for="password">
                        <b>MOT DE PASSE</b>
                    </label>
                    <input name="pwd" type="password" id="password" required>
                </div>
                <br>
                <button name="submit" class="valid" type="submit" value="Valider">VALIDER</button>&nbsp&nbsp&nbsp&nbsp
                <button name="clear" class="clear" type="reset" value="vider">VIDER</button>
            </form>
            <i>
                <h3>
                    Pas de compte <a href="regist.php">je m'inscris</a>
                </h3>
            </i>
            <i>
                <h5></h5>
            </i>
        </fieldset>
    </center>
    <!-- Verification et connexion -->
    <?php
        if (isset($_POST['submit'])) {
            # code...
            $req="select * from clients where identifiant ='".$_POST['ident']."' and password='".md5(md5($_POST['pwd']))."'";           
            $rep = mysqli_query($conn,$req);
            $res = mysqli_fetch_array($rep);
            if($res) {
                # code...
                $_SESSION['iden'] = $res['identifiant'];
                $_SESSION['pass'] = $res['password'];
                $_SESSION['num']  = $res['numero'];
                header('location:hme.php?id='.$res['numero']);
            } 
            else {
                # code...
                echo '<center>
                <h2>Identifiant ou Mot de passe incorrect</h2>
                </center>';
            }
        }
        $conn -> close();
    ?>
</body> 
</html>