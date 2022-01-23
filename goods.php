<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "templates/main.head.php";?>
    <title>Store - goods</title>
</head>

<body>
    
    <?php include_once "templates/main.nav.php";?>

    <header class="header">
        <div class="header__info">
            <div class="container justify-content-start">
                <div class="row">
                    <div class="col-8">
                        <p>
                            Lorem ipsum dolor sit amet,
                        </p>
                        <p>
                            consectetur adipisicing elit.
                        </p>
                        <p>
                            Necessitatibus, reiciendis?
                        </p>
                        <a href="#footer" class="btn btn-warning">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Goods</li>
        </ol>    
        </div>
    </nav>


    <section class="goods">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-8 col-lg-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="position-sticky py-5 text-white">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>&copy;2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <a href="">
                        <li><i class="fab fa-facebook-square p-2"></i></li>
                    </a>
                    <a href="">
                        <li><i class="fab fa-instagram-square p-2"></i></li>
                    </a>
                    <a href="">
                        <li><i class="fab fa-github-square p-2"></i></li>
                    </a>
                </ul>
            </div>
        </div>
    </footer>

    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>