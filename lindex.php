<?php
session_start();

if(!isset($_SESSION['email'])) {
    // Redirect to logged-in version of the page
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Welcome to HelpBuddy</title>
    <link rel="icon" type="image/svg+xml" sizes="16x16" href="/assets/img/bot.svg?h=4a1db879f985bc12d967ad91c42b322a">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=c06c53460ac6ab7e74057187c6fd8adc">
    <link rel="stylesheet" href="/assets/css/Inter.css?h=366cebede83033e2548215d28597cfa8">
    <link rel="stylesheet" href="/assets/css/Lora.css?h=05e156489ab31539d6ad493fe8024113">
    <link rel="stylesheet" href="/assets/css/swiper-icons.css?h=c7acc97a8ef16e20b0cd8626a5c9c098">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=e7cfb9ec830984d637c4aed91cd725c5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="/assets/css/Cookie-bar-footer-popup.css?h=9f9ad64afa4a86189a2997d458200e08">
    <link rel="stylesheet" href="/assets/css/Cover-image--parallax-optional--border-top-or-down-arrows-styles.css?h=7ce94728eca238ffb7f466663d655878">
    <link rel="stylesheet" href="/assets/css/Cover-image--parallax-optional--border-top-or-down-arrows.css?h=7ce94728eca238ffb7f466663d655878">
    <link rel="stylesheet" href="/assets/css/dtacl-pageoptionsv13.css?h=bf75ee397199560b616b00aefc658870">
    <link rel="stylesheet" href="/assets/css/Login-Box-En-login-box-en.css?h=2f98490675fe81362a5b1bc6d43c93bc">
    <link rel="stylesheet" href="/assets/css/Login-Form-Basic-icons.css?h=befd8a398792e305b7ffd4a176b5b585">
    <link rel="stylesheet" href="/assets/css/Simple-Slider-swiper-bundle.min.css?h=b2e8d5a1d0e80833f32608dcfff200b6">
    <link rel="stylesheet" href="/assets/css/Simple-Slider.css?h=da830b6503e0457b5735b0129f20b163">
    <link rel="stylesheet" href="/assets/css/Team-images.css?h=4f3cfa46e40e236365345fc77963f4b8">
    <style>
        html,body{
            width:auto!important;
            overflow-x: hidden!important
        }
    </style>
    <style media="screen">
        .upload{
        align-items: left;
        width: 60px;
        position: relative;
        margin-right: 2%;
        }
        .upload img{
        border-radius: 50%;
        border: 3px solid #DCDCDC;
        width: 45px;
        height: 45px;
        }
        .dropdown-menux {
        position: absolute;
        z-index: 1000;
        display: none;
        }

        .dropdownx:hover .dropdown-menux {
        display: block;
        }
    </style>
</head>

<body>
    <!-- Start: Navbar Centered Links -->
    <nav class="navbar navbar-dark navbar-expand-md sticky-top py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center flash animated me-2 bs-icon" style="background: url(&quot;/assets/img/bot.svg?h=4a1db879f985bc12d967ad91c42b322a&quot;) top / contain;"></span><span data-bss-hover-animate="pulse" style="font-family: papyrus;font-weight: bold;font-style: italic;">HelpBuddy</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-end mt-auto" id="navcol-1" style="width: 649.156px;">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" data-bss-hover-animate="pulse" href="#">Services</a>
                        <div class="dropdown-menu border rounded" style="background: #2d2c38;"><a class="dropdown-item" data-bss-hover-animate="pulse" href="health.php" style="color: var(--bs-navbar-brand-color);border-radius: 10px;">Health Buddy</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" data-bss-hover-animate="pulse" href="finance.php" style="border-color: var(--bs-navbar-brand-color);color: var(--bs-navbar-brand-color);border-radius: 10px;">Finance Buddy</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" data-bss-hover-animate="pulse" href="personal.php" style="color: var(--bs-navbar-brand-color);border-radius: 10px;">Personal Buddy</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" data-bss-hover-animate="pulse" href="exam.php" style="color: var(--bs-navbar-brand-color);border-radius: 10px;">Exam Buddy</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" data-bss-hover-animate="pulse" href="#">About</a>
                        <div class="dropdown-menu border rounded" style="background: #2d2c38;"><a class="dropdown-item" data-bss-hover-animate="pulse" href="cookie.php" style="color: var(--bs-navbar-brand-color);border-radius: 10px;">Cookie Policy</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" data-bss-hover-animate="pulse" href="privacy.php" style="color: var(--bs-navbar-brand-color);border-radius: 10px;">Privacy Policy</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" data-bss-hover-animate="pulse" href="about.php" style="color: var(--bs-navbar-brand-color);border-radius: 10px;">About Us</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" data-bss-hover-animate="pulse" href="#">Help&nbsp;</a>
                        <div class="dropdown-menu border rounded" style="background: #2d2c38;"><a class="dropdown-item" data-bss-hover-animate="pulse" href="contacts.php" style="color: var(--bs-navbar-brand-color);border-radius: 10px;">Contact Us</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" data-bss-hover-animate="pulse" href="docs.php" style="color: var(--bs-navbar-brand-color);border-radius: 10px;">Docs</a>
                        </div>
                    </li>
                    </ul>
                    <?php 
                // Connect to the database (replace the placeholders with your own values)
                $host = 'localhost';
                $username = "help_admin";
                $password = "2UfFvKihElhcjB9D";
                $dbname = "help_database";
                $conn = mysqli_connect($host, $username, $password, $dbname);
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                // Fetch the username from the database (replace the placeholders with your own values)
                $email = $_SESSION['email'];
                $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'"));
                $sql = "SELECT username FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    if ($row['username'] == null) {
                        // Original text containing the Dashboard link
                        $text = '<ul><a class="btn btn-primary shadow" role="button" data-bss-hover-animate="jello" href="dashboard.php">Dashboard</a></ul>';
                        // Output the modified text
                        echo $text;
                    } else {
                        $text = '<div class="upload">
                        <div class="dropdownx">
                        <img src="img/' . $user['image'] . '" id="image" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menux" aria-labelledby="image">
                        <div class="dropdown-divider"></div>
                          <a style="margin: auto" class="dropdown-itemx" href="dashboard.php">Dashboard</a>
                          <div class="dropdown-divider"></div>
                          <a style="margin-right: 22px" class="dropdown-itemx" href="shop.php">Shop</a>
                          <div class="dropdown-divider"></div>
                          <a style="margin-right: 25px" class="dropdown-itemx" href="cart.php">Cart</a>
                          <div class="dropdown-divider"></div>
                          <button style="margin-right: 6px" class="dropdown-itemx" onclick="destroySession()">Logout</button>
                        </div>
                      </div>
                    </div>';
                        echo $text;
                    }
                }          
                // Close the database connection
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </nav><!-- End: Navbar Centered Links -->
    <header class="bg-dark">
        <!-- Start: Hero Clean Reverse -->
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <p class="fw-bold text-success mb-2" data-aos="fade" style="font-family: papyrus;font-style: italic;">HelpBuddy</p>
                        <h1 class="fw-bold" data-aos="zoom-in-up" data-aos-delay="100">The platform that provides the best of both worlds</h1>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <!-- Start: Simple Slider -->
                    <div class="simple-slider">
                        <!-- Start: Slideshow -->
                        <div class="swiper-container">
                            <!-- Start: Slide Wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start: Slide -->
                                <div class="swiper-slide" style="background: url(&quot;/assets/img/doctor-verifying-patient-medical-report.svg?h=43bf9184049dbea62ff7378cd5eb2a7e&quot;) center / cover;"></div><!-- End: Slide -->
                                <!-- Start: Slide -->
                                <div class="swiper-slide" style="background: url(&quot;/assets/img/finance-insurance.svg?h=8792ee7ba6fbc20f36b7ee6507217594&quot;) center / cover repeat-x;"></div><!-- End: Slide -->
                                <!-- Start: Slide -->
                                <div class="swiper-slide" style="background: url(&quot;/assets/img/man-discussing-personal-life-with-friend.svg?h=879119d22d6a3faea24bdbda74133d3a&quot;) center / cover;"></div><!-- End: Slide -->
                                <!-- Start: Slide -->
                                <div class="swiper-slide" style="background: url(&quot;/assets/img/online-exam.svg?h=6c786ad3bb0f050c3091ebcb82e67f1c&quot;) center / cover;"></div><!-- End: Slide -->
                            </div><!-- End: Slide Wrapper -->
                            <!-- Start: Pagination -->
                            <div class="swiper-pagination"></div><!-- End: Pagination -->
                            <!-- Start: Previous -->
                            <div class="swiper-button-prev"></div><!-- End: Previous -->
                            <!-- Start: Next -->
                            <div class="swiper-button-next"></div><!-- End: Next -->
                        </div><!-- End: Slideshow -->
                    </div><!-- End: Simple Slider -->
                    <div class="position-relative" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-15%, 35%, 0);"></div>
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-5%, 20%, 0);"></div>
                        <div style="position: relative;flex: 0 0 60%;transform: translate3d(0, 0%, 0);"></div>
                    </div>
                </div>
            </div>
        </div><!-- End: Hero Clean Reverse -->
    </header><!-- Start: Brands -->
    <section class="py-5" style="margin-bottom: -48px;">
        <div class="container text-center py-5">
            <p data-aos="fade" class="mb-4" style="font-size: 1.6rem;">Helping&nbsp;<span class="text-success"><strong>2500+</strong></span>&nbsp;people in their day to day lives.</p>
        </div>
    </section><!-- End: Brands -->
    <section>
        <!-- Start: Features Cards -->
        <div class="container bg-dark py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2" data-aos="fade">Our Services</p>
                    <h3 class="fw-bold" data-aos="fade" data-aos-delay="100">What we can do for you</h3>
                </div>
            </div>
            <div class="py-5 p-lg-5">
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5" data-aos="zoom-in-right">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><i class="fa fa-heartbeat text-success"></i></div>
                                <h5 class="fw-bold card-title">Health Buddy&nbsp;</h5>
                                <p class="text-muted card-text mb-4">Get health insights which are catered to your current health needs. Get Healthy!</p><a class="btn btn-primary shadow" role="button" data-bss-hover-animate="bounce" href="health.php">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5" data-aos="zoom-in-left">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-stairs-up text-success">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 20h4v-4h4v-4h4v-4h4"></path>
                                        <path d="M4 11l7 -7v4m-4 -4h4"></path>
                                    </svg></div>
                                <h5 class="fw-bold card-title">Finance Buddy&nbsp;</h5>
                                <p class="text-muted card-text mb-4">Get finance insights that can help you grow and move forward freely in your life.</p><a class="btn btn-primary shadow" role="button" data-bss-hover-animate="bounce" href="finance.php">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5" data-aos="zoom-in-right">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><i class="fas fa-user-friends text-success"></i></div>
                                <h5 class="fw-bold card-title">Personal Buddy&nbsp;</h5>
                                <p class="text-muted card-text mb-4">Need any general help? This is for you. Your friend here will help you with anything.</p><a class="btn btn-primary shadow" role="button" data-bss-hover-animate="bounce" href="personal.php">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5" data-aos="zoom-in-left">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="text-success">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M426.8 14.18C446-5.046 477.5-4.645 497.1 14.92C516.6 34.49 517 65.95 497.8 85.18C490.1 92.02 476.4 97.59 460.5 101.9C444.1 106.3 426.4 109.4 414.1 111.2C412.5 111.5 410.1 111.7 409.6 111.9C403.1 112.8 399.2 108 400.1 102.4C401.7 91.19 404.7 72.82 409.1 55.42C409.4 54.12 409.8 52.84 410.1 51.56C414.4 35.62 419.1 21.02 426.8 14.18L426.8 14.18zM382.2 33.17C380.6 37.96 379.3 42.81 378.1 47.52C373.3 66.46 370.1 86.05 368.4 97.79C364.5 124.6 387.4 147.5 414.1 143.6C426 141.9 445.6 138.8 464.5 133.9C469.2 132.7 474.1 131.4 478.8 129.9C534.2 227.5 520.2 353.8 437 437C353.8 520.3 227.5 534.2 129.8 478.8C131.3 474 132.7 469.2 133.9 464.5C138.7 445.5 141.9 425.1 143.6 414.2C147.5 387.4 124.6 364.5 97.89 368.4C85.97 370.1 66.39 373.2 47.46 378.1C42.76 379.3 37.93 380.6 33.15 382.1C-22.19 284.5-8.245 158.2 74.98 74.98C158.2-8.253 284.5-22.19 382.2 33.17V33.17zM416.4 202.3C411.6 190.4 395.6 191.4 389.6 202.7C370.1 239.4 343.3 275.9 309.8 309.4C276.3 342.9 239.8 369.7 203.1 389.2C191.8 395.2 190.8 411.2 202.7 416C262.1 440.2 332.6 428.3 380.7 380.3C428.7 332.2 440.6 261.7 416.4 202.3H416.4zM94.43 288.5L150.5 293.6L155.6 349.7C155.8 352.5 157.1 355 159 357C165.4 363.4 176.2 360.7 178.8 352.1L208.5 254.6C211.1 242.1 201.1 232.1 189.5 235.7L92.05 265.3C83.46 267.9 80.76 278.7 87.1 285.1C89.07 287.1 91.66 288.3 94.43 288.5V288.5zM235.7 189.5C232.1 201.1 242.1 211.1 254.6 208.5L352.1 178.8C360.7 176.2 363.4 165.4 357 159C355 157.1 352.5 155.8 349.7 155.6L293.6 150.5L288.5 94.43C288.3 91.66 287.1 89.07 285.1 87.1C278.7 80.76 267.9 83.46 265.3 92.05L235.7 189.5zM51.53 410.1C70.01 405.1 90.3 401.8 102.4 400.1C108 399.2 112.8 403.1 111.9 409.6C110.2 421.7 106.9 441.9 101.9 460.4C97.57 476.4 92.02 490.1 85.18 497.8C65.95 517 34.49 516.6 14.92 497.1C-4.645 477.5-5.046 446 14.18 426.8C21.02 419.1 35.6 414.4 51.53 410.1V410.1z"></path>
                                    </svg></div>
                                <h5 class="fw-bold card-title">Exam Buddy&nbsp;</h5>
                                <p class="text-muted card-text mb-4">Facing exam related issues? Fear not, we've got you covered.</p><a class="btn btn-primary shadow" role="button" data-bss-hover-animate="bounce" href="exam.php">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End: Features Cards -->
    </section>
    <section></section>
    <section class="py-5 mt-5">
        <!-- Start: Testimonials -->
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2" data-aos="fade">Testimonials</p>
                    <h2 class="fw-bold" data-aos="fade-right" data-aos-delay="100"><strong>What People Say About us</strong></h2>
                    <p class="text-muted" data-aos="fade-left" data-aos-duration="300" data-aos-delay="150">No matter the query, we can handle it.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center">
                <div class="col mb-4" data-aos="fade-right">
                    <div class="d-flex flex-column align-items-center align-items-sm-start">
                        <p class="bg-dark border rounded border-dark p-4">It is a great experience. I am very satisfied with the offerings here.</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="/assets/img/avatar%20(1).png?h=922907bd05ee4d6be4dd3b88cb2a2e39">
                            <div>
                                <p class="fw-bold text-primary mb-0">Kumar Shahil</p>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="d-flex flex-column align-items-center align-items-sm-start" data-aos="fade-left">
                        <p class="bg-dark border rounded border-dark p-4">10/10 website for me. It has been very useful for me in navigating my daily life.</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="/assets/img/avatar%20(2).png?h=936cda8580362c2a0dca86094539e8d6">
                            <div>
                                <p class="fw-bold text-primary mb-0">Rohit Kumar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4" data-aos="fade-up">
                    <div class="d-flex flex-column align-items-center align-items-sm-start">
                        <p class="bg-dark border rounded border-dark p-4">Great Website! I am now healthier and happier all thanks to Help Buddy!</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="/assets/img/avatar.png?h=361b9b356f50ff55856c034217d86e12">
                            <div>
                                <p class="fw-bold text-primary mb-0">Aditya Gupta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End: Testimonials -->
    </section><!-- Start: Contact Details -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2" data-aos="fade">Contact Us</p>
                    <h2 class="fw-bold" data-aos="fade" data-aos-delay="100">How you can reach us</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center" data-aos="zoom-in">
                <div class="col-md-6 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" method="post" action="contact.php">
                            <!-- Start: Success Example -->
                            <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name"></div><!-- End: Success Example -->
                            <!-- Start: Error Example -->
                            <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email"></div><!-- End: Error Example -->
                            <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea></div>
                            <div><button class="btn btn-primary shadow d-block w-100" data-bss-hover-animate="pulse" type="submit">Send </button></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
                    <div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Phone</h6><p class="text-muted mb-0" href="tel:+916204409633">+916204409633</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Email</h6><p class="text-muted mb-0" href="mailto:contact@helpbuddy.me">contact@helpbuddy.me</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                                    <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Location</h6>
                                <p class="text-muted mb-0">RGIPT, Jais, Amethi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End: Contact Details -->
    <!-- Start: Newsletter Subscription Color -->
    <section class="py-5">
        <div class="container">
            <div class="bg-dark border rounded border-dark d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5" data-aos="zoom-in">
                <div class="text-center text-lg-start py-3 py-lg-1">
                    <h2 class="fw-bold mb-2">Subscribe to our newsletter</h2>
                    <p class="mb-0"></p>
                </div>
                <form class="d-flex justify-content-center flex-wrap flex-lg-nowrap" method="post" action="newsletter.php">
                    <div class="my-2"><input class="border rounded-pill shadow-sm form-control" type="email" name="email" placeholder="Your Email" required></div>
                    <div class="my-2"><button class="btn btn-primary shadow ms-2" data-bss-hover-animate="pulse" type="submit">Subscribe </button></div>
                </form>
            </div>
        </div>
    </section><!-- End: Newsletter Subscription Color -->
    <!-- Start: Footer Multi Column -->
    <footer class="bg-dark">
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <!-- Start: Services -->
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold">Services</h3><ul class="list-unstyled">
    <li><a class="hover-change" href="health.php">Health Buddy</a></li>
    <li><a class="hover-change" href="finance.php">Finance Buddy</a></li>
    <li><a class="hover-change" href="person.php">Personal Buddy</a></li>
    <li><a class="hover-change" href="exam.php">Exam Buddy</a></li>
