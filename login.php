<!DOCTYPE HTML>  
<html>
<head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Necessary CSS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/hammerjs/2.0.8/hammer.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!--Necessary Javascript-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
    <style>
        .loginForm{
            -webkit-box-shadow: 7px 7px 15px -1px rgba(103,103,103,0.99); 
            box-shadow: 7px 7px 15px -1px rgba(103,103,103,0.99);
            border-radius: 1%;
            padding:25px;
        }
     
  .gradient{ 
           background-image: linear-gradient(to right, #6F085B , #CD0046);
           border:none;
           border-radius:25px;}

   body{  
     background-color:black;
     background-image:url('https://www.radzen.com/documentation/login-background.png');
     background-size:full;
     background-position: center;
     background-repeat:no-repeat;}

.loginForm .form-control {
    min-height: 38px;
    box-shadow: none !important;
    border-width: 0 0 1px 0;
    border-radius: 0;
}
.form-group {
	margin-bottom: 25px; }

.loginForm .fa {
	
	position: relative;
       top: 6px;
	
}
    </style>
</head>
<body>  

   
    <div>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-5 m-auto loginForm" style="background-color:white;">
                <center><h2>LOGIN</h2></center>
                <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            
                    <div class="form-group">
                      <div class="input-group">
                                <span >
   				 <i class="fa fa-envelope" style="font-size: 22px;"></i>
 				 </span>
                        <input type="email" class="form-control"name="email" placeholder="Email"  id="email" ">
                      </div>  
                    </div>
                    <div class="form-group">
                    <div class="input-group">
                                <span >
   				 <i class="fa fa-lock" style="font-size: 23px;"></i>
 				 </span>
                        <input type="password" class="form-control"name="password" id="password" placeholder ="Password" ">
                        </div>
                    </div>        
                    <div class="form-group">
                        <button type="submit" name="Submit" class="btn btn-block btn-primary gradient" >Login</button>
                    </div>
                    <label class="form-check-label"><input type="checkbox"> Remember me</label>
                    <a href="#" class="hint-text float-right">Forgot Password?</a>
                </form>
            </div>
        </div>
    </div>  


<?php

if(isset($_POST["email"]) && isset($_POST["password"]))
{
$email=$_POST["email"];
$password=$_POST["password"];

//echo $email;
//echo $password;

$db = mysqli_connect('localhost','root','','rentit') or 
die('Error connecting to MySQL server.');

$query = "SELECT * FROM signup WHERE email= '{$email}'  and password = '{$password}' ";

$result = mysqli_query($db, $query);

if($result)
{

$count=mysqli_num_rows($result);

	if($count==0) {
		echo"<script>alert('Invalid login credentials !');</script>";
	} else {
		echo"<script>alert('Successfull login!');</script>";
	}

}


mysqli_close($db);

}

?> 
   
  
    </body>
</html>