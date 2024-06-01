<?php

require_once "./modules/film.php";
require_once "./modules/movie.php";

$genere1 = new Genere("COMMEDIE", "FILM DIVERTENTI E UMORISTICI");

$genere2 = new Genere("AZIONE", "FILM AVVINCENTI E SCENICI");

$film1 = new Film(
    './ass/img.jpg',
    'Die Hard',
    'Un poliziotto deve salvare gli ostaggi presi da terroristi in un grattacielo.',
    'Barbiero', '06-03-2004', $genere1);

$film2 = new Film('', 'Loris', 'cavolo', 'Barbiero', '06-03-2004', $genere2);

?>

<?php include_once "./componets/essentials_html/head.php"; ?>

    <h1 class="text-white">ciaoo</h1>
    
    <div class="container-fluid">


        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="<?php echo $film1->getimg(); ?>" class="card-img-top object-fit-cover" style="height: 30vh;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $film1->getTitle(); ?></h5>
                        <p class="card-text"><?php echo $film1->getDesc(); ?></p>
                        <div class="w-100 d-flex justify-content-between">
                            <span><?php echo $film1->getRegista(); ?></span>
                            <span><?php echo $film1->getAnno(); ?></span>
                        </div>
                        <div class="w-100 d-flex flex-column pt-3">
                            <span><?php echo $film1->getGenere()->getNome(); ?></span>
                            <span><?php echo $film1->getGenere()->getDescrizione(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="<?php echo $film1->getimg(); ?>" class="card-img-top object-fit-cover" style="height: 30vh;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $film1->getTitle(); ?></h5>
                        <p class="card-text"><?php echo $film1->getDesc(); ?></p>
                        <div class="w-100 d-flex justify-content-between">
                            <span><?php echo $film1->getRegista(); ?></span>
                            <span><?php echo $film1->getAnno(); ?></span>
                        </div>
                        <div class="w-100 d-flex flex-column pt-3">
                            <span><?php echo $film1->getGenere()->getNome(); ?></span>
                            <span><?php echo $film1->getGenere()->getDescrizione(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="<?php echo $film1->getimg(); ?>" class="card-img-top object-fit-cover" style="height: 30vh;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $film1->getTitle(); ?></h5>
                        <p class="card-text"><?php echo $film1->getDesc(); ?></p>
                        <div class="w-100 d-flex justify-content-between">
                            <span><?php echo $film1->getRegista(); ?></span>
                            <span><?php echo $film1->getAnno(); ?></span>
                        </div>
                        <div class="w-100 d-flex flex-column pt-3">
                            <span><?php echo $film1->getGenere()->getNome(); ?></span>
                            <span><?php echo $film1->getGenere()->getDescrizione(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include_once "./componets/essentials_html/bottom.php"; ?>
