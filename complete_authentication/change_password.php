<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Complete_Authentication_System_new</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white text-monospace clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php">Home</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item item" role="presentation"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item item" role="presentation"><a class="nav-link" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page login-page">
        <section class="clean-block clean-form dark" style="background-image: url(&quot;assets/img/scenery/image1.jpg&quot;);background-size: cover;background-repeat: no-repeat;background-position: center;">
            <div class="container">
                <div class="text-monospace block-heading">
                    <h2 class="text-info">Change password</h2>
                    <p>Please fill the credentials to change your password</p>
                </div>
                <form class="text-monospace">
                    <div class="form-group"><input class="form-control" type="password" name="old_password" placeholder="Enter your old password"></div>
                    <div class="form-group"><input class="form-control" type="password" name="new_password" placeholder="Enter your new password" id="password"></div>
                    <div class="form-group"><input class="form-control" type="password" name="new_password_confirm" placeholder="Confirm your new password" id="password"></div>
                    <button class="btn btn-primary btn-block" type="submit">Change password</button>
                </form>
            </div>
        </section>
    </main>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline text-monospace">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Angel © 2018</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>