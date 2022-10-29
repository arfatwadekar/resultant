<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- custom css -->
    <link rel="stylesheet" href="./css/index.css">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>Home Page!</title>
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

        <!-- slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/banner.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/banner.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/banner.jpg" class="d-block w-100 h-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </header>

    <!-- courses section -->
    <main id="courses" class="courses p-3 mt-5 mb-5">
        <div class="container">
            <!-- section header -->
            <h2 class="h2-responsive fw-bold text-center my-2">
                Our
                <span class="head">Courses</span>
            </h2>
            <hr class="w-25 m-auto">

            <div class="headline text-center pt-4">
                <span class="fs-5">Private, Group, Special, Batches & Crash Courses</span>
            </div>

            <div class="row mt-5">

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="./images/courses_img/computer.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title fs-4 ">Computer/IT</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="./images/courses_img/mechanical.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title fs-4">Mechanical</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="./images/courses_img/civil.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">CIVIL ENGG.</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="./images/courses_img/electronics.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">ELECTRONIC & TELECOM</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="./images/courses_img/electrical.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">ELECTRICAL ENGG</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="./images/courses_img/mechatronics.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">MECHATRONICS ENGG.</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="./images/courses_img/ai.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">ARITIFICIAL INTELLIGENCE ENGG.</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="./images/courses_img/machineLearning.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">MACHINE LEARNING ENGG.</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="./images/courses_img/automation.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">AUTOMATION & ROBOTIC'S ENGG.</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- about section -->
    <main id="about">
        <div class="about bg-light p-3 mt-5 mb-5">
            <div class="container">
                <!-- section head -->
                <h2 class="h2-responsive  fw-bold text-center my-2">
                    About
                    <span class="head">Us</span>
                </h2>
                <hr class="w-25 m-auto">

                <div class="row mt-5">


                    <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto  align-item-strech">
                        <img src="./images/about_us.jpg" class="img-fluid img-thumbnail my-2" width="100%" alt="">
                    </div>

                    <div class="col-md-6">
                        <h3 class="h2-responsive section_heading fw-bold text-start my-2">--- Resultant Accademy ---
                        </h3>
                        <!-- <hr class="w-30 m-auto">  -->
                        <p class="lh-base">Resultant academy of engineering established in 2011,the basic objective of establishing this institute is neither commercial nor merely to earn a livehood ,motive is to satisfy the inner urge of dedicating oneself to sincere academic pursuit and to guide the eager young student with a missionary zeal, and to enhance their worthiness and imbibe the noble values of life in their respective minds not by empty words but by one's own example. Based in Mumbra, Dist. Thane for past 7 years we helped more than 500 engineers to achieve their dreams....</p>
                        <a href="about.html" class="btn btn-primary px-2 pl-2">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- testimonial -->
    <main class="testimonial mt-5 mb-5" id="testimonial">
        <div class="container">
            <!-- section header -->
            <h2 class="h2-responsive fw-bold text-center my-2">
                Our
                <span class="head">Topper's</span>
            </h2>
            <hr class="w-25 m-auto">

            <div class="row mt-3">
                <!-- Carousel wrapper -->
                <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" style="width: 150px;" />
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="mb-3">Maria Kate</h5>
                                    <p>Photographer</p>
                                    <p class="text-muted">
                                        <i class="fas fa-quote-left pe-2"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                        nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                        fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                        doloremque.
                                    </p>
                                </div>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-2">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="far fa-star fa-sm"></i></li>
                            </ul>
                        </div>

                        <div class="carousel-item">
                            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" style="width: 150px;" />
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="mb-3">John Doe</h5>
                                    <p>Web Developer</p>
                                    <p class="text-muted">
                                        <i class="fas fa-quote-left pe-2"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                        nesciunt sint eligendi reprehenderit reiciendis.
                                    </p>
                                </div>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-2">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="far fa-star fa-sm"></i></li>
                            </ul>
                        </div>

                        <div class="carousel-item">
                            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar" style="width: 150px;" />
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="mb-3">Anna Deynah</h5>
                                    <p>UX Designer</p>
                                    <p class="text-muted">
                                        <i class="fas fa-quote-left pe-2"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                        nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                        fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                        doloremque.
                                    </p>
                                </div>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-2">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="far fa-star fa-sm"></i></li>
                            </ul>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Carousel wrapper -->
            </div>
        </div>
    </main>


    <!-- footer  -->
    <?php include 'footer.php';?>
    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>