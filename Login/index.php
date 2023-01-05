<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman user</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Target Belajar</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="../Login/profil/profil.php">Profil</a></li>
                    <li><a href="logout.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="https://img.freepik.com/free-vector/multi-device-targeting-concept-illustration_114360-7305.jpg?size=626&ext=jpg&ga=GA1.1.229919458.1672917056&semt=sph"/>
            <div class="kolom">
                <p class="deskripsi">Target Belajar</p>
                <h2>Belajar Jadi Lebih Mudah</h2>
                
            </div>
        </section>
    </div>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2023.<b>Sistemaplikasiweb</b> 
        </div>
    </div>
</body>
</html>