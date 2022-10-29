<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- custom css -->
    <link rel="stylesheet" href="./css/ContactUs.css">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>Contact us page</title>
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
    <main id="contact">
        <div class="contact mt-5 mb-5">
            <div class="container-fluid">
                <!-- section head -->
                <h2 class="head fw-bold text-center my-2">
                    contact Us
                </h2>

                <div class="container">
                    <div class="row mt-5 p-3">

                        <!--Grid column-->
                        <div class="col-md-6 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6 pt-2">
                                        <div class="md-form mb-0 ">
                                            <label for="name" class="">Your name</label>
                                            <input type="text" id="name" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6 pt-2">
                                        <div class="md-form mb-0">
                                            <label for="email" class="">Your email</label>
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12 pt-3">
                                        <div class="md-form mb-0">
                                            <label for="subject" class="">Subject</label>
                                            <input type="text" id="subject" name="subject" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row ">

                                    <!--Grid column-->
                                    <div class="col-md-12 pt-3">

                                        <div class="md-form pb-3">
                                            <label for="subject" class="">Message</label>
                                            <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                            </form>

                            <div class="text-center text-md-left pt-3">
                                <a href="" class="btn btn-primary px-2 pl-2">Submit</a>
                            </div>
                            <div class="status"></div>
                        </div>
                        <!--Grid column-->
                        <div class="col-md-6 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.5402900402537!2d73.02175931412526!3d19.171590053944566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bf139756a9a9%3A0x7e2014f04471c66e!2sResultant%20Academy!5e0!3m2!1sen!2sin!4v1666595793646!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>

  <!-- footer  -->
  <?php include 'footer.php';?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>