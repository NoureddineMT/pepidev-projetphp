<!DOCTYPE html>
<html>
<head>
    <title>Trattoria da Casa - Services</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container p-5">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/media/piatto1.jpg" class="d-block mx-auto w-75">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>Antipasto</h5>
                    <p>Découvrez nos délicieuses entrées italiennes, un véritable festin de saveurs authentiques.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="/media/piatto2.jpg" class="d-block mx-auto w-75" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Piatti</h5>
                    <p>Des plats italiens raffinés qui vous transportent en Italie à chaque bouchée.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="/media/piatto3.jpg" class="d-block mx-auto w-75">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dessert</h5>
                    <p>Terminez votre repas en beauté avec nos douceurs italiennes exquises et gourmandes.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <div class="container p-5" style="background-color: #c4d3d1;">
        <div class="row">
        <div class="col-6 pt-5 mt-5">
            <h2>Clients Satisfaits</h2>
            <p>Avec plus de trois décennies de cuisine italienne authentique, notre restaurant à Cannes a maîtrisé l'art de proposer des saveurs exceptionnelles qui incitent les clients à revenir encore et encore.</p>
            <a href="#top" style="background-color: #156f5b; color: white; border-radius: 15px; padding: 10px 20px; text-decoration: none;">Voir tous les témoignages.</a>
        </div>
        <div class="col-6">
            <img src="/media/piatto3.webp">
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php include 'footer.php'; ?>
</body>
</html>
