<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>J143 | Products - Toner</title>
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
                      <a class="dropdown-toggle active" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
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
              <h1>PRODUCTS</h1>
            </div>
          </div>
        </div>
      </div>
  </section>
<?php include "libs/accordion-menu-toner.php";?>
<div class="container">
  <div class="row">
    <div id="myBtnContainer" class="col-md-3 col-xs-6 padding-products">
      <h4 class="margin-prod-1">Filtered By:</h4>
      <p class="black margin-prod">Category</p>
      <p class="margin-prod">Toner</p>
      <br>
      <p class="black margin-prod">Brand</p>
      <div>
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('all')">
        <label class="form-check-label" for="chekboxRules">All</label>
      </div>
      <div>
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('epson')">
        <label class="form-check-label" for="chekboxRules">Epson</label>
      </div>
      <div>
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('hp')">
        <label class="form-check-label" for="safeTheInfo">HP</label>
      </div>
      <div>
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('canon')">
        <label class="form-check-label" for="safeTheInfo">Canon</label>
      </div>
      <div>
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('brother')">
        <label class="form-check-label" for="safeTheInfo">Brother</label>
      </div>
      <br>
      <p class="black margin-prod">Price</p>
      <div>
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('0-999')">
        <label class="form-check-label" for="chekboxRules">0-999</label>
      </div>
      <div>
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('1000-2000')">
        <label class="form-check-label" for="safeTheInfo">1000-2000</label>
      </div>
      <div>
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('2000-5000')">
        <label class="form-check-label" for="safeTheInfo">2000-5000</label>
      </div>
      <div>
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('5000-10000')">
        <label class="form-check-label" for="safeTheInfo">5000-10000</label>
      </div>
    </div>


    <div class="col-md-9 col-sm-6 col-xs-12 padding-products">
      <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12 card-style filterDiv epson 1000-2000">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-epson.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Laser Toner Cartridge</a></h4>
                <p class="card-text red">&#8369; 1,500.00</p><br>
                <a href="product-profile-toner-1.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv epson 1000-2000">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-epson-1.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Laser Toner Cartridge</a></h4>
                <p class="card-text red">&#8369; 1,500.00</p><br>
                <a href="product-profile-toner-2.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv epson 1000-2000">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-epson-2.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Laser Toner Cartridge</a></h4>
                <p class="card-text red">&#8369; 1,500.00</p><br>
                <a href="product-profile-toner-3.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv canon 1000-2000">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-canon.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Canon Geniune PIXMA Ink GI-790</a></h4>
                <p class="card-text red">&#8369; 1,895.00</p><br>
                <a href="product-profile-toner-4.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv canon 1000-2000">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-canon-1.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Canon 746 CL-746 Colour Inkjet</a></h4>
                <p class="card-text red">&#8369; 1,169.00</p><br>
                <a href="product-profile-toner-5.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv canon 2000-5000">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-canon-2.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Canon PGI-750BK / CLI-751 Refillable</a></h4>
                <p class="card-text red">&#8369; 2,150.00</p><br>
                <a href="product-profile-toner-6.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv brother 0-999">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-hp.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>HP 63 Original Ink Advantage Combo</a></h4>
                <p class="card-text red">&#8369; 895.00</p><br>
                <a href="product-profile-toner-7.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv brother 1000-2000">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-hp-1.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>HP 63 Original Ink Advantage Combo</a></h4>
                <p class="card-text red">&#8369; 1,895.00</p><br>
                <a href="product-profile-toner-8.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv brother 1000-2000">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-hp-2.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>HP F6V27AA 680 Original Ink (Black)</a></h4>
                <p class="card-text red">&#8369; 1,895.00</p><br>
                <a href="product-profile-toner-9.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv hp 0-999">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-brother.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Brother Ink (Original) for DCP-T30</a></h4>
                <p class="card-text red">&#8369; 750.00</p><br>
                <a href="product-profile-toner-10.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv hp 1000-2000">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-brother-1.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Brother LC535XL-Y / LC535XL-M</a></h4>
                <p class="card-text red">&#8369; 1,895.00</p><br>
                <a href="product-profile-toner-11.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 card-style filterDiv hp 1000-2000">
            <div class="card">
              <img class="card-img-top" src="img/product-toner-brother-2.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Brother Ink (Original) for DCP-T30</a></h4>
                <p class="card-text red">&#8369; 1,895.00</p><br>
                <a href="product-profile-toner-12.php" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


<?php include"libs/footer.php";?>
<?php include"assets/js/script.php";?>
</body>
</html>