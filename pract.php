<!DOCTYPE html>

<html>

<head>

  <title>RENT IT</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

*{

margin:0;
padding:0;
font-family:Roboto;

}

nav{

height:10vh;

}

.nav-links{ display:flex;
            list-style:none;
            height:100%;
            justify-content:space-around;
            align-items:center;}



.nav-links li a{ color:black;
                 text-decoration:none;
                 font-size:18px;
                 }


.button {
  
  color: white;
  border-radius: 30px;
  border:none;
  width:10vw;
  height:60px;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  font-family:Arial;
  font-size:18px;
  cursor: pointer;
  margin-top:0.5vw;
  
}



@media screen and (max-width: 900px){



.line{
            width:30px;
            height:3px;
            background: black;
            margin:5px;

         }

nav{ position:relative;}

.hamburger{  
             position: absolute;
             cursor: pointer;
             right:5%;
             top:50%;
             transform: translate(-5%, -50%);
             z-index: 2;
             float:right;
}

.nav-links{  
             position:fixed;
             background: #fff2fd;
             height:100vh;
             width:100%;
             flex-direction:column;
             clip-path: circle(100px at 90% -10%);
             background-size:cover;
            
             
             
             }

.nav-links.open{ clip-path: circle(1000px at 90% -10%);
                  }



.button{ font-size:2.5vw;
         align-text:center;
         width:23vw;}


}
<?php include 'css/index.css'; ?>


</style>

</head>

<body>


<nav>


<div class="hamburger">

   <div class="line"></div>
   <div class="line"></div>
   <div class="line"></div>

</div>


<ul class="nav-links">

<li><p style="font-size:44px;"><b><span style="color:#CD0046;">RENT</span>&nbsp; IT</b></p></li>
<li><a href="#" > HOME </a> </li>
<li><a href="#" > LOGIN </a> </li>
<li><a href="#" > ABOUT </a> </li>
<li><a href="#" > CONTACT </a> </li>
<li><a href="#" ><button class="button" style="background-color:#CD0046;">RENT</button></a></li>
<li><a href="#" ><button class="button" style="background-color:#6F085B;">BUY</button></a></li>


</ul>

</nav>

