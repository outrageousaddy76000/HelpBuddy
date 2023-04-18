<?php
session_start();

if(!isset($_SESSION['email'])) {
    // Redirect to logged-in version of the page
    header('Location: privacy.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Privacy Policy</title>
    <link rel="icon" type="image/svg+xml" sizes="16x16" href="/assets/img/bot.svg?h=4a1db879f985bc12d967ad91c42b322a">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=c06c53460ac6ab7e74057187c6fd8adc">
    <link rel="stylesheet" href="/assets/css/Inter.css?h=f6694340ecdee3406201ed8797a4d4de">
    <link rel="stylesheet" href="/assets/css/Lora.css?h=30170a422423eee4bf9d1d17d3da7117">
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
    <section class="py-5" style="text-align: center;margin-left: 32px;margin-right: 32px;">
    <h1>Privacy Policy for HelpBuddy</h1>
        <p>At HelpBuddy, accessible from https://helpbuddy.me, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by HelpBuddy and how we use it.</p>
        <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
        <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in HelpBuddy. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.termsfeed.com/privacy-policy-generator/">Privacy Policy Generator</a>.</p>
        <h2>Consent</h2>
        <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
        <h2>Information we collect</h2>
        <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
        <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
        <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
        <h2>How we use your information</h2>
        <p>We use the information we collect in various ways, including to:</p>
        <ul>
            <li>Provide, operate, and maintain our website</li>
            <li>Improve, personalize, and expand our website</li>
            <li>Understand and analyze how you use our website</li>
            <li>Develop new products, services, features, and functionality</li>
            <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
            <li>Send you emails</li>
            <li>Find and prevent fraud</li>
        </ul>
        <h2>Log Files</h2>
        <p>HelpBuddy follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
        <h2>Cookies and Web Beacons</h2>
        <p>Like any other website, HelpBuddy uses "cookies". These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
        <p>For more general information on cookies, please read <a href="https://www.cookiepolicygenerator.com/sample-cookies-policy/">the Cookies Policy article</a>.</p>
        <h2>Our Advertising Partners</h2>
        <p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>
        <ul>
            <li><p>Google</p><p><a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p></li>
        </ul>
        <h2>Advertising Partners Privacy Policies</h2>
        <p>You may consult this list to find the Privacy Policy for each of the advertising partners of HelpBuddy.</p>
        <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on HelpBuddy, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
        <p>Note that HelpBuddy has no access to or control over these cookies that are used by third-party advertisers.</p>
        <h2>Third Party Privacy Policies</h2>
        <p>HelpBuddy's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>
        <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
        <h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>
        <p>Under the CCPA, among other rights, California consumers have the right to:</p>
        <p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
        <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
        <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
        <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
        <h2>GDPR Data Protection Rights</h2>
        <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
        <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
        <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
        <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
        <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
        <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
        <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
        <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
        <h2>Children's Information</h2>
        <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
        <p>HelpBuddy does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
        <br />
        <h1>Terms and Conditions</h1>
<p>Last updated: April 17, 2023</p>
<p>Please read these terms and conditions carefully before using Our Service.</p>
<h1>Interpretation and Definitions</h1>
<h2>Interpretation</h2>
<p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
<h2>Definitions</h2>
<p>For the purposes of these Terms and Conditions:</p>
<ul>
<li>
<p><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p>
</li>
<li>
<p><strong>Country</strong> refers to: Uttar Pradesh,  India</p>
</li>
<li>
<p><strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to HelpBuddy.</p>
</li>
<li>
<p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
</li>
<li>
<p><strong>Service</strong> refers to the Website.</p>
</li>
<li>
<p><strong>Terms and Conditions</strong> (also referred as "Terms") mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service. This Terms and Conditions agreement has been created with the help of the <a href="https://www.termsfeed.com/terms-conditions-generator/" target="_blank">TermsFeed Terms and Conditions Generator</a>.</p>
</li>
<li>
<p><strong>Third-party Social Media Service</strong> means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.</p>
</li>
<li>
<p><strong>Website</strong> refers to HelpBuddy, accessible from <a href="https://helpbuddy.me" rel="external nofollow noopener" target="_blank">https://helpbuddy.me</a></p>
</li>
<li>
<p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
</li>
</ul>
<h1>Acknowledgment</h1>
<p>These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.</p>
<p>Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.</p>
<p>By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.</p>
<p>You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.</p>
<p>Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.</p>
<h1>Links to Other Websites</h1>
<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.</p>
<p>The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
<p>We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.</p>
<h1>Termination</h1>
<p>We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.</p>
<p>Upon termination, Your right to use the Service will cease immediately.</p>
<h1>Limitation of Liability</h1>
<p>Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven't purchased anything through the Service.</p>
<p>To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.</p>
<p>Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent permitted by law.</p>
<h1>"AS IS" and "AS AVAILABLE" Disclaimer</h1>
<p>The Service is provided to You "AS IS" and "AS AVAILABLE" and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.</p>
<p>Without limiting the foregoing, neither the Company nor any of the company's provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.</p>
<p>Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.</p>
<h1>Governing Law</h1>
<p>The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.</p>
<h1>Disputes Resolution</h1>
<p>If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.</p>
<h1>For European Union (EU) Users</h1>
<p>If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which you are resident in.</p>
<h1>United States Legal Compliance</h1>
<p>You represent and warrant that (i) You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a "terrorist supporting" country, and (ii) You are not listed on any United States government list of prohibited or restricted parties.</p>
<h1>Severability and Waiver</h1>
<h2>Severability</h2>
<p>If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p>
<h2>Waiver</h2>
<p>Except as provided herein, the failure to exercise a right or to require performance of an obligation under these Terms shall not effect a party's ability to exercise such right or require such performance at any time thereafter nor shall the waiver of a breach constitute a waiver of any subsequent breach.</p>
<h1>Translation Interpretation</h1>
<p>These Terms and Conditions may have been translated if We have made them available to You on our Service.
You agree that the original English text shall prevail in the case of a dispute.</p>
<h1>Changes to These Terms and Conditions</h1>
<p>We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at Our sole discretion.</p>
<p>By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.</p>
<h1>Contact Us</h1>
<p>If you have any questions about these Terms and Conditions, You can contact us:</p>
<ul>
<li>By email: contact@helpbuddy.me</li>
</ul>
<br />
<h1>Return Policy</h1>
<p>We strictly follow a policy of no returns!</p>
    </section><!-- Start: Footer Multi Column -->
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