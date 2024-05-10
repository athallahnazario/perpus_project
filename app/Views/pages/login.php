
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
          <?php foreach ($login as $a) : ?>
            <form>
                <label><?= $a['username'] ?></label><br>
                <input type="text"><br>
                <label><?= $a['password'] ?></label><br>
                <input type="password"><br>
                <button>Log in</button>
                <p> Belum punya akun?
                  <a href="register.html">Register di sini</a>
                </p>
                <?php endforeach; ?>
            </form>
        </div>
        <?= $this->endsection(); ?>
    </body>
</html>