<br>
<hr>
<br>
<center><h3>some image to be added here..</h3></center>
<!-- Carousel Section Begin-->
<section class="main-carousel">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators" id="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li></ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner carousel-zoom" id="carousel-inner-div">
                        <div id="slides-5" class="carousel-item active">
                            <img src="images/index/slide1.jpg" class="d-block w-100">
                        </div>
                        <div id="slides-0" class="carousel-item">
                            <img src="images/index/slide2.png" class="d-block w-100">
                        </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" id="carousel-previous-indicator">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" id="carousel-next-indicator">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </section><br><br>
        <!-- Carousel Section End-->

        <div class="container">
            <!--Category Sectio Begin-->
            <div class="categories-section">
                <div class="row  m-auto">
                    <div class="col-12 text-center">
                        <h3>CATEGORIES</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-5 category-subsection">
                        <a href="">
                            <div class="row">
                                <img class="img-fluid " src="images/index/college.jpg" alt="College">
                            </div>
                            <div class="row category-header">
                                College
                            </div>
                        </a>    
                    </div>
                    <div class="col-lg-2 col-md-3 col-5 category-subsection">
                        <a href="">
                            <div class="row">
                                <img class="img-fluid " src="images/index/sports1.jpg" alt="Sports">
                            </div>
                            <div class="row category-header">
                                Sports
                            </div>
                        </a>    
                    </div>
                    <div class="col-lg-2 col-md-3 col-5 category-subsection">
                        <a href="">
                            <div class="row">
                                <img class="img-fluid " src="images/index/camping2.jpg" alt="Camping">
                            </div>
                            <div class="row category-header">
                                Camping
                            </div>
                        </a>    
                    </div>
                    <div class="col-lg-2 col-md-3 col-5 category-subsection">
                        <a href="">
                            <div class="row">
                                <img class="img-fluid " src="images/index/electronic.jpg" alt="Electronic">
                            </div>
                            <div class="row category-header">
                                Electronic
                            </div>
                        </a>    
                    </div>
                    <div class="col-lg-2 col-md-3 col-5 category-subsection">
                        <a href="">
                            <div class="row">
                                <img class="img-fluid " src="images/index/party.jpg" alt="Party">
                            </div>
                            <div class="row category-header">
                                Party
                            </div>
                        </a>    
                    </div>
                    
                    
                </div><br><br>
            </div>
            <!--Category Section Ends-->    
            <!--Renting Process Section Begin-->    
            <div class="renting-process-section" >
                <div class="row m-auto">
                    <div class="col-12 text-center">
                        <h3>RENTING PROCESS</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-5 category-subsection">
                            <div class="row">
                                <img class="img-fluid" src="images/index/rentingP1.svg" alt="Process 1">
                            </div>
                            <div class="row process-number">
                                <p>01</p>
                            </div>
                            <div class="row category-header">
                               Choose your Product
                            </div>   
                    </div>
                    <div class="col-lg-2 col-md-3 col-5  category-subsection">
                            <div class="row">
                                <img class="img-fluid " src="images/index/rentingP2.svg" alt="Process 2">
                            </div>
                            <div class="row process-number">
                                <p>02</p>
                            </div>
                            <div class="row category-header">
                                Get KYC Approved
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-5 category-subsection">
                            <div class="row">
                                <img class="img-fluid " src="images/index/rentingP3.png" alt="Process 3">
                            </div>
                            <div class="row process-number">
                                <p>03</p>
                            </div>
                            <div class="row category-header">
                                Easy Rental Installment
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-5 category-subsection">
                            <div class="row">
                                <img class="img-fluid " src="images/index/rentingP4.jpg" alt="Process 4">
                            </div>
                            <div class="row process-number">
                                <p>04</p>
                            </div>
                            <div class="row category-header">
                                Return Extend or Buy
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-xs-12 col-5 category-subsection">
                            <div class="row">
                                <img class="img-fluid " src="images/index/rentingP5.svg" alt="Process 5">
                            </div>
                            <div class="row process-number">
                                <p>05</p>
                            </div>
                            <div class="row category-header">
                                Quick Refunds
                            </div>
                    </div>
                </div>
            </div>
            <!--Trending/ Featured Products Section Begin-->
            <div class="row m-auto">
                    <div class="col-12 text-center mt-5">
                        <h3>TRENDING PRODUCTS</h3>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="category mb-10">
                        <div class="htcatthumb">
                            <a href="">
                                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574239782/ecommerce-furniture/simple-dining-table-1813502.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="frproductinner innerposition">
                            <h4><a href="">Simple Dining Table</a></h4>
                            <ul class="frproprize text-left ">
                                <li class="oldprize">$399</li>
                            </ul>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="category mb-10">
                        <div class="htcatthumb">
                            <a href="">
                                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574239782/ecommerce-furniture/black-kettle-beside-condiment-shakers-and-green-fruits-and-1080696.jpg" alt="product images">
                            </a> 
                        </div>
                        <div class="frproductinner innerposition">
                            <h4><a href="">Home Dining Table</a></h4>
                            <ul class="frproprize text-left ">
                                <li class="oldprize">$999</li>
                            </ul>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="category mb-10">
                        <div class="htcatthumb"> <a href=""> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574239782/ecommerce-furniture/apartment-chairs-clean-contemporary-534172.jpg" alt="product images"> </a> </div>
                        <div class="frproductinner innerposition">
                            <h4><a href="">Appartment Dining Table</a></h4>
                            <ul class="frproprize text-left ">
                                <li class="oldprize">$599</li>
                            </ul>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="category mb-10">
                        <div class="htcatthumb"> <a href=""> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574239781/ecommerce-furniture/cabinet-contemporary-cups-decoration-279618.jpg" alt="product images"> </a> </div>
                        <div class="frproductinner innerposition">
                            <h4><a href="">Home wall cabinet</a></h4>
                            <ul class="frproprize text-left ">
                                <li class="oldprize">$269</li>
                            </ul>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Trending/ Featured Products Section Ends-->
            <!--Part 2-->
            <!-- Why Rentit Section Begin-->

            <!-- Why Rentit Section Ends-->
        </div>
        <!--Footer Begin-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer-col">
                        <div class="footer_title">RENT IT</div>
                        <p>Appliances & Furniture on Rent in Mumbai, Rent Furniture Hyderabad, Furniture on rent in Chennai</p>
                        <div class="logofooter">LOGO</div>
                        <p><i class="fa fa-map-pin"></i> Mumbai, Maharashtra, India</p>
                        <a role="button" class="btn btn-success" href="mailto:xyz@gmail.com" style="width: 40%">
                            <i class="fa fa-envelope-o"></i> Mail 
                        </a>
                        <a role="button" class="btn btn-primary" href="tel:9988776655" style="width: 40%">
                            <i class="fa fa-phone"></i> Call
                        </a>
                        <!--<p><i class="fa fa-phone"></i> Phone (India) : +91 9999 999 999</p>
                        <p><i class="fa fa-envelope"></i> E-mail : xyz@gmail.com</p>-->
                        
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col">
                        <h6 class="heading7">QUICK LINKS</h6>
                        <ul class="footer-ul">
                            <li><a href="#"> About Us</a></li>
                            <li><a href="#"> Latest Offers</a></li>
                            <li><a href="#"> FAQs</a></li>
                            <li><a href="#"> Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col">
                        <h6 class="heading7">HELP & SUPPORT</h6>
                        <ul class="footer-ul">
                            <li><a href="#"> Terms & Conditions</a></li>
                            <li><a href="#"> Privacy Policy</a></li>
                            <li><a href="#"> Cancellations and Modifications</a></li>
                            <li><a href="#"> Documents</a></li>
                            <li><a href="#"> Shipping & Delivery</a></li>
                            <li><a href="#"> Returns & Exchanges</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col">
                        <h6 class="heading7">NEWSLETTER SIGN UP</h6>
                        <div class="post">
                            <p>Subscribe to our newsletter and get latest updates on offers on Furniture on Rent in Chennai, Hyderabad and Mumbai .
                                Bed on rent, Wardrobe on Rent, Fridge on Rent, Appliances on Rent
                            </p>
                            
                        </div>
                        <div class="row no-gutters mt-3 mb-3 align-items-center">
                            <div class="col">
                                <input class="form-control border-secondary rounded-pill" type="email" value="Enter your Email" id="subscribe_email" name="subscribe-email">
                            </div>
                            <div class="col-auto">
                                <button class="btn text-light border-0 rounded-pill" type="button" id="subscribe-button">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                        <ul class="footer-social">
                            <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
                            <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
                            <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
                            <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!--footer start from here-->

        <div class="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p>© 2019 - Rent IT all rights reserved.</p>
                </div>
            </div>
        </div>
       
<script>

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
});

</script>
  <!-- Required Scripts-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



</body>
</html>