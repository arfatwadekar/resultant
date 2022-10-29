<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- custom css -->
    <link rel="stylesheet" href="./css/pricing.css">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>About page</title>
</head>

<body>


    <!-- navbar -->
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="./images/logo.png" width="200rem" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- pricing section -->
    <main id="pricing">
        <div class="pricing mt-5 mb-5">
            <div class="container-fluid">
                <!-- section head -->
                <h2 class="head fw-bold text-center my-2">
                    OUR SPECIAL PACKAGES
                </h2>

                <div class="row mt-5">

                    <!--Our Specail Packages  -->
                    <section class="Special_packages" id="Special_packages">

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-12">
                                    <table class="table">
                                        <h2>DIMPLOMA (ALL BRANCHES)</h2>
                                        <thead>
                                            <tr>
                                                <th scope="col">NO OF SUBJECT</th>
                                                <th scope="col">ANY ONE</th>
                                                <th scope="col">ANY TWO</th>
                                                <th scope="col">ANY THREE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row p-2">FEES</th>
                                                <th scope="row p-2">3000/-</th>
                                                <th scope="row p-2">5500/-</th>
                                                <th scope="row p-2">8000/-</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12 col-12 my-4">
                                    <table class="table">
                                        <h2>DEGREE (ALL BRANCHES)</h2>
                                        <thead>
                                            <tr>
                                                <th scope="col">NO OF SUBJECT</th>
                                                <th scope="col">ANY ONE</th>
                                                <th scope="col">ANY TWO</th>
                                                <th scope="col">ANY THREE</th>
                                                <th scope="col">M3/M4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row p-2">FEES</th>
                                                <th scope="row p-2">4000/-</th>
                                                <th scope="row p-2">7500/-</th>
                                                <th scope="row p-2">11000/-</th>
                                                <th scope="row p-2">5000/-</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12 col-12 my-4">
                                    <table class="table">
                                        <h2>BSC-IT</h2>
                                        <thead>
                                            <tr>
                                                <th scope="col">NO OF SUBJECT</th>
                                                <th scope="col">ANY ONE</th>
                                                <th scope="col">ANY TWO</th>
                                                <th scope="col">ANY THREE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row p-2">FEES</th>
                                                <th scope="row p-2">2000/-</th>
                                                <th scope="row p-2">2500/-</th>
                                                <th scope="row p-2">3000/-</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <!-- footer  -->
    <?php include 'footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>