<?php
    require_once "config.php";
    $id = $_GET["id"];
    $query = "DELETE FROM users WHERE id = '$id'";
    if (mysqli_query($con, $query)) {
        header("location: view.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>