<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>J143- Contact Us</title>
    <?php include"assets/css/stylesheet.php";?>
</head>

<body>
  <header class="header">
      <div class="container">
        <div class="row flexbox-center">
          <div class="col-lg-2 col-md-3 col-6">
            <div class="logo">
              <a href="index.php"><img src="assets/img/logo.png" class="logo"></a>
            </div>
          </div>
          <div class="col-lg-10 col-md-9 col-6">
            <div class="responsive-menu"></div>
              <div class="mainmenu">
                  <ul id="primary-menu">
                    <li><a class="nav-link" href="index.php">Explore</a></li>
                    <li class="navbar dropdown">
                      <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item black" href="product-toner.php">Toner</a>
                        <a class="dropdown-item black" href="product-ink.php">Ink</a>
                        <a class="dropdown-item black" href="product-printer.php">Printer</a>
                      </div>
                    </li>
                    <li><a class="nav-link" href="support.php">Support</a></li>
                    <li><a class="nav-link" href="about-us.php">About Us</a></li>
                    <li><a class="nav-link active" href="contact-us.php">Contact Us</a></li>
                    <li><a class="nav-link view" href="sitemap.php">Sitemap</a></li>
                  </ul>
              </div>
          </div>
        </div>
      </div>
  </header>
  <section class="hero-area breadcrumb-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="hero-area-content padding-lg">
              <h1>CONTACT US</h1>
            </div>
          </div>
        </div>
      </div>
  </section>
<div class="container padding-xl-contacts">
  <div class="row">
    <div class="col-lg-6 col-sm-6">
      <div class="contact-form">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.7916179814233!2d120.96660431493734!3d14.667763989759674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b43a35750777%3A0x44f6a63521191355!2sJ143+Commercial+Inc!5e0!3m2!1sen!2sph!4v1541401572288" width="600" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="col-lg-6 col-sm-6">
      <div class="contact-address">
        <h4>Address</h4>
        <p>42d Maria Clara st. Acacia, Malabon, 1474 Metro Manila</p>
          <ul>
            <li>
              <div class="contact-address-icon">
                <i class="icofont icofont-headphone-alt"></i>
              </div>
              <div class="contact-address-info">
                <a class="black" href="callto:(02) 285 5943">(02) 285 5943</a>
              </div>
            </li>
            <li>
              <div class="contact-address-icon">
                <i class="icofont icofont-envelope"></i>
              </div>
              <div class="contact-address-info">
                <a class="black" href="mailto:j143@gmail.com">j143@gmail.com</a>
              </div>
            </li>
            <li>
              <div class="contact-address-icon">
                <i class="icofont icofont-web"></i>
              </div>
              <div class="contact-address-info">
                <a class="black" ref="www.j143.com">www.j143.com</a>
              </div>
            </li>
          </ul>
      </div>
  </div>



  <!--<div class="col-lg-6" style="padding-bottom: 5%;padding-top: 5%;">
    <div class="holder">
      <center>
        <iframe src="https://www.google.com/maps/embed/v1/search?q=J143+Commercial+Inc.&key=AIzaSyBq5OaJN_X91AAJ3mmgDRzNZvm8DFATmz8" style="width:80%; height:500px;" frameborder="0" style="border:0" allowfullscreen></iframe>
      </center>
    </div>
  </div>
  <div class="col-lg-6" style="padding-top: 5%">
    <h4 style="color: #000000">Address</h4>
    <p>42d Maria Clara st. Acacia, Malabon, 1474 Metro Manila</p>
    <br>
    <h4>Contact No.</h4>
    <p>(02) 285 5943</p>
  </div>-->
   </div>
</div>
  <?php include"libs/footer.php";?>
  <?php include"assets/js/script.php";?>
</body>

</html>