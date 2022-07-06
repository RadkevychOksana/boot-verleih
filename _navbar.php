<?php require_once('database/database.php');
$categories = selectCategories();?>

<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="/index.php" class="nav-item nav-link active">Home</a>
                <a href="/index.php#about" class="nav-item nav-link">Über uns</a>
                <a href="/index.php#pricing" class="nav-item nav-link">Preis</a>
                <a href="/index.php#booking" class="nav-item nav-link">Buchung</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Boote</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <?php foreach ($categories as $categorie) : ?>
                            <a href="boat.php?categorie=<?= $categorie['slug'] ?>" class="dropdown-item"><?= $categorie['name'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Kontakt</a>
            </div>
            <a href="login.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block mr-2">Jetzt mieten</a>
            <a href="anmeldung.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Anmeldung</a>
        </div>
    </nav>
</div>