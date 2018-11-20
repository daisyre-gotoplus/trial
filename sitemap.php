<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>J143 | Sitemap</title>
    <?php include"assets/css/stylesheet.php";?>
    <style type="text/css">
      a{
        color: #000;
      }
    </style>
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
                    <li class="navbar dropdown active">
                      <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item black" href="product-toner.php">Toner</a>
                        <a class="dropdown-item black" href="product-ink.php">Ink</a>
                        <a class="dropdown-item black" href="product-printer.php">Printer</a>
                      </div>
                    </li>
                    <li><a class="nav-link" href="support.php">Support</a></li>
                    <li><a class="nav-link" href="about-us.php">About Us</a></li>
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
              <h1>SITEMAP</h1>
            </div>
          </div>
        </div>
      </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 padding-md">
        <h4 class="h4-indent">
          <a href="index.php">Explore</a>
        </h4>
          <p class="text-indent">
            <a href="index.php">About J143</a>
          </p>
          <p class="text-indent">
            <a href="index.php">Epson</a>
          </p>
          <p class="text-indent">
            <a href="index.php">HP</a>
          </p>
          <p class="text-indent">
            <a href="index.php">Canon</a>
          </p>
          <p class="text-indent">
            <a href="index.php">Brother</a>
          </p>
        <br>
        <h4 class="h4-indent">
          <a href="products.php">Products</a>
        </h4>
          <p class="text-indent">
            <a href="products.php">Toner</a>
          </p>
          <p class="text-indent">
            <a href="products.php">Ink</a>
          </p>
          <p class="text-indent">
            <a href="products.php">Printer</a>
          </p>
            <p class="text-indent-indent">
              <a href="products.php">Overview</a>
            </p>
            <p class="text-indent-indent">
              <a href="products.php">Specification</a>
            </p>
            <p class="text-indent-indent">
              <a href="products.php">Support</a>
            </p>
            <br>
        <h4 class="h4-indent">
          <a href="support.php">Support</a>
        </h4>
          <p class="text-indent">
            <a href="support.php">Search Product Support</a>
          </p>
          <p class="text-indent">
            <a href="support.php">FAQ</a>
          </p>
      </div>

       <div class="col-lg-6 padding-md">
        <h4 class="h4-indent">
          <a href="about-us.php">About Us</a>
        </h4>
          <p class="text-indent">
            <a href="about-us.php">Vision</a>
          </p>
          <p class="text-indent">
            <a href="about-us.php">Mission</a>
          </p>
        <br>
        <h4 class="h4-indent">
          <a href="contact-us.php">Contact Us</a>
        </h4>
          <p class="text-indent">
            <a href="contact-us.php">Address</a>
          </p>
          <p class="text-indent">
            <a href="contact-us.php">Contact Number</a>
          </p>
      </div>
    </div>
  </div>

  <?php include"libs/footer.php";?>
  <?php include"assets/js/script.php";?>
</body>

</html>