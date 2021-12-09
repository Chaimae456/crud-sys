<?php
$con=mysqli_connect("localhost","root","","users");
?>
<?php
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    if($id)
    {
        $sql = "DELETE FROM employees WHERE id='$id'";
        
        if (mysqli_query($con, $sql)) {
            echo "Record deleted successfully";

          } else {
            echo "Error deleting record: " . mysqli_error($con);
          }
        header("location:Afficher.php");
    }
}
?>