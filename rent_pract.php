<!DOCTYPE html>
<html>
    <head>
        <title>RENT IT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            <?php include 'css/index.css'; ?>
            <?php include 'css/header.css'; ?>
            <?php include 'css/rent.css'; ?>
               
        
        </style>
    </head>
    <body>
        <!--Header Include-->
        <?php include 'includes/header.php'?>
        <!-- MultiStep Form -->
        <div class="container-fluid" id="grad1">
            <div class="row justify-content-center mt-0">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mb-3">
                        <h2><strong>Upload for Rent</strong></h2>
                        <p>Fill all form field to go to next step</p>
                        <div class="row">
                            
                            <div class="col-md-12 mx-0">
                                <form id="msform">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active" id="account"><strong>Owner Details</strong></li>
                                        <li id="product"><strong>Product Details</strong></li>
                                        <li id="payment"><strong>Rental Details</strong></li>
                                        <li id="confirm"><strong>Finish</strong></li>
                                    </ul> <!-- fieldsets -->
                                    <fieldset id="Owner-Details">
                                        <div class="form-card">
                                            <h2 class="fs-title">Personal Information</h2> 
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Id" /> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" id="username"name="username" placeholder="Username" /> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                    <input type="tel" class="form-control" id="contactno" name="contactno" placeholder="Contact No." />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
                                                    <textarea class="form-control" placeholder="Address" id="address"name="address"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <input type="button"  name="next" class="next action-button" value="Next Step" />
                                    </fieldset>
                                    <fieldset id="Product-Details">
                                        <div class="form-card">
                                            <h2 class="fs-title">Product Details</h2> 
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" class="form-control" name="productName" id="productName" placeholder="Product Name (Eg. Camping Tent)" />
                                                </div>
                                            </div>
                                            <label class="">Category (Select the closest category the product belongs to.)</label><br>
                                            <select name="category" id="category" class="list-dt mb-4">
                                                <option>College</option>
                                                <option>Sports</option>
                                                <option>Camping</option>
                                                <option>Electronic</option>
                                                <option>Party</option>
                                            </select>
                                            <div class="rs-form-input-wrapper">
                                                <label class="">Short Description</label><br>
                                                <textarea placeholder="10 x 10 feet Pagoda shaped tent, with open sides and rooftop great for camping" 
                                                name="shortDescription" id="shortDescription"></textarea>
                                            </div>
                                            <div class="rs-form-input-wrapper">
                                                <label class="">Detailed Specifications</label><br>
                                                <textarea placeholder="1) The tent is lightweight aluminium Kedar mounted on Cold Rolled steel frames.
                                                2) The roof and side walls for this tent are of with a PVC coating, It is waterproof and UV resistant.
                                                3) Ideal for all kinds of functions like parties and setups at home or outside- gives a grand look to the venue.
                                                4) Delivery charges at actuals, depends on the final delivery location." 
                                                name="detailSpecification" id="detailSpecification"></textarea>
                                            </div>
                                        </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>
                                    <fieldset id="Rental-Details">
                                        <div class="form-card">
                                            <h2 class="fs-title">Rental Details</h2>
                                            <div class="expected-rent">
                                                <label>Expected Rent</label>
                                                <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input class="form-control" type="number" name="dayRent" placeholder="Rent Per Day" />
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input class="form-control" type="number" name="weekRent" placeholder="Rent Per Week" />
                                                    </div>
                                                </div>   
                                                <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input class="form-control" type="number" name="monthRent" placeholder="Rent Per Month" />
                                                </div>
                                                </div>
                                            </div>
                                            <label>Replacement Cost</label>
                                            <div class="row">
                                                
                                                <div class="col-sm-12 col-md-3">   
                                                <input type="number" name="replaceCost" placeholder="Rs 500" /></div>
                                                <div class="col-sm-12 col-md-9" style="font-size: 12px;">
                                                    Note: Cost of Replacement is market value of the product, incase of total damge or theft settlement 
                                                    will be upto this amount. 
                                                </div>
                                            </div>
                                            <div class="">
                                                <input type="number" name="productQuantity" placeholder="Product Quantity" />
                                            </div>
                                            
                                            <label>Product Condition</label>
                                            <div class="row radio-group justify-content-center">
                                                <div class='col-sm-6 col-md-5 radio' data-value="credit">
                                                    <h5 class="text-center">Excellent</h5>
                                                    <ul>
                                                        <li>No Repair History</li>
                                                        <li>New/ 0-6 months old product</li>
                                                        <li>Hardly used</li>
                                                        <li>No Scratches/ Dents</li>
                                                    </ul>
                                                </div>
                                                
                                                <div class='col-sm-6 col-md-5 radio' data-value="paypal">
                                                    <h5 class="text-center">Good</h5>
                                                    <ul>
                                                        <li>6 months to 1 year old</li>
                                                        <li>Normal Usage</li>
                                                        <li>Minor Scratches</li>
                                                    </ul>
                                                </div>
                                                
                                                <div class='col-sm-6 col-md-5 radio' data-value="paypal">
                                                    <h5 class="text-center">Fairly Used</h5>
                                                    <ul>
                                                        <li>Has Repair History</li>
                                                        <li>1 to 2 year old</li>
                                                        <li>Fair Usage</li>
                                                        <li>Few Scratches/ Dents</li>
                                                    </ul>
                                                </div>
                                                <br>
                                            </div>
                                        </div> 
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Submit" />
                                    </fieldset>
                                    <fieldset id="Success-Page">
                                        <div class="form-card">
                                            <h2 class="fs-title text-center">Thank you for filling the form</h2> <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                            </div> <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-7 text-center">
                                                    <h5>Successfully Submiited for Review</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
      





       
        
        <!--Footer Begin-->
        <?php include 'includes/footer.php'?>
        
       
        <!-- Required Scripts-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
	    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>
        <script src="js/rent.js"></script>
    </body> 
</html>