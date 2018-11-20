<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>J143 | Products</title>
    <?php include "assets/css/stylesheet.php";?>
<style>
.filterDiv {
  float: left;
  display: none;
}
.show {
  display: block;
}
.container {
  overflow: hidden;
}
</style>
</head>

<body>
  <header class="header">
      <div class="container">
        <div class="row flexbox-center">
          <div class="col-lg-2 col-md-3 col-6">
            <div class="logo">
              <a href="index.php"><img src="assets/img/logo.png" alt="logo" /></a>
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
            <div class="hero-area-content" style="padding-bottom: 10%;padding-top: 10%;">
              <h1>PRODUCTS</h1>
            </div>
          </div>
        </div>
      </div>
  </section>

<div class="container">
  <div class="row">
    <div id="myBtnContainer" class="col-lg-3 col-sm-3" style="padding-top: 5%;padding-bottom: 5%;">
      <h4 style="padding-bottom: 5%;">Filtered By:</h4>
      <p style="color: #000000;">Category</p>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('toner')">
        <label class="form-check-label" for="chekboxRules">Toner</label>
      </div>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('ink')">
        <label class="form-check-label" for="safeTheInfo">Ink</label>
      </div>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('printer')" checked>
        <label class="form-check-label" for="safeTheInfo">Printer</label>
      </div>
      <br>
      <p style="color: #000000;">Brand</p>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('epson')">
        <label class="form-check-label" for="chekboxRules">Epson</label>
      </div>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('hp')">
        <label class="form-check-label" for="safeTheInfo">HP</label>
      </div>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('canon')">
        <label class="form-check-label" for="safeTheInfo">Canon</label>
      </div>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('brother')">
        <label class="form-check-label" for="safeTheInfo">Brother</label>
      </div>
      <br>
      <p style="color: #000000;">Price</p>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('0-4999')">
        <label class="form-check-label" for="chekboxRules">0-4,999</label>
      </div>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('5000-10000')">
        <label class="form-check-label" for="safeTheInfo">5000-10000</label>
      </div>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('10000-15000')">
        <label class="form-check-label" for="safeTheInfo">10000-15000</label>
      </div>
      <div class="col-lg-3" style="text-indent: 2%;">
        <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('15000-25000')">
        <label class="form-check-label" for="safeTheInfo">15000-25000</label>
      </div>
    </div>

<!--Page 1-->
    <div class="col-lg-9" style="padding-top: 5%;padding-bottom: 5%;">
      <div class="row">
          <div class="col-lg-4 col-sm-3 card-style filterDiv printer epson 10000-15000">
            <div class="card">
              <img class="card-img-top" src="img/product-printer-epson.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Epson PictureMate PM-520 Photo Printer</a></h4>
                <p class="card-text">&#8369; 10,895.00</p><br>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-3 card-style filterDiv printer hp">
            <div class="card">
              <img class="card-img-top" src="img/product-printer-hp.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Epson PictureMate PM-520 Photo Printer</a></h4>
                <p class="card-text">&#8369; 10,895.00</p><br>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-3 card-style filterDiv printer canon 10000-15000">
            <div class="card">
              <img class="card-img-top" src="img/product-printer-canon.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Epson PictureMate PM-520 Photo Printer</a></h4>
                <p class="card-text">&#8369; 10,895.00</p><br>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-3 card-style filterDiv printer brother 10000-15000">
            <div class="card">
              <img class="card-img-top" src="img/product-printer-epson-1.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Epson PictureMate PM-520 Photo Printer</a></h4>
                <p class="card-text">&#8369; 10,895.00</p><br>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-3 card-style filterDiv printer hp">
            <div class="card">
              <img class="card-img-top" src="img/product-printer-hp-2.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Epson PictureMate PM-520 Photo Printer</a></h4>
                <p class="card-text">&#8369; 10,895.00</p><br>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-3 card-style filterDiv printer canon 10000-15000">
            <div class="card">
              <img class="card-img-top" src="img/product-printer-canon-1.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Epson PictureMate PM-520 Photo Printer</a></h4>
                <p class="card-text">&#8369; 10,895.00</p><br>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-3 card-style filterDiv printer epson">
            <div class="card">
              <img class="card-img-top" src="img/product-printer-epson.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Epson PictureMate PM-520 Photo Printer</a></h4>
                <p class="card-text">&#8369; 10,895.00</p><br>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-3 card-style filterDiv printer hp">
            <div class="card">
              <img class="card-img-top" src="img/product-printer-hp.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Epson PictureMate PM-520 Photo Printer</a></h4>
                <p class="card-text">&#8369; 10,895.00</p><br>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-3 card-style filterDiv printer canon">
            <div class="card">
              <img class="card-img-top" src="img/product-printer-canon.png" alt="Card image cap">
              <div class="card-body">
                <hr>
                <h4 class="card-title"><a>Epson PictureMate PM-520 Photo Printer</a></h4>
                <p class="card-text">&#8369; 10,895.00</p><br>
                <a href="#" class="btn btn-primary">Read More</a>
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