<html class="wide wow-animation desktop landscape rd-navbar-static-linked" lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,700,800,900%7CBaloo">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php include('preloader.php')?>
<?php include('sideForm.php') ?>



  <div class="page animated" style="animation-duration: 500ms;">
    <!-- Banner--><a class="section section-banner text-center d-none d-xl-block" href="index.html" style="background-image: url(images/banner/background-04-1920x60.jpg); background-image: -webkit-image-set( url(images/banner/background-04-1920x60.jpg) 1x, url(images/banner/background-04-3840x120.jpg) 2x )"></a>
    <!-- Page Header-->
    <header class="section page-header page-header-2 section-custom-1-ally">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap" style="height: 96px;">
        <nav class="rd-navbar rd-navbar-creative rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="155px" data-xl-stick-up-offset="155px" data-xxl-stick-up-offset="155px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap, .rd-navbar-toggle-element"><span class="rd-navbar-toggle-inner"><span class="rd-navbar-toggle-element toggle-original-elements"><span></span></span><span class="rd-navbar-toggle-text on">Menu</span><span class="rd-navbar-toggle-text off">Close</span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index.php"><img class="brand-logo-dark" src="Logo-01.png" alt="" width="200"></a>
                </div>
              </div>
              <div class="rd-navbar-aside-outer">
                <button class="rd-navbar-aside-toggle" data-multitoggle="#rd-navbar-aside" aria-label="Aside Toggle"><span></span></button>
                <div class="rd-navbar-aside" id="rd-navbar-aside">
                  <ul class="rd-navbar-aside-list">
                    <li><span class="icon fas fa-envelope"></span><a href="#">info@ABC@example.com</a>
                    </li>
                    <li><span class="icon fas fa-phone"></span><a href="tel:#">0-000-000-0000</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="rd-navbar-nav-wrap toggle-original-elements">
              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav" style="margin: auto;">
                <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="onlineClass.php">Online Class</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="onlineCourse.php">Online Course</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="onlineExam.php">Online Exam</a>
                </li>
                <li class="rd-nav-item active"><a class="rd-nav-link" href="contact-us.php">Contact us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    <section class="section section-custom-1 bg-default" style="margin-top: 50px; padding-bottom:0px;">
      <div class="container">
        <div class="row row-50 justify-content-xl-between flex-lg-row-reverse">
          <div class="col-lg-12 col-xl-12">
            <div class="section-custom-1-block box-decoration">
              <div class="row row-40">
                <div class="col-md-6 col-lg-12">
                  <div class="d-flex justify-content-between">
                    <h4 class="text-uppercase font-weight-sbold wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Book a free lesson</h4><span class="icon mdi icon-sm linearicons-pencil3"></span>
                  </div>
                  <!-- RD Mailform-->
                  <form class="rd-form rd-mailform form-lg" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                    <div class="form-wrap form-wrap-icon wow fadeIn" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.05s; animation-name: fadeIn;">
                      <label class="form-label form-label-outside rd-input-label" for="contact-1-name">Name</label>
                      <input class="form-input form-control-has-validation" id="contact-1-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span><span class="form-validation"></span><span class="form-validation"></span><span class="form-validation"></span>
                      <div class="icon form-icon mdi mdi-account-outline"></div>
                    </div>
                    <div class="form-wrap form-wrap-icon wow fadeIn" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                      <label class="form-label form-label-outside rd-input-label" for="contact-1-phone">Phone</label>
                      <input class="form-input form-control-has-validation" id="contact-1-phone" type="text" name="phone" data-constraints="@PhoneNumber"><span class="form-validation"></span><span class="form-validation"></span><span class="form-validation"></span><span class="form-validation"></span>
                      <div class="icon form-icon mdi mdi-phone"></div>
                    </div>
                    <div class="form-wrap form-wrap-icon wow fadeIn" data-wow-delay=".15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeIn;">
                      <label class="form-label form-label-outside rd-input-label" for="contact-1-email">E-mail</label>
                      <input class="form-input form-control-has-validation" id="contact-1-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span><span class="form-validation"></span><span class="form-validation"></span><span class="form-validation"></span>
                      <div class="icon form-icon mdi mdi-email-outline"></div>
                    </div>
                    <div class="form-wrap wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                      <button class="button button-lg button-icon button-2 button-primary" type="submit">book
                        now</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   <!-- Page Footer-->
    <footer class="section footer-classic footer-classic-md">
      <div class="footer-classic-main">
        <div class="container">
          <div class="footer-classic-layout justify-content-sm-around justify-content-md-between">
            <div class="footer-classic-layout-item"><a class="brand" href="index.html">
              <img class="brand-logo-dark" src="Logo-01.png" alt="" width="200">
          </a>
              <div class="footer-classic-item-block footer-classic-item-block-1">
                <h6>10000+ Satisfied Students</h6>
                <div class="owl-carousel-quote-light">
                  <!-- Owl Carousel-->
                  <div class="owl-carousel owl-loaded" data-items="1" data-dots="false" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="30" data-nav-custom="#footer-owl-nav" data-animation-in="fadeIn" data-animation-out="fadeOut" data-mouse-drag="false" style="">
                    <div class="owl-stage-outer">
                      <div class="owl-stage" style="transform: translate3d(-940px, 0px, 0px); transition: all 0s ease 0s; width: 3290px;">
                        <div class="owl-item cloned" style="width: 440px; margin-right: 30px;">
                          <blockquote class="quote-light quote-light-sm">
                            <div class="icon linearicons-quote-open text-primary icon-md"></div>
                            <div class="quote-light-main">
                              <div class="quote-light-text">
                                <q>I like that it has a busy atmosphere but it’s never stressful. Everyone is very nice
                                  and you can ask anything at any time.</q>
                              </div>
                              <cite class="quote-light-cite">Kate Wilson</cite>
                            </div>
                          </blockquote>
                        </div>
                        <div class="owl-item cloned" style="width: 440px; margin-right: 30px;">
                          <blockquote class="quote-light quote-light-sm">
                            <div class="icon linearicons-quote-open text-primary icon-md"></div>
                            <div class="quote-light-main">
                              <div class="quote-light-text">
                                <q>The staff here is really supportive, teachers are great, the school has a good
                                  structure. Thank you!</q>
                              </div>
                              <cite class="quote-light-cite">Jane Smith</cite>
                            </div>
                          </blockquote>
                        </div>
                        <div class="owl-item cloned" style="width: 440px; margin-right: 30px;">
                          <blockquote class="quote-light quote-light-sm">
                            <div class="icon linearicons-quote-open text-primary icon-md"></div>
                            <div class="quote-light-main">
                              <div class="quote-light-text">
                                <q>I am really enjoying my experience here. Teachers are very friendly and there is a
                                  friendly atmosphere.</q>
                              </div>
                              <cite class="quote-light-cite">Peter McMillan</cite>
                            </div>
                          </blockquote>
                        </div>
                      </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button>
                    </div>
                    <div class="owl-dots disabled"></div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div>
                    <div class="owl-dots disabled"></div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div>
                    <div class="owl-dots disabled"></div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div>
                    <div class="owl-dots disabled"></div>
                  </div>
                  <div class="owl-nav" id="footer-owl-nav">
                    <button class="owl-arrow owl-arrow-prev" aria-label="Prev">
                      <svg width="20" height="16" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.7,15.1c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4L2.4,8l5.7-5.7c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0L0.3,7.3										c-0.4,0.4-0.4,1,0,1.4L6.7,15.1z M20,7H1v2h19V7z">
                        </path>
                      </svg>
                    </button>
                    <div class="owl-nav-divider"></div>
                    <button class="owl-arrow owl-arrow-next" aria-label="Next">
                      <svg width="20" height="16" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7L0 7L0 9Z">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-classic-layout-item">
              <h6 class="footer-classic-title inset-3">Popular Courses</h6>
              <div class="footer-classic-item-block footer-classic-item-block-3">
                <ul class="list-pricing">
                  <li><a href="#"><span class="list-pricing-title">English for Kids</span><span>$45</span></a></li>
                  <li><a href="#"><span class="list-pricing-title">Online Learning</span><span>$15</span></a></li>
                  <li><a href="#"><span class="list-pricing-title">German Club</span><span>$36</span></a></li>
                  <li><a href="#"><span class="list-pricing-title">Personal Lessons</span><span>$21</span></a></li>
                  <li><a href="#"><span class="list-pricing-title">Group Lessons</span><span>$35</span></a></li>
                </ul>
              </div>
            </div>
            <div class="footer-classic-layout-item">
              <h6 class="footer-classic-title inset-3">Get in Touch</h6>
              <div class="footer-classic-item-block">
                <ul class="list list-1">
                  <li><a href="#">Send a Message</a></li>
                  <li><a href="contact-us.html">Contacts</a></li>
                  <li><a href="#">Request a Callback</a></li>
                </ul>
                <ul class="list-inline list-inline-md">
                  <li><a class="link-2 icon mdi mdi-instagram" href="#"></a></li>
                  <li><a class="link-2 icon mdi mdi-facebook" href="#"></a></li>
                  <li><a class="link-2 icon mdi mdi-youtube-play" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-0">
        <div class="divider-2"></div>
      </div>
      <div class="footer-classic-aside">
        <div class="container">
          <p class="rights"><span>©&nbsp; </span><span class="copyright-year">2021</span><span>&nbsp;</span><span>Lingvo</span><span>. All rights
              reserved.</span><span> Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></span></p>
        </div>
      </div>
    </footer>
  </div>
  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

  <a href="#" id="ui-to-top" class="ui-to-top fa fa-angle-up"></a>





  <?php include('modal.php') ?>
</body>

</html>