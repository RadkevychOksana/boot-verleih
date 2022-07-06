<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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
    <link href="lib/popup/css/popup.css" rel="stylesheet" />

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

    <?php $boote = !empty($_GET['categorie']) ? selectBoote($_GET['categorie']) : [];

    ?>
    <?php foreach ($boote as $boot) : ?>
        <!-- About Start -->
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                    <h1 class="display-4 mb-4"><span class="text-primary"><?= $boot['name'] ?></span></h1>
                    <h5 class="text-muted mb-3">Die Mindestmietdauer der Ausrüstung beträgt 24 Stunden.</h5>
                    <p class="mb-4">Am Tag der Geräteausgabe, sofern die Ausgabe nach 15:00 Uhr erfolgt, und am Tag der Geräterückgabe, sofern die Rückgabe bis spätestens 12:00 Uhr erfolgt, wird die Leihgebühr nicht erhoben.</p>
                    <ul class="list-inline">

                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Länge: <?= $boot['length'] ?> cm</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Breite: <?= $boot['width'] ?> cm</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Sitze: <?= $boot['seats'] ?> nicht verstellbare Sitze.</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Gepäckfächer: <?= $boot['baggage'] ?> Stk.</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Gewicht: <?= $boot['weight'] ?> kg</h5>
                        </li>
                    </ul>
                    <a href="" class="btn btn-lg btn-primary mt-3 px-4 cd-popup-trigger" data-boot-id="<?= $boot['id'] ?>">Buchen Sie jetzt</a>
                </div>
                <div class="col-lg-5">
                    <div class="row px-3">
                        <div class="col-12 p-0">
                            <img class="img-fluid w-100" src="<?= $boot['image_1'] ?>" alt="">
                        </div>
                        <div class="col-6 p-0">
                            <img class="img-fluid w-100" src="<?= $boot['image_2'] ?>" alt="">
                        </div>
                        <div class="col-6 p-0">
                            <img class="img-fluid w-100" src="<?= $boot['image_3'] ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

    <?php endforeach; ?>







    <!-- Footer Start -->
    <?php include('_footer.php'); ?>
    <!-- Footer End -->

    <!--Popup unvisible block-->
    <?php include('_popup_booking.php'); ?>


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

    <!--Popup Form Javascript File-->
    <script src="lib/popup/js/popup.js"></script>

</body>

</html>