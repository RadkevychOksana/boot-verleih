<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php include('_header.php'); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include('_navbar.php'); ?>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">Wenn Sie registriert sind, geben Sie Ihre Daten ein</h4>
            <h1 class="display-4 m-0">Füllen Sie <span class="text-primary">das Formular aus</span></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-4 mb-5">
                <?php if (!isset($_COOKIE['user'])) { ?>
                    <div class="contact-form">
                        <div id="success">
                        </div>
                        <form action="auth.php" method="post" name="eingang" id="eingang" novalidate="novalidate">
                            <div class="control-group">
                                <input type="email" class="form-control p-4" id="email" name="email_form" placeholder="E-Mail" required="required" data-validation-required-message="Bitte geben Sie ihre E-Mail-Adresse ein" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control p-4" id="password" name="password_form" placeholder="Passwort" required="required" data-validation-required-message="Bitte geben Sie Ihr Passwort ein" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5 w-100" type="submit" id="sendMessageButton">Login</button>
                            </div>
                        </form>
                    <?php } else { ?>
                        <p><strong><?= $_COOKIE['user'] ?> </strong> 👌 Angemeldet <a href="/boot-verleih/exit.php">Usgang</a></p>
                    <?php } ?>
                    </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <?php include('_footer.php'); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>