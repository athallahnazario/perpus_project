
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
            <form>
                <label>username</label><br>
                <input type="text" name="username" value="username"><br>
                <label>password</label><br>
                <input type="password" name="password" value="password"><br>
                <label >Submit</label>
               <input type="submit" name="submit" value="submit">
                <p> Belum punya akun?
                  <a href="register.html">Register di sini</a>
                </p>
            </form>
        </div>
        <?= $this->endsection(); ?>
    </body>
</html>