</ul>
                </div><!-- End: Services -->
                <!-- Start: About -->
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold">About</h3><ul class="list-unstyled">
    <li><a class="hover-change" href="cookie.php">Cookie Policy</a></li>
    <li><a class="hover-change" href="privacy.php">Privacy Policy</a></li>
    <li><a class="hover-change" href="about.php">About Us</a></li>
</ul>
                </div><!-- End: About -->
                <!-- Start: Careers -->
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold">Help</h3><ul class="list-unstyled">
    <li><a class="hover-change" href="contacts.php">Contact Us</a></li>
    <li><a class="hover-change" href="docs.php">Docs</a></li>
    <li></li>
</ul><ul class="list-inline mb-0">
    <li class="list-inline-item list-inline-item list-inline-item list-inline-item"><a href="https://www.linkedin.com/in/adarsh76000/"><svg class="bi bi-linkedin" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" style="font-size: 25px;">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
        </svg></a></li>
    <li class="list-inline-item list-inline-item list-inline-item list-inline-item"><a href="https://github.com/outrageousaddy76000"><svg class="bi bi-github" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" style="font-size: 25px;">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
        </svg></a></li>
    <li class="list-inline-item list-inline-item list-inline-item list-inline-item"><a href="https://www.cloudskillsboost.google/public_profiles/ff0a113b-d66c-49e4-8567-2c59bb671af7"><svg class="bi bi-google" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" style="font-size: 25px;">
            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"></path>
        </svg></a></li>
