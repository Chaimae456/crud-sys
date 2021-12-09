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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>USERS CRUD </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <title>data table</title>


      <!-- Favicons -->
  <link href="assets/img/output-onlinepngtools (25).png" rel="icon">
  <link href="assets/img/output-onlinepngtools (25).png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Vendor CSS Files -->

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../style.css" rel="stylesheet">  <!-- ======= Header ======= -->



     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css">
</head>




<body>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

 

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="../index.php">Home</a></li>         
          <li><a class="nav-link scrollto" href="../accounts/logout.php">Deconexion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
 
<br>

<div class="container mt-5" >

<section id="contact" class="contact ">
      <div class="container">

        <div class="section-title" >
          <h2>New Employee</h2>
        </div>

        <div class="row">

          <div class=" col-lg-8 col-md-12  offset-md-2"  >
            <form action="" method="post" >
              <div class="form-group">
                <input type="text" name="FirstName" class="form-control mb-3" id="FirstName	" placeholder="FirstName	" required>
              </div>
             
              <div class="form-group">
                <input type="text" class="form-control mb-3" name="LastName" id="LastName" placeholder="LastName" required>
              </div>
             
              <div class="form-group">
                <input type="text" class="form-control mb-3" name="Email" id="Email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control mb-3" name="City" id="City" placeholder="City" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control mb-3" name="Specialization" id="Specialization" placeholder="Specialization" required>
              </div>
              
            
             
            
       
                  


              <br>

              <div>
              <div class="form-group col-lg-12 mx-auto mb-0">
                        <input style="margin-top:14px;" type="submit" name="submit" class="btn btnreg  btn-block py-2" value="create ">
             </div>
            </form>
          </div>
        </div>
      </div>



      <?php
// لدمج  الملفات 

   if(isset($_POST['submit'])){
       $FirstName=mysqli_real_escape_string($cnpstock,$_POST["FirstName"]);
       $LastName=mysqli_real_escape_string($cnpstock,$_POST["LastName"]);
       $Email=mysqli_real_escape_string($cnpstock,$_POST["Email"]);
       $City=mysqli_real_escape_string($cnpstock,$_POST["City"]);
       $Specialization=mysqli_real_escape_string($cnpstock,$_POST["Specialization"]);
  
       
            $sql="INSERT INTO employees (FirstName,LastName,Email,City,Specialization)
            VALUES('$FirstName','$LastName','$Email','$City','$Specialization')";
            $result=mysqli_query($cnpstock,$sql);
            if($result){
                echo'data save';
                echo '<script>window.location.href = "Afficher.php";
                </script>';   
            }else {
                  echo'data not save'; 
             }
     
   }
?>
<br>
<br>
<br>
<br>









</body>
</html>