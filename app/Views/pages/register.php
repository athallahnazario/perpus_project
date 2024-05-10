<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>
    <?= $this->section('content'); ?>
        <div class="container">
          <h1>Register</h1>
            <form>
                <label><?= $tb_user['nama'] ?></label>\
                <br>
                <input type="text">
                <br>
                <label><?= $tb_user['jk'] ?></label>
                <br>
                <input type="radio">
                <br>
                <label><?= $tb_user['telp'] ?></label>
                <br>
                <input type="text">
                <br>
                <label><?= $tb_user['alamat'] ?></label>\
                <br>
                <input type="text">
                <br>
                <label><?= $tb_user['role'] ?></label>
                <br>
                <input type="radio">
                <br>
                <label><?= $tb_user['email'] ?></label>
                <br>
                <input type="text">
                <br>
                <button>Register</button>
                <p> Sudah punya akun?
                  <a href="login.html">Login di sini</a>
                </p>
            </form>
        </div>
        <?= $this->endsection(); ?>
    </body>
</html>
