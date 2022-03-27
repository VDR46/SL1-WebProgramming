<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="margin: 0%; background-color: #cad1ff;">
    <div style="background-color: #f9ffca; width:100%; display: flex; flex-direction: row; justify-content:space-between; padding-top:1rem; padding-bottom:1rem;">
        <div style=" padding-left:2rem;">
            <div style="font-size: 16pt;">Aplikasi Pengelolaan Keuangan</div>
        </div>
        <div style="display: flex; flex-direction:row; padding-right:2rem; justify-content:space-evenly;">
            <div style="padding-right: 3rem; font-size: 16pt;"><a href="./home.php">Home</a></div>
            <div style="padding-right: 3rem; font-size: 16pt;"><a href="./profile.php">Profile</a></div>
            <div style="font-size: 16pt;"><a href="./prosesLogOut.php">Log Out</a></div>
        </div>
    </div>

    <div style="display: flex; justify-content:center; padding-top:5rem;">
        <?php
            session_start();
            if(isset($_SESSION)){
                echo "<h2>Halo".' '.$_SESSION['registNamaDepan'].' '.$_SESSION['registNamaTengah'].' '.$_SESSION['registNamaBelakang'].", Selamat Datang di Aplikasi Pengelolaan Keuangan </h2>";
            }
        ?>
    </div>



</body>
</html>