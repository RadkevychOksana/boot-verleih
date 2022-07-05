<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BoatRent - Boat Rent Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Boat Rent Service" name="keywords">
    <meta content="Boat Rent Service" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

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

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($categories as $key => $categorie) : ?>
                    <div class="carousel-item <?= $key === 0 ? 'active' : ''; ?>">
                        <img class="w-100" src="<?= $categorie['carousel_image'] ?>" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h3 class="text-white mb-3 d-none d-sm-block">Bester Bootsverleih</h3>
                                <h1 class="display-3 text-white mb-3"><?= $categorie['name'] ?></h1>
                                <h5 class="text-white mb-3 d-none d-sm-block">Duo nonumy et dolor tempor no et. Diam sit diam sit diam erat</h5>
                                <a href="#booking" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Buchen Sie jetzt</a>
                                <a href="boat.php=<?= $categorie['slug'] ?>" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Lern mehr</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Booking Start -->
    <div id="booking" class="container-fluid bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Ihren Namen" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Deine E-Mail" required="required" />
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservierungsdatum" data-target="#date" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservierungszeit" data-target="#time" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Wählen Sie ein Boot aus</option>
                                    <option value="1">Kanu</option>
                                    <option value="2">Kayak</option>
                                    <option value="3">Flöße</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Buchen Sie jetzt</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class="text-secondary mb-3">Fahren Sie in den Urlaub?</h4>
                    <h1 class="display-4 mb-4">Für Ihre<span class="text-primary"> Miete</span></h1>
                    <p>Das Mieten von unseren Boote ist eine Gelegenheit, unberührte Natur zu genießen, an der ruhigen Küste einsamer Inseln zu schwimmen oder zu angeln. Schwimmen Sie im Fluss, kochen Sie ein Abendessen am Lagerfeuer und entspannen Sie sich in einer fröhlichen, entspannten Atmosphäre im Schoß der Natur.</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="font-weight-normal text-secondary m-0 mr-3"><i class="fa fa-check-double text-secondary mr-3"></i></h1>
                                    <h5 class="text-truncate m-0">Ausbilder</h5>
                                </div>
                                <p>Professionelle Ausbilder</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="font-weight-normal text-secondary m-0 mr-3"><i class="fa fa-check-double text-secondary mr-3"></i></h1>
                                    <h5 class="text-truncate m-0">Ausrüstung</h5>
                                </div>
                                <p>Ausrüstung aus eigener Produktion</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="font-weight-normal text-secondary m-0 mr-3"><i class="fa fa-check-double text-secondary mr-3"></i></h1>
                                    <h5 class="text-truncate m-0">Lieferung</h5>
                                </div>
                                <p>Lieferung der Ausrüstung zum Startplatz</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="font-weight-normal text-secondary m-0 mr-3"><i class="fa fa-check-double text-secondary mr-3"></i></h1>
                                    <h5 class="text-truncate m-0">Strecken</h5>
                                </div>
                                <p>Wir haben viele Routen für eintägige Kajaktouren entwickelt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- About Start -->
    <div id="about" class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Über uns</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Boots</span><span class="text-secondary">verleih</span></h1>
                <h5 class="text-muted mb-3">Aktive Erholung im Freien in Deutschland</h5>
                <p class="mb-4">Wir haben viele Routen für eintägige Kajaktouren entwickelt, die niemanden gleichgültig lassen. Reisen entlang es Flusses Lahn eröffnen neue Möglichkeiten für Outdoor-Aktivitäten. Das Kajakfahren auf ihnen wird Sie mit Energie füllen, entspannen, Sie für lange Zeit beleben und vor allem eine neue Tradition entstehen lassen - sich öfter aktiv zu entspannen! </p>
                <ul class="list-inline">
                    <li>
                        <h5><i class="fa fa-check-double text-secondary mr-3"></i>Kanuverleih</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-check-double text-secondary mr-3"></i>Kajakverleih</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-check-double text-secondary mr-3"></i>Floßverleih</h5>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Pricing Plan Start -->
    <div id="pricing" class="container-fluid bg-light pt-5 pb-4">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0">Wähle <span class="text-primary">die beste Option</span></h1>
            </div>
            <div class="row">
                <?php foreach ($categories as $categorie) : ?>
                    <?php include('_categorie_card.php') ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


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
    <script src="lib/popup/js/jquery-3.6.0.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



</body>

</html>