<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/main.js"></script>
    <link rel="shortcut icon" href="../assets/icon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body style="background-color: #ffffff;">
<section class="login d-flex">
    <div class="login-left">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-7">
                <div class="header">
                    <h1>Welcome Admin!</h1>
                    <p>Selamat datang! Silahkan masukan detail anda</p>
                </div>
                <form id="register-form" class="login-form" method="POST" action="../php/login_process.php">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" />
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" />
                    <button type="submit" value="LOGIN" class="btn btn-primary mt-3">Masuk</button>

                </form>
            </div>
        </div>
    </div>
    <div class="login-right w-50">
        <img src="../assets/login.jpg" alt="Wallpaper" style="width: 100%; height: 100%; object-fit: cover" />
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const message = urlParams.get('pesan');

    if (message === "gagal") {
        alert("Login gagal! Username dan password salah!");
    } else if (message === "logout") {
        alert("Anda telah berhasil logout");
    } else if (message === "belum_login") {
        alert("Anda harus login untuk mengakses halaman admin");
    }
});
</script>


</body>
</html>
