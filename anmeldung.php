<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="assets/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Topbar Start -->
    <?php include('parts/_header.php'); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include('parts/_navbar.php'); ?>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">Wenn Sie nicht registriert sind, geben Sie Ihre Daten ein</h4>
            <h1 class="display-4 m-0">Füllen Sie <span class="text-primary">das Formular aus</span></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-4 mb-5">
                <div class="contact-form">
                    <div id="success">
                    </div>
                    <form action="src/registration.php" method="post" name="anmeldung" id="anmeldung-form" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="first_name" placeholder="Vorname" required="required" data-validation-required-message="Bitte geben Sie Ihren Namen ein" value='' name="first_name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="last_name" placeholder="Nachname" required="required" data-validation-required-message="Bitte geben Sie Ihren Nachname ein" value='' name="last_name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control p-4" id="email_form" placeholder="E-Mail" required="required" data-validation-required-message="Bitte geben Sie ihre E-Mail-Adresse ein" value='' name="email_form" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control p-4" id="password_form" placeholder="Passwort" required="required" data-validation-required-message="Bitte geben Sie Ihr Passwort ein" value='' name="password_form" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5 w-100" type="submit" id="anmeldung-button" name="anmeldung-button">Anmeldung</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <?php include('parts/_footer.php'); ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>