<?php
if (isset($_POST['save_btn'])){
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $age = $_POST['age'];

  if(!empty($fname) && !empty($lname) && !empty($age)){
     include "connection.php";
     $query = "INSERT INTO student (firstname,lastname,age) values ('$fname',
     '$lname','$age')";

      if (mysqli_query($con , $query)) {
        echo "<span style='color:green;'>Data Saved Successfully</span>";
      }
      else {
        echo "<span style='color:red;'>Error Occured While Saving Data!! </span>";
      }
  }
  else{
    echo "<span style='color:red;'>All fields are Compulsory </span>";
  }
}

//
// if (isset($_POST['save_btn'])) {
//
//      $fname = $_POST['firstname'];
//      $lname = $_POST['lastname'];
//      $age = $_POST['age'];
//
//  $query = "INSERT INTO student (firstname,lastname,age) values ('$fname',
//  '$lname','$age')";
//  $insertion = mysqli_query($con , $query);
//
//  if ($insertion) {
//    echo "Data saves successfully";
//  }
//
//  else {
//    echo "plz try again";
//  }
//
//    }
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<div>
  <form  action=" " method="POST">

    <input type="text" name="firstname" placeholder="firstname"><br><br>
    <input type="text" name="lastname" placeholder="lastname"><br><br>
    <input type="number" name="age" placeholder="age"><br><br>
     <input type="submit" name="save_btn" value="Save">
     <button> <a href="view.php">View</a> </button><br><br><br>

      </form>
</div>
  </body>
</html>
