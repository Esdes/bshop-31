<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "templates/main.head.php";?>
    <title>Store profile</title>
</head>

<body>
    
    <?php include_once "templates/main.nav.php";?>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>    
        </div>
    </nav>


    <section class="profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-lg-8">
                    <p>Profile info</p>
                    <table class="table table-hover table-bordered">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Nickname</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Name</td>
                          <td>Email</td>
                          <td>Nickname</td>
                        </tr>
                      </tbody>
                    </table>
                    <div>
                        <a class="btn btn-primary" href="#" role="button">Edit profile</a>
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

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>