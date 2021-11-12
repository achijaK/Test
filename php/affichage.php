<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href='../images/logo.ico'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des utilisteurs</title>
    <link rel="stylesheet" href="../css/affichage.css">
</head>
<body>
    <h1>liste des utilisateurs</h1>
    <center><table >
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
        </tr>
    
        <?php
            include("connect.php");
            $req=mysqli_query($conn,"SELECT nom,prenom,telephone,email from clients");
            while($sql=mysqli_fetch_array($req)){
                echo'<tr><td>'.$sql['nom'].'</td>
                <td>'.$sql['prenom'].'</td><td>'.$sql['telephone'].'</td>
                <td>'.$sql['email'].'</td></tr>';

            };

        ?>
    <center></table>
</body>
</html>