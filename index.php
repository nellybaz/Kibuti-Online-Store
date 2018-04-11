<!DOCTYPE html>
<html>
<head>
<title>Jean Store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: cursive;
    
}
.myLink {display: none}
.whole-content{
    width:90%;
    margin: 0 5%;

}
.sec-menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.post{
    border-radius: 4px;
    background-color: yellow;
    padding: 5px;
    color:black;
    height: 30px;
}
/* card styles starts*/
.card-outer{
            background-color:white;
            width: 105%;
            height: 300px;
            border-radius: 8px;
            color: gray;
            float: left;
            margin-right: 40px;
        }
        .card-title{
            font-size: 12px;
            font-family: sans-serif;
            width: 70%;
            font-size: 1rem;
            padding: 5px;

        }
        .price{
            float: right;
            position: relative;
            bottom: 60px;
            color: #FF893B;
            font-size: 1.5rem;
            padding: 0 10px;
            margin-top: 10px;
        }
        .card-image{
                width: 100%;
                height: 200px;
        }
        .seller{
            font-size: 12px;
            padding: 0 0 10px 5px;  

        }
        /* card styles ends*/
           @media only screen and (min-width: 750px) {
        .search-mobile{
            display: none;
        }
}
        

       @media only screen and (max-width: 750px) {
        .sec-menu{
            font-size: 11px;
        }
        .search-laptop{
            display: none;
        }
        .mySlides{
           height: 200px ! important;
        }
        .second-big-img{
            width: 100% ! important;
            height: 300px ! important;
        }
        .card-outer{
            width: 80% ! important;
            margin:0 10%;
            height: 320px ! important;

        }
        .below{
            min-width: 120px;
            max-width: 200px;

        }
        .below, .price{
            font-size: 0.8rem;
        }
        .how-to{
            font-size: 0.8rem ! important;
        }

        
}
    .action-call{
        background-image: url(http://www.newshub.co.nz/dam/form-uploaded-images/GettyImages-498204000-cellphone-phone-mobile-apps-iphone-1120.jpg);
    }
    .how-to{
        background-color: #333333;
        color: white;
        font-size: 1rem;
        width: 100%;
        height: 250px ! important;
    }

    .fa{

        position: relative;
        top: 3px;
        color: red;
    }

    .logo{
        width: 60px;
        height: 60px;
    }
</style>
</head>
<body class="w3-light-grey">

<div class="whole-content">

    <!--secondary menu-->
    <ul class="sec-menu">
  <li class="sec-menu-item">Call +250 784 650 455</li>
  <li class="sec-menu-item">For Deliveries 24 hrs within Kigali</li>
  <li>48 hrs in other provinces</li>
  <li><a class="post" href="post.php">POST YOUR ITEM FOR SALE</a></li>
  
</ul>
<!-- Navigation Bar -->
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img class="logo" src="kibuti-logo.png"></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="category.php?cat=smartphone">Smartphones <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php?cat=laptop">Laptops</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php?cat=home-appliance">Home Appliances</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php?cat=estate">Real Estate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php?cat=cars">Cars</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php?cat=fashion">Fashion</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0 search-laptop">
      <input class="form-control mr-sm-2" type="text" placeholder="What are you shopping for?">
      <button style="font-family: cursive;" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div>
    <form class="form-inline my-2 my-lg-0 search-mobile">
      <input style="width: 70%" class="form-control mr-sm-2" type="text" placeholder="What are you shopping for?">
      <button style="font-family: cursive;" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
<!-- Header  having image of 800 X 300-->
<header class="w3-display-container w3-content carousel" style="max-width:1500px">
    
    <img class="w3-image mySlides" src="http://www.charmcell.com/Ecommerce/General/images/IAA.jpg" alt="London" width="1500" height="700" style="height: 300px;">
  <img class="w3-image mySlides" src="http://barriebuild.com/img/photo-800x300-solid-built.jpg" alt="London" width="1500" height="700" style="height: 300px;">
    <img class="w3-image mySlides" src="https://gamersnation.in/wp-content/uploads/2017/08/hp-omen-x-gn-cover-800x300.jpg" alt="London" width="1500" height="700" style="height: 300px;">
    

 
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  <div class="w3-container w3-margin-top">
    <h3><b>HOUSES</b></h3>
    
  </div>
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container ">
        <img class="second-big-img"  src="https://www.pinoyeplans.com/wp-content/uploads/2014/11/MHD-2014012-view1-WM-400x300.jpg?775298&775298" alt="Cinque Terre" style="width:100%; height: 35%">
        <span class="w3-display-bottomleft w3-padding" style="color: white"><b>Need Houses? Click Me! </b></span>
      </div>
      <div class="how-to">
          <h4 style="padding: 5px">Kibuti ikoreshwa ite?</h4>
          <ul style="padding: 5px">
               <li> <i class="fa fa-check-circle" style="font-size:24px; "></i> Hitamo ikiciro</li>
              <li> <i class="fa fa-check-circle" style="font-size:24px; "></i> Hitamo igicuruzwa</li>
              <li> <i class="fa fa-check-circle" style="font-size:24px;"></i> Hamagara umucuruzi, muhure amaso ku maso</li>
              <li> <i class="fa fa-check-circle" style="font-size:24px;"> </i> Kanda "check out" tukuzanira ibyo waguze</li>
          </ul>
      </div>
    </div>
    <div class="w3-half center">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom float">
            <div class="card-outer">
                <img class = "card-image" src="https://i.pinimg.com/originals/d1/e7/12/d1e712de48b094923a160d8b42ac5fc4.jpg">
                <hr style="color: black">  
                <h4 class="card-title">Techno Phone</h4>
                <p class="price"><b>$150</b></p>
                <p class="seller">Seller: Nelly</p>
            </div>
        </div>
        <div class="w3-half w3-margin-bottom float">
          <div class="card-outer">
                <img class = "card-image" src="http://www.premiumlabel.ca/outlet/wp-content/uploads/2016/03/1-Mens-DC-Shoes-300x300.jpg">
                <hr style="color: black">  
                <h4 class="card-title">Packeaged Ingredients</h4>
                <p class="price"><b>$100</b></p>
                <p class="seller">Seller: Alvin</p>
            </div>

        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom float">
          <div class="card-outer">
                <img class = "card-image" src="http://www.city-data.com/forum/attachments/home-interior-design-decorating/73390d1293595282-updating-our-1980s-ranch-sell-listing-front-house-300-x-200">
                <hr style="color: black">  
                <h4 class="card-title">House For Rent</h4>
                <p class="price"><b>$400</b></p>
                <p class="seller">Seller: Alvin</p>
            </div>
        </div>
        <div class="w3-half w3-margin-bottom float">
          <div class="card-outer">
                <img class = "card-image" src="http://www.upgradeins.com/wp-content/uploads/2016/08/car-300x200.jpg">
                <hr style="color: black">  
                <h4 class="card-title">Car For Sale</h4>
                <p class="price"><b>$1000</b></p>
                <p class="seller">Seller: Robert</p>              
            </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Newsletter -->
  <div class="w3-container action-call">
    <div class="w3-panel w3-padding-16 w3-black w3-opacity w3-card w3-hover-opacity-off">
      <h2>Make extra money from the things you no longer need!</h2>
      <p>Post it, Sell it</p>     
      <button type="button" class="w3-button w3-red w3-margin-top"><a href="post.php" >START SELLING</a></button>
    </div>
  </div>
  
 
<!-- End page content -->

<div class="row">
    <div class="col">
      <div class="card-outer below">
                <img class = "card-image" src="http://www.upgradeins.com/wp-content/uploads/2016/08/car-300x200.jpg">
                <hr style="color: black">  
                <h4 class="card-title">Car For Sale</h4>
                <p class="price"><b>$1000</b></p>
                <p class="seller">Seller: Robert</p>              
            </div>
    </div>
    <div class="col">
      <div class="card-outer below">
                <img class = "card-image" src="http://www.upgradeins.com/wp-content/uploads/2016/08/car-300x200.jpg">
                <hr style="color: black">  
                <h4 class="card-title">Car For Sale</h4>
                <p class="price"><b>$1000</b></p>
                <p class="seller">Seller: Robert</p>              
            </div>
    </div>
    <div class="col">
      <div class="card-outer below">
                <img class = "card-image" src="http://www.upgradeins.com/wp-content/uploads/2016/08/car-300x200.jpg">
                <hr style="color: black">  
                <h4 class="card-title">Car For Sale</h4>
                <p class="price"><b>$1000</b></p>
                <p class="seller">Seller: Robert</p>              
            </div>
    </div>
  </div>
</div>


  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contact</h4>
        <p>Have a message for us?</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>

      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">About us</a></p>
        <p><a href="#">We're hiring</a></p>
        <p><a href="#">Support</a></p>
        <p><a href="#">Find store</a></p>        
        <p><a href="#">Help</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Kibuti Store</p>
        <p><i class="fa fa-fw fa-phone"></i> +250 784 650 455</p>
        <p><i class="fa fa-fw fa-envelope"></i> contact@kibuti.com</p>
        
        <a href="https://www.facebook.com/Inspire-Travels-151860305486546/"><i class="fa fa-facebook-official w3-hover-opacity w3-large"></i></a>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
       
        
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        
      </div>
    </div>
  </footer>

</div>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}


</script>

</body>
</html>
