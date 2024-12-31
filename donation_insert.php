<?php

$showAlert = false;
$showError = false;
$exists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   include "config.php";

   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $Address = $_POST['Address'];
   $Phone = $_POST['Phone'];
   $email = $_POST['email'];
   $catogaries = $_POST['catogaries'];
   $shedule = $_POST['shedule'];
   $date = $_POST['date'];

  $sql = "INSERT INTO users (`fName`, `lName`, `Address`, `Mobile`, `email`, `dType`, `Frequency`, `Date`) VALUES ('$firstname',' $lastname','$Address','$Phone','$email','$catogaries','$shedule','$date')";

   $result = $con->query($sql);

   if ($result == TRUE) {
      echo "New data created successfully";
   } else {
      echo "Error :" . $sql . "<br>" . $con->error;
   }

   $con->close();
}

?>

<html>
   <body>
   <a href="view.php">
   <button>View</button>
  </a>
   </body>
</html>

