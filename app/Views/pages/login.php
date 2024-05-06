
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
		
    </head>

    <body>
        <?= $this->section('content'); ?>

        <div class="container">
          <h1>Login</h1>
          <?php foreach ($tb_user as $a) : ?>
            <form>
                <label>Username</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="password"><br>
                <button>Log in</button>
                <p> Belum punya akun?
                  <a href="register.html">Register di sini</a>
                </p>
            </form>
            <?php endforeach; ?>
        </div>
        <?= $this->endsection(); ?>
    </body>
</html>
