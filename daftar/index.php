<?php
date_default_timezone_set('Asia/Jakarta');
include '../config/koneksi.php'; // Pastikan file koneksi ini ada dan benar
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InterQuizz - Daftar</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Daftar</h2>
                        <form method="POST" class="register-form" id="register-form" action="">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama_lengkap" id="name" placeholder="Nama Lengkap" required/>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Ulangi Password" required/>
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya telah menyetujui <a href="#" class="term-service">aturan dan ketentuan</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="daftar" id="signup" class="form-submit" value="daftar"/>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['daftar'])) {
                            $username =  $_POST['username'];
                            $email =  $_POST['email'];
                            $password1 = $_POST['pass'];
                            $password2 = $_POST['re_pass'];
                            $nama_lengkap = $_POST['nama_lengkap'];
                            $tanggal = date('Y-m-d');

                            // Hash password
                            $hashed_password = hash('sha256', $password2);

                            if ($password1 === $password2) {
                                $sql = "INSERT INTO user VALUES ('','$nama_lengkap', '$username', '$hashed_password', '$email', '', '$tanggal')";
                                $result = mysqli_query($koneksi, $sql);

                                if ($result) {
                                    echo "<script>alert('berhasil daftar')</script>";
                                    header("Location: ../login/");
                                    exit();
                                } else {
                                    echo "<script>alert('Gagal registrasi: " . mysqli_error($koneksi) . "')</script>";
                                }
                            } else {
                                echo '<p class="text-danger">Password tidak sama, coba ulangi proses</p>';
                            }
                        }
                        ?>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/logointerquizz.png" alt="sign up image"></figure>
                        <a href="../login" class="signup-image-link">Saya sudah mendaftar</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
