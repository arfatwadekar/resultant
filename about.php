<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- custom css -->
    <link rel="stylesheet" href="./css/about.css">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>about page</title>
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


    <!-- about section -->
    <main id="about">
        <div class="about mt-5 mb-5">
            <div class="container-fluid">
                <!-- section head -->
                <h2 class="head fw-bold text-center my-2">
                    About Us
                </h2>

                <div class="container">
                    <div class="row mt-5 p-3">

                        <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto  align-item-strech">
                            <div class="row gallery">
                                <div class="col-lg-4 mb-4 mb-lg-0">
                                    <img src="https://images.pexels.com/photos/2582937/pexels-photo-2582937.jpeg?auto=compress&cs=tinysrgb&w=600" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                                    <img src="https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&w=600" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                                </div>

                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img src="https://images.pexels.com/photos/159275/macro-focus-cogwheel-gear-159275.jpeg?auto=compress&cs=tinysrgb&w=600" class="w-100 shadow-1-strong rounded mb-2" alt="Waves at Sea" />

                                    <img src="https://images.pexels.com/photos/8566474/pexels-photo-8566474.jpeg?auto=compress&cs=tinysrgb&w=600" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <h3 class="h2-responsive section_heading fw-bold text-center my-2">--- Resultant Accademy ---
                            </h3>
                            <p class="lh-base parapt-3">Resultant academy of engineering established in 2011,the basic objective of establishing this institute is neither commercial nor merely to earn a livehood
                                <br>motive is to satisfy the inner urge of dedicating oneself to sincere academic pursuit and to guide the eager young student with a missionary zeal, and to enhance their
                                <br> worthiness and imbibe the noble values of life in their respective minds not by empty words but by one's own example. Based in Mumbra, Dist. Thane for past 7 years we
                                <br> helped more than 500 engineers to achieve their dreams
                            </p>

                            <h4 class="fw-bold text-center mt-4">--- Key Features ---</h4>
                            <hr class="w-25 m-auto">
                            <p class="mt-4">

                                ❖ Experienced and talented faculties. (Toppers of Engineering streams & industry professionals)
                                <br>
                                <br>
                                ❖ Quality of teaching with 100% passing assistance.
                                <br>
                                <br>
                                ❖ AC classroom with needful amenities.
                                <br>
                                <br>
                                ❖ Regular lectures.
                                <br>
                                <br>
                                ❖ Regular test series.
                                <br>
                                <br>
                                ❖ Students progress monitoring process with reports.
                                <br>
                                <br>
                                ❖ Review meeting with parents.
                                <br>
                                <br>
                                ❖ Free study material.
                                <br>
                                <br>
                                ❖ Personal attention.
                                <br>
                                <br>
                                ❖Assured discounts and scholarship. (student reward mechanism)
                            </p>
                        </div>


                    </div>
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