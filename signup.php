<?php
session_start();

if(isset($_SESSION['email'])) {
    // Redirect to logged-in version of the page
    header('Location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up/Login</title>
    <link rel="icon" type="image/svg+xml" sizes="16x16" href="/assets/img/bot.svg?h=4a1db879f985bc12d967ad91c42b322a">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=c06c53460ac6ab7e74057187c6fd8adc">
    <link rel="stylesheet" href="/assets/css/Inter.css?h=f7145c10b54ddcfd2d2d4c7d7f26622a">
    <link rel="stylesheet" href="/assets/css/Lora.css?h=ba9bcf208f993143633c489b5fb25c57">
    <link rel="stylesheet" href="/assets/css/swiper-icons.css?h=c7acc97a8ef16e20b0cd8626a5c9c098">
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
                </ul><a class="btn btn-primary shadow" role="button" data-bss-hover-animate="jello" href="signup.php">Sign up</a>
            </div>
        </div>
    </nav><!-- End: Navbar Centered Links -->
    <section class="py-5">
        <div class="container">
            <!-- Start: Login Form Basic -->
            <section class="py-4 py-xl-5">
                <div class="container">
                    <!-- Start: Login Form Basic -->
                    <section class="py-4 py-xl-5">
                        <div class="container" id="login-form" style="display: none;">
                            <div class="row mb-5">
                                <div class="col-md-8 col-xl-6 text-center mx-auto">
                                    <h2 id = "loginid" >Login</h2>
                                    <p>Login to Your HelpBuddy Account</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-5">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                                </svg></div>
                                            <form class="text-center" method="post" action="login.php">
                                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                                                <div class="mb-3"><button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" name="login" value="Login">Login</button></div>
                                                <p class="text-muted"><a href="#0" onclick="switchForm('forgot')">Forgot your password?</a></p>
                                                <p class="text-muted">Don't have an account yet? <a href="#0" onclick="switchForm('signup')">Signup here</a>.</p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container" id="forgot-form" style="display: none;">
                            <div class="row mb-5">
                                <div class="col-md-8 col-xl-6 text-center mx-auto">
                                    <h2>Reset Password</h2>
                                    <p>Reset Your HelpBuddy Password</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-5">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                                </svg></div>
                                            <form class="text-center" method="post" action="forgot.php">
                                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                                                <div class="row mb-3">
                                                        <div class="col-md-5">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <select class="form-control" name="country_code">
                                                                    <option value="+1" style="background-color: #2d2c38; color: white;">+1 (US)</option>
                                                                    <option value="+44" style="background-color: #2d2c38; color: white;">+44 (UK)</option>
                                                                    <option value="+91" style="background-color: #2d2c38; color: white;">+91 (IN)</option>
                                                                    <option value="+61" style="background-color: #2d2c38; color: white;">+61 (AU)</option>
                                                                    <option value="+86" style="background-color: #2d2c38; color: white;">+86 (CN)</option>
                                                                    <option value="+33" style="background-color: #2d2c38; color: white;">+33 (FR)</option>
                                                                    <option value="+49" style="background-color: #2d2c38; color: white;">+49 (DE)</option>
                                                                    <option value="+81" style="background-color: #2d2c38; color: white;">+81 (JP)</option>
                                                                    <option value="+65" style="background-color: #2d2c38; color: white;">+65 (SG)</option>
                                                                    <option value="+82" style="background-color: #2d2c38; color: white;">+82 (KR)</option>
                                                                    <option value="+41" style="background-color: #2d2c38; color: white;">+41 (CH)</option>
                                                                    <option value="+971" style="background-color: #2d2c38; color: white;">+971 (AE)</option>
                                                                    <option value="+44" style="background-color: #2d2c38; color: white;">+44 (UK)</option>
                                                                    <!-- add more options as per your requirement -->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Phone Number" name="number" minlength="10" maxlength="10">
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="mb-3"><button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" name="forgot" value="Forgot">Get Reset Code</button></div>
                                                <p class="text-muted">Remembered Your Password? <a href="#0" onclick="switchForm('login')">Login here</a>.</p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container" id="signup-form">
                            <div class="row mb-5">
                                <div class="col-md-8 col-xl-6 text-center mx-auto">
                                    <h2 id = "signupid">Sign Up</h2>
                                    <p>Sign Up to Your HelpBuddy Account</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-5">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                                </svg></div>
                                            <form class="text-center" method="post" action="signin.php">
                                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                                                <div class="mb-3"><button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" name="signup" value="Sign Up">Sign Up</button></div>
                                                <p class="text-muted">Already have a HelpBuddy account? <a href="#0" onclick="switchForm('login')">Login here</a>.</p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!-- End: Login Form Basic -->
                </div>
            </section><!-- End: Login Form Basic -->
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
        function switchForm(formName) {
        if (formName == "signup") {
            document.getElementById("signup-form").style.display = "block";
            document.getElementById("login-form").style.display = "none";
            document.getElementById("forgot-form").style.display = "none";
        } else if (formName == "login") {
            document.getElementById("signup-form").style.display = "none";
            document.getElementById("login-form").style.display = "block";
            document.getElementById("forgot-form").style.display = "none";
        }
        else if(formName="forgot") {
            document.getElementById("signup-form").style.display = "none";
            document.getElementById("login-form").style.display = "none";
            document.getElementById("forgot-form").style.display = "block";
        }
}
function scrollToElement(elementId) {
    var element = document.getElementById(elementId);
    element.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
}
scrollToElement('signupid');

</script>

<script>
		var alertMessage = "<?php echo $alert_message ?>";
		if (alertMessage !== '') {
			alert(alertMessage);
		}
        alertMessage ="";
	</script>
</body>

</html>