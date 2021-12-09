
<?php


$serveur="localhost";
$user="root";
$pw="";
$bdd="users";

$cnpstock= new mysqli($serveur,$user,$pw,$bdd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

  <style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

.border-md {
    border-width: 2px;
}




/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

body {
    min-height: 100vh;
}

.form-control:not(select) {
    padding: 1.5rem 0.5rem;
}

select.form-control {
    height: 52px;
    padding-left: 0.5rem;
}

.form-control::placeholder {
    color: #ccc;
    font-weight: bold;
    font-size: 0.9rem;
}
.form-control:focus {
    box-shadow: none;
}
.btnreg{

  background-image: linear-gradient(to right, #00B0FF, #00B0FF);
color:white;
}
      .text{
      color:#00B0FF;
    }

    .far{
      color:#00B0FF;

    }
    .fas{
      color:#00B0FF;
    }


    
    </style>


</head>
<body>
  <!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand">
                <!-- <img src="https://res.cloudinary.com/mhmd/image/upload/v1571398888/Group_1514_tjekh3_zkts1c.svg" alt="logo" width="150"> -->
            </a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-6 pr-lg-5 mb-5 mb-md-0">
            <img src="../assets/img/undraw_authentication_fsn5.png" alt="" class="img-fluid mb-3 d-none d-md-block">
         
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">







                    <!-- First Name -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="far fa-user"></i> </span>
                        </div>
                        <input id="firstName" type="text" name="FirstName" placeholder="First Name" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                 

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="far fa-envelope"></i>   </span>
                        </div>
                        <input id="email" type="email" name="Email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
                    </div>




                


                    
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fas fa-lock"></i> </span>
                        </div>
                        <input id="password" type="password" name="Password" placeholder="Password" class="form-control bg-white border-left-0 border-md " required>
                    </div>

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fas fa-lock"></i> </span>
                            </span>
                        </div>
                        <input id="password2" type="password" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md" required>
                    </div>

 



<button type="button" class="btn  btn-light"  style="margin-left:14px;"  onclick="myFunction()" >  <i class="far fa-eye"></i>  
</button> <p  class="text-muted font-weight-bold" style="margin-left: 10px;"> show password </p>

<script>
function myFunction() {
  var pass = document.getElementById("password");
  var pass2 = document.getElementById("password2");

  if (pass.type === "password") {
    pass.type = "text";
    pass2.type = "text";

  } else {
    pass.type = "password";

    pass2.type = "password";

  }
}
</script>


                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <input style="margin-top:14px;" type="submit"name="submit" class="btn btnreg  btn-block py-2" value="create a count">
                         

                                               
    <?php

  
 
if (isset($_POST['submit'])) {
    
    
    $FirstName	 = mysqli_real_escape_string($cnpstock, $_POST['FirstName']);
    $Email	 = mysqli_real_escape_string($cnpstock, $_POST['Email']);
    $Password = mysqli_real_escape_string($cnpstock, $_POST['Password']);
    $passwordConfirmation = mysqli_real_escape_string($cnpstock, $_POST['passwordConfirmation']);
    $hashpass=password_hash($Password, PASSWORD_DEFAULT);
  

    $req="select * from accounts where Email='$Email'";
    $resultt=mysqli_query($cnpstock,$req);
    $count= mysqli_num_rows($resultt);


 if($count >= 1){
  echo "The account already exists <a href='login.php'>login</a> ";
 }else{
    $query= "INSERT INTO accounts(FirstName,Email,Password) 
    VALUES('$FirstName','$Email','$hashpass' )";
$result = mysqli_query($cnpstock, $query);

if ($result == true &&  $Password===$passwordConfirmation )    {

 session_start();
 $_SESSION['Email']=$_POST['Email'];
echo '<script>window.location.href = "../index.php";
</script>';




}else{
echo "Password confirmation doesn't match ";
}
}
 }
   
  ?>




                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

              

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="login.php" class="text ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>









  <script src="jquery-3.3.1.slim.min.js" ></script>
<script src="bootstrap.bundle.min.js" ></script>
</body>
</html>
