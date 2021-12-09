<?php
$serveur="localhost";
$user="root";
$pw="";
$bdd="users";

$cnpstock= new mysqli($serveur,$user,$pw,$bdd);

session_start();
if($_SESSION['Email']){
  




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>USERS </title>
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

  <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../style.css" rel="stylesheet">  <!-- ======= Header ======= -->



    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css">
</head>




<body>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">


      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto active" href="../indexuser.php">Home</a></li>         
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
<?php
$con=mysqli_connect("localhost","root","","users");
?>
<?php


    $query="SELECT * FROM employees ";
$sql= mysqli_query($con, $query) or die("database error:". mysqli_error($con));
?>


    <br>

        <table   id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>City</th>
                    <th>Email</th>
                    <th> Specialization</th>

                    
                </tr>
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_assoc($sql)){?>

                <tr>
                    <td><?php echo $row ['FirstName']; ?></td>
                    <td><?php echo $row ['LastName']; ?></td>
                    <td><?php echo $row ['City']; ?></td>
                    <td><?php echo $row ['Email']; ?></td>
                    <td><?php echo $row ['Specialization']; ?></td>
                    
          
                </tr>
                <?php } ?>

            </tfoot>
        </table>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap.min.js  "></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                responsive: true
            } );
        
            new $.fn.dataTable.FixedHeader( table );
        } );
    </script>









</body>
</html>
<?php
}
else{

  header("location:accounts/login.php");
}

?>