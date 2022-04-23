

<?php
include 'connection.php';

$id = $_GET["id"];
$query = "DELETE FROM student WHERE id ='$id'";
$data = mysqli_query($con,$query);


if ($data) {
  echo "Data deleted successfully";
}

else {
  echo "Plz try again";
}
?>

<br><br><button><a href="view.php">Back</a></button>
