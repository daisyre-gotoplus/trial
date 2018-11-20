<div class="container">
  <div class="row">
    <div class="accordion1" id="accordionEx" role="tablist" aria-multiselectable="true">
      <div class="col-sm-12 padding-lg">
          <h3>Filtered By:</h3><br>
          <h5 class="h5-padding">Category</h5>
          <h4>Ink</h4>
      </div>

  <div class="card acc-style">
    <div class="card-header col-lg-12" role="tab" id="headingOne">
      <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h5 class="mb-0">Brand<i class="fa fa-angle-down rotate-icon f-right"></i></h5>
      </a>
    </div>

    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
      <div class="card-body m-left">
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
      </div>
    </div>
  </div>
    <div class="card acc-style">
      <div class="card-header" role="tab" id="headingTwo">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h5 class="mb-0">Price<i class="fa fa-angle-down rotate-icon f-right"></i></h5>
        </a>
      </div>
      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
        <div class="card-body m-left">
          <div>
            <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('0-499')">
            <label class="form-check-label" for="chekboxRules">0-499</label>
          </div>
          <div>
            <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('500-899')">
            <label class="form-check-label" for="safeTheInfo">500-899</label>
          </div>
          <div>
            <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('900-1500')">
            <label class="form-check-label" for="safeTheInfo">900-1500</label>
          </div>
          <div>
            <input type="checkbox" class="form-check-input filled-in" onclick="filterSelection('1500-5000')">
            <label class="form-check-label" for="safeTheInfo">1500-5000</label>
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