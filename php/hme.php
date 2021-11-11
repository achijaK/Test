<?php
	include('connect.php');
	session_start();
    $id = $_GET['id'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.scss">
    <link rel="icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href='../images/logo.ico'/>
    <link rel="stylesheet" href="../css/fic.css">
    <link rel="stylesheet" href="../css/fic_hme.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        $req="select * from clients where numero='$id'";
        $req=mysqli_query($conn,$req);
        if ($req) {
            # code...
            $res=mysqli_fetch_array($req);
            echo'
            <br><br><br>
            <center>
                <h2>Bonjour '.$res['Nom'].' '.$res['Prenom']. '<br> Nous sommes ravis de vous avoir sur notre site</h2>
                <br>
                 <br><br>
                <form action="disco.php">
                    <button  class="btn btn-2">SE DECONNECTER</button>
                </form>
            </center>
            ';
        }
        $date2=date('r');
        $req_1="update clients set Date_sign_up ='$date2' where numero=$id";
        $req_1=mysqli_query($conn,$req_1);
    ?>

</body>
</html>