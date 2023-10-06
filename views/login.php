<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">

    <title>Login</title>
</head>

<body>
    <div class="login-container">
        <div class="login-info-container">
            <h1 class="title">Log in with</h1>
            <div class="social-login">
                <div class="social-login-element">
                    <img src="images/google.svg" alt="google-image">
                    <span>Google</span>
                </div>
                <div class="social-login-element">
                    <img src="images/facebook.svg" alt="facebook-image">
                    <span>Facebook</span>
                </div>
            </div>
            <p>or</p>

            <?php if (isset($status) && $status == true) {  ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div>
                        Error de autentificacion
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <form class="inputs-container" method="post">
                <input class="input" type="text" placeholder="DNI" name="dni" required>
                <input class="input" type="pass" placeholder="Clave de cuenta" name="pass" required>
                <p>Forgot password? <span class="span">Click here</span></p>
                <button class="btn" type="submit" name="submit">login</button>
                <p>Don't have an account? <span class="span">Sign Up</span></p>
            </form>
        </div>
        <img class="image-container" src="images/login.svg" alt="">
    </div>

</body>

</html>