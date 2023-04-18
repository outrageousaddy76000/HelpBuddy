<?php
session_start();

if(!isset($_SESSION['email'])) {
    // Redirect to sign-up version of the page
    header('Location: signup.php');
}
if(!isset($_SESSION['username'])) {
    // Redirect to sign-up version of the page
    header('Location: dashboard.php');
}
?>
<?php
session_start(); // start the session

// connect to the database
$host = 'localhost';
$username = "help_admin";
$password = "2UfFvKihElhcjB9D";
$dbname = "help_database";
$conn = mysqli_connect($host, $username, $password, $dbname);
$email = $_SESSION['email'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'"));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/svg+xml" sizes="16x16" href="/assets/img/bot.svg?h=4a1db879f985bc12d967ad91c42b322a">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=c06c53460ac6ab7e74057187c6fd8adc">
    <link rel="stylesheet" href="/assets/css/Inter.css?h=59b8047c36a7cf1f64f59859c6ad52d1">
    <link rel="stylesheet" href="/assets/css/Lora.css?h=1fac552a6c2ebd1a263d1a800beb5ef9">
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
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style media="screen">
    .upload{
      width: 140px;
      position: relative;
      margin: auto;
      text-align: center;
    }
    .upload img{
      border-radius: 50%;
      border: 6px solid #DCDCDC;
      width: 125px;
      height: 125px;
    }
    .upload .rightRound{
      position: absolute;
      bottom: 0;
      right: 0;
      background: #00B4FF;
      width: 32px;
      height: 32px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .leftRound{
      position: absolute;
      bottom: 0;
      left: 0;
      background: red;
      width: 32px;
      height: 32px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .fa{
      color: white;
    }
    .upload input{
      position: absolute;
      transform: scale(2);
      opacity: 0;
    }
    .upload input::-webkit-file-upload-button, .upload input[type=submit]{
      cursor: pointer;
    }
  </style>
    <style>
        /* Style for the text input box */
        .input-box {
            display: none;
        }
    </style>
  <body>
<!-- Start: Navbar Centered Links -->
<nav class="navbar navbar-dark navbar-expand-md sticky-top py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center flash animated me-2 bs-icon" style="background: url(&quot;/assets/img/bot.svg?h=4a1db879f985bc12d967ad91c42b322a&quot;) top / contain;"></span><span data-bss-hover-animate="pulse" style="font-family: papyrus;font-weight: bold;font-style: italic;">HelpBuddy</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-end mt-auto" id="navcol-2" style="width: 649.156px;">
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
            </div>
        </div>
    </nav><!-- End: Navbar Centered Links -->
    <form class="form" id = "form" action="imgupdate.php" enctype="multipart/form-data" method="post">
      <div class="upload">
        <img src="img/<?php echo $user['image']; ?>" id = "image">

        <div class="rightRound" id = "upload">
          <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera"></i>
        </div>

        <div class="leftRound" id = "cancel" style = "display: none;">
          <i class = "fa fa-times"></i>
        </div>
        <div class="rightRound" id = "confirm" style = "display: none;">
          <input type="submit">
          <i class = "fa fa-check"></i>
        </div>
      </div>
    </form>
    <!-- Start: Newsletter Subscription Color -->
    <br />
    <section class="py-5" style="margin:auto;width:90%">
  <div class="d-flex justify-content-between w-80">
  <a class="btn btn-primary" role="button" data-bss-hover-animate="pulse" href="shop.php">Shop</a>
    <div class="btn-group" role="group">
    <a class="btn btn-primary" role="button" data-bss-hover-animate="pulse" href="cart.php">Cart</a>
    </div>
    <div class="btn-group" role="group">
    <button class="btn btn-primary" type="button" onclick="destroySession();">Logout</button>
</section>


    <section class="py-5">
  <ul class="nav nav-tabs d-flex justify-content-center" style="align-items:center">
    <li class="nav-item" style="width: 50%; text-align: center;"><a class="nav-link" href="#0" onclick="changedoc('prof')" style="color: var(--bs-nav-tabs-border-color);">Profile</a></li>
    <li class="nav-item" style="width: 50%; text-align: center;"><a class="nav-link" href="#0" onclick="changedoc('serv')" style="color: var(--bs-nav-tabs-border-color);">Services</a></li>
  </ul>
</section>

    <!-- End: Newsletter Subscription Color -->
    <section class="doccontainer" style="margin: auto; width: 95%;display:none" id="prof">
    <section id="profview">
    <div class="container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First Name</td>
                                <td class="text-end"><?php echo $user["fname"]; ?></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td class="text-end"><?php echo $user["lname"]; ?></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td class="text-end"><?php echo $user["username"]; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td class="text-end"><?php echo $user["email"]; ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td class="text-end"><?php echo $user["gender"]; ?></td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td class="text-end"><?php echo $user["age"]; ?></td>
                            </tr>
                            <tr>
                                <td>Sign Up Time</td>
                                <td class="text-end"><?php echo $user["signup_time"]; ?></td>
                            </tr>
                            <tr>
                                <td>Country Code</td>
                                <td class="text-end"><?php echo $user["c_code"]; ?></td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td class="text-end"><?php echo $user["number"]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    <div class="container text-center"><button class="btn btn-primary" type="button" onclick="changeUpdate('update');">Update Credentials</button></div>
    <br />
    </section>
    <section class="py-5" id="update" style="display:none">
        <div class="container">
            <section class="py-4 py-xl-5">
                <div class="container">
                    <section class="py-4 py-xl-5">
                        <div class="container" id="update-form">
                            <div class="row mb-5">
                                <div class="col-md-8 col-xl-6 text-center mx-auto">
                                    <h2 id="cid">Update Profile</h2>
                                    <p>Update your HelpBuddy Profile</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                    <div class="card mx-auto mb-5">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                                </svg></div>
                                            <form class="text-center" method="post" action="update_user.php">
                                                <div class="row mb-3">
                                                    <div class="col-md-12"><input class="form-control form-control" type="text" name="username" placeholder="Username" maxlength="30" required></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12"><input class="form-control form-control" type="text" name="password" placeholder="Password" maxlength="30" required></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6"><input class="form-control form-control" type="number" name="age" placeholder="Age" required=""></div>
                                                    <div class="col-md-6"><select class="form-control" name="gender" required="">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="other">Other</option>
                                                        </select></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-5">
                                                        <div class="input-group"></div><select class="form-control" name="country_code">
                                                            <option value="+1">+1 (US)</option>
                                                            <option value="+44">+44 (UK)</option>
                                                            <option value="+91">+91 (IN)</option>
                                                            <option value="+61">+61 (AU)</option>
                                                            <option value="+86">+86 (CN)</option>
                                                            <option value="+33">+33 (FR)</option>
                                                            <option value="+49">+49 (DE)</option>
                                                            <option value="+81">+81 (JP)</option>
                                                            <option value="+65">+65 (SG)</option>
                                                            <option value="+82">+82 (KR)</option>
                                                            <option value="+41">+41 (CH)</option>
                                                            <option value="+971">+971 (AE)</option>
                                                            <option value="+44">+44 (UK)</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="input-group"><input class="form-control form-control" type="text" placeholder="Phone Number" name="number" minlength="10" maxlength="10"></div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12"><button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" name="uprofile" value="Complete Profile">Update</button></div><br />
                                                    <br />
                                                    <p class="text-muted">Go Back? <a href="#0" onclick="changeUpdate('profview');">View Profile</a></p>
                                                </div>
                                            </form><br>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </section>
    </section>

    <section class ="doccontainer" style="margin-left:2%;display:none" id="serv">
        <!-- Start: Articles Cards -->
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Your Services</h2>
                    <p>The Services you have access to can be navigated through here</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col" style="text-align: center;">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="/assets/img/doctor-verifying-patient-medical-report.svg?h=43bf9184049dbea62ff7378cd5eb2a7e">
                        <div class="card-body p-4">
                            <p class="text-primary card-text mb-0">HealthBuddy</p>
                            <div class="d-flex">
                                <div></div>
                            </div>
                        </div>
                    </div>
                        <?php
                            if ($user['hbdt'] > 0) {
                                $button_text = "Go";
                                } else {
                                $button_text = "Unlock";
                                }
                        ?>
                <button class="btn btn-primary" id="hbd" type="button" data-bss-hover-animate="pulse" onclick="redirect('hbd');"><?php echo $button_text; ?></button>
                </div>
                <div class="col" style="text-align: center;">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="/assets/img/finance-insurance.svg?h=8792ee7ba6fbc20f36b7ee6507217594">
                        <div class="card-body p-4">
                            <p class="text-primary card-text mb-0">FinanceBuddy</p>
                            <div class="d-flex">
                                <div></div>
                            </div>
                        </div>
                    </div><?php
                            if ($user['fbdt'] > 0) {
                                $button_text = "Go";
                                } else {
                                $button_text = "Unlock";
                                }
                        ?>
                <button class="btn btn-primary" id="fbd" type="button" data-bss-hover-animate="pulse" onclick="redirect('fbd');"><?php echo $button_text; ?></button>
                </div>
                <div class="col" style="text-align: center;">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="/assets/img/man-discussing-personal-life-with-friend.svg?h=879119d22d6a3faea24bdbda74133d3a">
                        <div class="card-body p-4">
                            <p class="text-primary card-text mb-0">PersonalBuddy</p>
                            <div class="d-flex">
                                <div></div>
                            </div>
                        </div>
                    </div><?php
                            if ($user['pbdt'] > 0) {
                                $button_text = "Go";
                                } else {
                                $button_text = "Unlock";
                                }
                        ?>
                <button class="btn btn-primary" id="pbd" type="button" data-bss-hover-animate="pulse" onclick="redirect('pbd');"><?php echo $button_text; ?></button>
                </div>
                <div class="col" style="text-align: center;">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="/assets/img/online-exam.svg?h=6c786ad3bb0f050c3091ebcb82e67f1c">
                        <div class="card-body p-4">
                            <p class="text-primary card-text mb-0">ExamBuddy</p>
                        </div>
                    </div><?php
                            if ($user['ebdt'] > 0) {
                                $button_text = "Go";
                                } else {
                                $button_text = "Unlock";
                                }
                        ?>
                <button class="btn btn-primary" id="ebd" type="button" data-bss-hover-animate="pulse" onclick="redirect('ebd');"><?php echo $button_text; ?></button>
                </div>
            </div>
        </div><!-- End: Articles Cards -->
    </section>
    <h2 id="choose-service-message" style="margin-bottom:100px;margin-top: 60px;text-align: center;" >Choose a Section</h2>
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
    <script type="text/javascript">
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; // Back to previous image

        document.getElementById("cancel").style.display = "none";
        document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }
    </script>
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
    function changedoc(sectionId) {
        document.getElementById("choose-service-message").style.display = "none";
    // Get all sections with class name "section"
        var sections = document.getElementsByClassName("doccontainer");

    // Hide all sections except for the one with the passed sectionId
        for (var i = 0; i < sections.length; i++) {
            if (sections[i].id === sectionId) {
                sections[i].style.display = "block";
            } else {
                sections[i].style.display = "none";
            }
        }
    }
    function changeUpdate(id_name) {
      if(id_name=="update"){
        document.getElementById("profview").style.display = "none";
        document.getElementById("update").style.display = "block";
      }
      else{
        document.getElementById("profview").style.display = "block";
        document.getElementById("update").style.display = "none";
      }
    }
    var alertMessage = "<?php echo $alert_message ?>";
		if (alertMessage !== '') {
			alert(alertMessage);
		}
        alertMessage ="";
        function redirect(id) {
        const buttonText = document.getElementById(id).innerText;
        
        if (buttonText === 'Unlock') {
            window.location.href = 'shop.php';
        } else if (buttonText === 'Go') {
            if (id === 'hbd') {
            window.location.href = 'chealth.php';
            } else if (id === 'fbd') {
            window.location.href = 'cfinance.php';
            } else if (id === 'pbd') {
            window.location.href = 'cpersonal.php';
            } else if (id === 'ebd') {
            window.location.href = 'cexam.php';
            }
        }
        }
    </script>
  </body>
</html>