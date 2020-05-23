<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('php/form-process.php'); ?>
    <!-- Logo and title of website -->
    <link rel="icon" type="image/png" href="images/djdclogo.png" />
    <title>D J D C</title>

    <!-- Stylesheets and Bootstap theme imports -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="fonts/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/animate-css/animate.min.css">
  </head>

  <!-- Page load animation -->
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <!-- Mobile navigation -->
  <div class="site-wrap"  id="home-section">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

  <!-- Front cover section -->
  <section id="cover">
      <div class="site-blocks-cover">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                  <div class="logocover text-center">
                  <img class="pb-3" src="images/djdclogowhite.png" alt="Error">
                </div>
                  <h2 class="text-light pb-5 text-center">We <span class="rotating">design modern websites, create responsive websites, manage your websites, are D J D C</span></h2>
                  <div class="smooth-scroll text-center" role="navigation">
                    <a data-smooth="#our-team-section" href="#our-team-section" class="btn btn-cover mr-2 mb-2 smooth-scroll">Get Started</a>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
    </section>

    <!-- Desktop navigation bar -->
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-3 col-xl-4  d-block">
            <h1 class="mb-0 site-logo"><a href="#home-section" class="brand-color h2 mb-0"> <img src="images/djdclogo.png" class="logo" alt=""> D J D C</a></h1>
          </div>

          <div class="col-12 col-md-9 col-xl-8 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                <li><a href="#our-team-section" class="nav-link">Who are we?</a></li>
                <li><a href="#features-section" class="nav-link">What do we do?</a>
                <li><a href="#contact-section" class="nav-link">Get in touch</a>
              </ul>
            </nav>
          </div>

          <!-- Hamburger menu for mobile -->
          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle brand-color float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </header>

    <!-- About us section -->
    <div class="site-section" id="our-team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center" data-aos="fade-up">
          <div class="col-7 text-center  mb-3">
            <h2 class="section-title pt-4">About us</h2>
          </div>
        </div>

        <div class="row no-gutters">

          <!-- Dylan Cornish -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="person text-left">
                <div class="bio-img">
                  <figure><img src="images/dylan.jpg" alt="Image" class="img-fluid"></figure>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/dylan-cornish/" target="_blank"><span class="icon-linkedin"></span></a>
                  </div>
                </div>
                  <h2 class="brand-color h1">Dylan Cornish</h2>
                    <span class="sub-title d-block text-dark">Founder & front-end developer</span>
                      <span> Hey there! I am an experienced Systems Analyst with expertise in HTML, CSS and JavaScript, as well as requirements gathering and critical thinking.</span>
                </div>
            </div>

            <!-- Lee Dearden -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="person text-left">
                <div class="bio-img">
                  <figure><img src="images/ld2.jpg" alt="Image" class="img-fluid"></figure>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/lee-dearden/" target="_blank"><span class="icon-linkedin"></span></a>
                  </div>
                </div>
                  <h2 class="brand-color h1">Lee Dearden</h2>
                    <span class="sub-title d-block text-dark">Founder & back-end developer</span>
                      <span class=> Insert profile </span>
              </div>
            </div>

            <!-- Lee Tierney -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="person text-left">
                <div class="bio-img">
                  <figure><img src="images/lt.jpg" alt="Image" class="img-fluid"></figure>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/lee-tierney-0aa947112" target="_blank"><span class="icon-linkedin"></span></a>
                  </div>
                </div>
                  <h2 class="brand-color h1">Lee Tierney</h2>
                    <span class="sub-title d-block text-dark">Founder & back-end developer</span>
                      <span class=> Insert profile </span>
              </div>
            </div>
        </div>
      </div>
    </div>

    <!-- What we do section -->
    <div class="site-section" id="features-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
          <div class="col-8 text-center mb-5">
            <h2 class="section-title pt-4">What we can do for you</h2>
            <p>Whatever your business, D J D C works with you to deliver value with a hands on, agile approach to design, develop and deploy the high quality responsive website you need.</p>
          </div>
        </div>

        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon">
                <span class="icon-wrap"><span class="oi oi-brush" title="brush" aria-hidden="true"></span></span>
              </div>
              <div>
                <h3>Web Design</h3>
                <p>Let's sit down and have a chat to fully analyse and visualise exactly how you would like your website to look.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-block">
              <div class="unit-4-icon">
                <span class="icon-wrap"><span class="oi oi-code" title="code" aria-hidden="true"></span></span>
              </div>
              <div>
                <h3>Web Development</h3>
                <p>Now that we have created the vision for your website, let us do the rest by building your desired website.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up"  data-aos-delay="200">
            <div class="unit-4 d-block">
              <div class="unit-4-icon">
                <span class="icon-wrap"><span class="oi oi-bar-chart" title="bar-chart" aria-hidden="true"></span></span>
              </div>
              <div>
                <h3>Web Maintenance</h3>
                <p>Want your website to be continously enhanced and updated? Let's keep in touch for long term success.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact us section -->
    <div class="site-section" id="contact-section">
      <div class="container">
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 text-center">
            <h2 class="section-title">Contact us</h2>
            <p>Simply complete the form below and we'll be in touch within 2 days.</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">
            <form id="contact-form" name="contact-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" class="p-5 bg-white" data-aos="fade-up" data-aos-delay="100">
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="brand-color" for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" class="form-control rounded-0" value="<?= $fname ?>">
                      <span class="error"><?= $fname_error ?></span>
                </div>

                <div class="col-md-6">
                  <label class="brand-color" for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" class="form-control rounded-0" value="<?= $lname ?>">
                      <span class="error"><?= $lname_error ?></span>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="brand-color" for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control rounded-0" value="<?= $email ?>">
                      <span class="error"><?= $email_error ?></span>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="brand-color" for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control rounded-0" value="<?= $subject ?>">
                      <span class="error"><?= $subject_error ?></span>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="brand-color" for="message">Message</label>
                    <textarea name="message" type="text" id="message" cols="30" rows="7" class="form-control rounded-0" value="<?= $message ?>"></textarea>
                      <span class="error"><?= $message_error ?></span>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Send Message" class="btn btn-primary mr-2 mb-2" data-submit="...Sending">
                    <div class="success"><?= $success; ?></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer py-0 text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="mb-0"> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | D J D C</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript and jQuery imports -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="lib/morphext/morphext.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>


  </body>
</html>