</ul>
                </div><!-- End: Careers -->
                <!-- Start: Social Icons -->
                <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last" data-aos="fade">
                    <div class="fw-bold d-flex align-items-center mb-2"><span class="bs-icon-sm bs-icon-circle bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2" style="background: url(&quot;/assets/img/bot.svg?h=4a1db879f985bc12d967ad91c42b322a&quot;);background-size: contain;"></span><span style="font-family: papyrus;font-style: italic;">HelpBuddy</span></div>
                    <p class="text-muted"><strong><span style="color: rgb(255, 255, 255);">The platform that provides the best of both worlds</span></strong></p>
                </div><!-- End: Social Icons -->
            </div>
            <hr>
            <div class="text-center text-muted d-flex justify-content-between align-items-center align-content-center align-self-center mb-auto pt-3">
                <p class="lead text-center align-content-start m-auto mb-0" data-aos="zoom-in" data-aos-duration="1200" data-aos-offset="0" data-aos-once="true">Copyright 2023 © HelpBuddy</p>
            </div><!-- Start: Cookie bar footer popup -->
            <section>
                <div class="alert text-center cookiealert" role="alert">
                    <p>By using our site, you acknowledge that you have read and understand our <a href="/cookie.html">Cookie Policy</a> and our <a href="/privacy.html">Privacy Policy</a></p><button class="btn btn-primary btn btn-primary btn-sm acceptcookies" type="button" aria-label="Close">I agree</button>
                </div>
            </section><!-- End: Cookie bar footer popup -->
        </div>
    </footer><!-- End: Footer Multi Column -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="/assets/js/bs-init.js?h=67ee20cf4e5150919853fca3720bbf0d"></script>
    <script src="/assets/js/bold-and-dark.js?h=78569998362133b84a76614652f3624f"></script>
    <script src="/assets/js/Cookie-bar-footer-popup-cookiealert.js?h=01df96649b363962676ff49c7223cc62"></script>
    <script src="/assets/js/Cover-image--parallax-optional--border-top-or-down-arrows-main.js?h=06c4665734ed6cfba47801de97696470"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
    <script src="/assets/js/Simple-Slider-swiper-bundle.min.js?h=e0c0f6a33b1ca78b2a1df838a346a344"></script>
    <script src="/assets/js/Simple-Slider.js?h=84b1d7cbf88bb21b37fb412ca8f94640"></script>

    <script>
		var alertMessage = "<?php echo $alert_message ?>";
		if (alertMessage !== '') {
			alert(alertMessage);
		}
        alertMessage ="";
	</script>
    <script>
    function destroySession() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                }
            };
            xhttp.open("GET", "logout.php", true);
            xhttp.send();
            window.location.href = "signup.php";
        }
    </script>
</body>

</html>