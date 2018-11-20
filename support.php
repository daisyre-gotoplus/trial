<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>J143 | Support</title>
  <?php include "assets/css/stylesheet.php";?>
  <style type="text/css">
	.printer:hover {content: url('img/printer-icon-2.png');}
	.toner:hover {content: url('img/toner-icon-2.png');}
	.ink:hover {content: url('img/ink-icon-2.png');}
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
                    <li class="navbar dropdown">
                      <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item black" href="product-toner.php">Toner</a>
                        <a class="dropdown-item black" href="product-ink.php">Ink</a>
                        <a class="dropdown-item black" href="product-printer.php">Printer</a>
                      </div>
                    </li>
                    <li><a class="nav-link active" href="support.php">Support</a></li>
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
                <h1>PRINTER SUPPORT</h1>
                <h4 class="white-text">Get support for your printer</h4>
              </div>
            </div>
          </div>
      </div>
  </section>
  <div class="container padding-md">
    <div class="row">    
        <div class="col-lg-12">
        <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default search">
                      <span id="search_concept">Search all support</span>
                    </button>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Enter your product name or ask a question">
                <span class="input-group-btn">
                  <button class="btn btn-default search" type="button"><i class="fas fa-search"></i></button>
                </span>
            </div>
        </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
    <a href="product-toner.php">
      <img src="img/toner-icon.png" class="toner margin-icon-left" aria-hidden="false" alt="toner">
    </a>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
     <a href="product-ink.php"> 
    <img src="img/ink-icon.png" class="ink margin-icon-right-1" aria-hidden="false" alt="ink">
   </a>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
    <a href="product-printer.php">
    <img src="img/printer-icon.png" class="printer margin-icon-right" aria-hidden="false" alt="printer">
    </a>
    </div>
  </div>
  <hr>
</div>
<div class="container">
    <h1 class="black">FAQ</h1>
    <br>
    <h3 class="black">Ink System</h3><br>
    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true" style="margin-left: 2%;">
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo1">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
            <h6 class="mb-0 blue">
              Do I need to bring the printer when I buy the Ink-All-You-Can System?<i class="fa fa-angle-down rotate-icon f-right"></i>
            </h6>
          </a>
        </div>
        <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordionEx">
          <div class="card-body">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
        </div>
      </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
        <h6 class="mb-0 blue">
          What are the types of ink and what ink is being used by the CIS?<i class="fa fa-angle-down rotate-icon f-right"></i>
        </h6>
      </a>
    </div>
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
      <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
        <h6 class="mb-0 blue">
          Is the Ink-All-You-Can System available for laser printers, dot matrix or large format printers?<i class="fa fa-angle-down rotate-icon f-right"></i>
        </h6>
      </a>
    </div>
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
      <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" role="tab" id="headingTwo4">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
        <h6 class="mb-0 blue">
          What are the types of ink and what ink is being used by the CIS?<i class="fa fa-angle-down rotate-icon f-right"></i>
        </h6>
      </a>
    </div>
    <div id="collapseTwo4" class="collapse" role="tabpanel" aria-labelledby="headingTwo4" data-parent="#accordionEx">
      <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </div>
    </div>
  </div>
</div>
<br>
<h3 style="color: #000;">Ink Refill</h3><br>
    <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true" style="margin-left: 2%;">
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo5">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
            <h6 class="mb-0 blue">
              What are the types of ink and what ink is being used by the CIS?<i class="fa fa-angle-down rotate-icon f-right"></i>
            </h6>
          </a>
        </div>
        <div id="collapseTwo5" class="collapse" role="tabpanel" aria-labelledby="headingTwo5" data-parent="#accordionEx1">
          <div class="card-body">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
        </div>
      </div>
    <div class="card">
      <div class="card-header" role="tab" id="headingThree6">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
          <h6 class="mb-0 blue">
            Is the Ink-All-You-Can System available for laser printers, dot matrix or large format printers?<i class="fa fa-angle-down rotate-icon f-right"></i>
          </h6>
        </a>
      </div>
      <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6" data-parent="#accordionEx1">
        <div class="card-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
      </div>
    </div>
    <div class="card">
    <div class="card-header" role="tab" id="headingThree7">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
        <h6 class="mb-0 blue">
          How sensitive is the printer to the ink level in the reservoir bottles?<i class="fa fa-angle-down rotate-icon f-right"></i>
        </h6>
      </a>
    </div>
    <div id="collapseThree7" class="collapse" role="tabpanel" aria-labelledby="headingThree7" data-parent="#accordionEx1">
      <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </div>
    </div>
  </div>
</div>
<br>

<h3 class="black">Franchise</h3><br>
    <div class="accordion md-accordion" id="accordionEx2" role="tablist" aria-multiselectable="true" style="margin-left: 2%;padding-bottom: 3%;">
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo8">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapseTwo8" aria-expanded="false" aria-controls="collapseTwo8">
            <h6 class="mb-0 blue">
              Is All-You-Can open for franchise?<i class="fa fa-angle-down rotate-icon f-right"></i>
            </h6>
          </a>
        </div>
        <div id="collapseTwo8" class="collapse" role="tabpanel" aria-labelledby="headingTwo8" data-parent="#accordionEx2">
          <div class="card-body">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
        </div>
      </div>
    <div class="card">
      <div class="card-header" role="tab" id="headingThree9">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapseThree9" aria-expanded="false" aria-controls="collapseThree9">
          <h6 class="mb-0 blue">
            Who is responsible for finding the location?<i class="fa fa-angle-down rotate-icon f-right"></i>
          </h6>
        </a>
      </div>
      <div id="collapseThree9" class="collapse" role="tabpanel" aria-labelledby="headingThree9" data-parent="#accordionEx2">
        <div class="card-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
      </div>
    </div>
    <div class="card">
    <div class="card-header" role="tab" id="headingThree10">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapseThree10" aria-expanded="false" aria-controls="collapseThree10">
        <h6 class="mb-0 blue">
          Where is the business and technical training going to be held and how long?<i class="fa fa-angle-down rotate-icon f-right"></i>
        </h6>
      </a>
    </div>
    <div id="collapseThree10" class="collapse" role="tabpanel" aria-labelledby="headingThree10" data-parent="#accordionEx2">
      <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree11">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapseThree11" aria-expanded="false" aria-controls="collapseThree11">
        <h6 class="mb-0 blue">
          How soon can I open my business?<i class="fa fa-angle-down rotate-icon f-right"></i>
        </h6>
      </a>
    </div>
    <div id="collapseThree11" class="collapse" role="tabpanel" aria-labelledby="headingThree11" data-parent="#accordionEx2">
      <div class="card-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </div>
    </div>
  </div>
</div>

</div>

 
  <?php include"libs/footer.php";?>
  <?php include"assets/js/script.php";?>
</body>
</html>