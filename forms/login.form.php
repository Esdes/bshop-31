<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/site/icon.ico" type="image/x-icon">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link href="../assets/css/form.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Store - Log in</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-nav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/site/icon.ico" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
                Store
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                </ul>
                <div class="navbar__btn">
                    <a href="#" class="btn btn-warning">Log in</a>
                    <a href="#" class="btn btn-success">Registration</a>
                </div>
            </div>
        </div>
    </nav>


    <form action="" method="POST">
        <div class="container">
            <div class="mb-3">
                <h3>Log in form</h3>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="check">
                <label class="form-check-label" for="check">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


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
                        <li><i class="fab fa-facebook-square fa-2x p-2"></i></li>
                    </a>
                    <a href="">
                        <li><i class="fab fa-instagram-square fa-2x p-2"></i></li>
                    </a>
                    <a href="">
                        <li><i class="fab fa-github-square fa-2x p-2"></i></li>
                    </a>
                </ul>
            </div>
        </div>
    </footer>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>