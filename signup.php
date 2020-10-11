

<!DOCTYPE html>
<html>
    <head>
       <title>RENT-IT</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!--Necessary CSS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/hammerjs/2.0.8/hammer.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       

<style>
.signupForm{
            -webkit-box-shadow: 7px 7px 15px -1px rgba(103,103,103,0.99); 
            box-shadow: 7px 7px 15px -1px rgba(103,103,103,0.99);
            border-radius: 1%;
            padding:25px;
        }
.gradient{ background-image: linear-gradient(to right, #6F085B , #CD0046);
           border:none;
           border-radius:25px;}

body{background-color:#ffe6f2;
     background-image:url('https://www.radzen.com/documentation/login-background.png');
     background-size:cover;
     background-position: center;}

.signupForm .form-control {
    min-height: 38px;
    box-shadow: none !important;
    border-width: 0 0 1px 0;
    border-radius: 0;
}
.form-group {
	margin-bottom: 25px; }
.signupForm .fa {
	position: relative;
       top: 6px;
	
}
</style>

    </head>

    <body>

<?php

// define variables and set to empty values

$emailErr = " ";
$name =  $email = $number = $password = "";


$numreg=" ";
$namereg=" ";
$pswreg=" ";


$pattern1 = "/^[A-Za-z ]+$/";  // for name
$pattern2 = "/^[9|7|8]{1}[0-9]{9}$/";  // for contact no
$pattern3 = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,20}$/";  // for password


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = test_input($_POST["name"]);
    if(preg_match($pattern1, $name)==0)
    {   $namereg="Please enter valid name !";
}
  else{
$namereg="";
}

   
 $email = test_input($_POST["email"]);
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
 else{
$emailErr="";
}
  
 $number = test_input($_POST["contactno"]);
    if(preg_match($pattern2, $number)==0)
    {   $numreg="Invalid no !";
}
  
 else{
$numreg="";
}

 $password = test_input($_POST["password"]);
    if(preg_match($pattern3, $password)==0)
    {   $pswreg="Password must be minimum 8 characters long including  atleast 1 digit , uppercase letter,  lowercase letter and special characater.";
}
 else{
$pswreg="";
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<br><br>

                   
                    <div class="col-12 col-md-6 form-col m-auto signupForm" style="background-color:white;">

                         <center><h1>SIGN UP</h1></center> <br> 
                        
                       <form method="POST" name=signupForm action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off" >


                            <div class="form-group">
                            <div class="input-group">
                               <span >
   				 <i class="fa fa-user" style="font-size: 24px;"></i>
 				 </span>
                                <input type="text" class="form-control " id="name" name="name" placeholder="Name" required>
                                <span style="color:red;font-size:15px;"><?php echo $namereg;?></span>
                            </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                <span >
   				 <i class="fa fa-envelope" style="font-size: 19px;"></i>
 				 </span>
                                <input type="email" class="form-control " id="email" name="email" placeholder="Email"required>
                                <span style="color:red;font-size:15px;"><?php echo $emailErr;?></span>
                               </div>
                            </div>

                            <div class="form-group">
				<div class="input-group">
                                <span >
   				 <i class="fa fa-phone" style="font-size: 23px;"></i>
 				 </span>
                                <input type="tel" class="form-control " id="contactno" name="contactno" placeholder="Contact no" required>
                                <span style="color:red;font-size:15px;"><?php echo $numreg;?></span>
                             </div>
                            </div>

                           <div class="form-group">
                                <div class="input-group">
                                <span >
   				 <i class="fa fa-lock" style="font-size: 25px;"></i>
 				 </span>
                                <input type="password" class="form-control " id="password" name="password" placeholder="Password"required>
                                <span style="color:red;font-size:15px;"><?php echo $pswreg;?></span>
                            </div>
                            </div>

                            <div class="form-check form-group">
                                <input class="form-check-input" type="checkbox" name='tnc' required>
                                <label class="form-check-label">I agree to terms and conditions.</label>
                            </div>

                           <div class="form-group">
                        <button type="submit" name="Submit" class="btn btn-block btn-primary gradient">SIGN UP</button>
                    </div>
                            <div class="form-group text-center">
                                Already have an account? <a href="login.php">LOGIN </a> 
                            </div>

                        </form>
                    </div>
<?php



$success=0;

if( $namereg ==  "" and $emailErr == "" and $numreg == "" and $pswreg == "")
{

$success=1;

}


if($success==1)
{

session_start();


$name=$_POST["name"];
$email=$_POST["email"];
$contactno=$_POST["contactno"];
$password=$_POST["password"];

$db = mysqli_connect('localhost','root','','rentit') or 
die('Error connecting to MySQL server.');



$order = "INSERT INTO signup
			(name,email,contactno,password)
			VALUES
			('$name','$email','$contactno','$password')";


$result = mysqli_query($db,$order);	//order executes

$sessionname=session_name();
$sessionid=session_id();
$_SESSION["name"] = $_POST["name"];
$_SESSION["sessionid"] = $_POST["email"];
echo "Session variables are set.";

//echo'<a href="session2.php">show the session variables</a>';
header('Location: session2.php');



}


?>


 <!--Necessary Javascript-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
