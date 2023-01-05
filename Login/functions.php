<?php
$coon = mysqli_connect("localhost", "root", "", "users");

function register($data) {
    global $coon;
    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($coon,$data["password"]);
    $password2 = mysqli_real_escape_string($coon, $data["password2"]);

    //cek email udah ada apa belum
    $result = mysqli_query($coon, "SELECT email FROM user1 WHERE email = '$email'");
    
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
            alert('email sudah terdaftar!')
        </script>";
        return false;
    }

    //cek konfirmasi password
    if($password !== $password2) {
        echo "<script>
                alert('konfirmasi password salah')
                </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    //tambahkan user baru ke data base
    mysqli_query($coon, "INSERT INTO user1 VALUES('$nama', '$email', '$password')");

    return mysqli_affected_rows($coon);

}

?>