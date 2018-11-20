<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>J143 | About Us</title>
    <?php include "assets/css/stylesheet.php";?>
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
                    <li><a class="nav-link active" href="about-us.php">About Us</a></li>
                    <li><a class="nav-link" href="contact-us.php">Contact Us</a></li>
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
                <h1>About Us</h1>
              </div>
            </div>
          </div>
        </div>
    </section>

<div class="container">
  <div class="row"> 
      <div class="col-lg-5 padding-md">
        <p class="t-align black" style="padding-top: 5%;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><br>
        <p class="t-align black">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <div class="col-lg-7" style="padding-top: 7%;padding-bottom: 2%;">
        <img src="img/about-us-img.jpg">
      </div>
      
    <div class="col-lg-6 padding-md">
      <h2 style="color: #0062cc">Our Mission</h2><br>
      <p class="t-align">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br>
      <h2 style="color: #0062cc">Our Vision</h2><br>
      <p class="t-align">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="col-lg-6" style="padding-top: 11%;padding-bottom: 5%;">
        <img src="img/vision-img.jpg" class="f-right">
    </div>
  </div>
</div>
 
  <?php include"libs/footer.php";?>
  <?php include"assets/js/script.php";?>
</body>
</html>