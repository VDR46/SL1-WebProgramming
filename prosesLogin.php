<?php
    session_start();
    if(isset($_POST['login'])){
        if(isset($_SESSION)){
            if(($_POST['usernameLogin'] == $_SESSION['registUsername']) && ($_POST['passwordLogin'] == $_SESSION['registPass1']  || $_SESSION['registPass2'])){
                echo "Login Berhasil!";
                echo "<br/>";
                echo "<a href='home.php'> Klik di sini untuk lanjut </a>";
            }
            else{
                echo "Login Gagal!";
                echo "<br/>";
                echo "<a href='login.php'> Klik di sini untuk kembali </a>";
            }
        }
    }
?>