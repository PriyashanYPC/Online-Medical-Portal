<!DOCTYPE html>
<html lang="en">
<?php
require_once "config.php";
if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["Address"]) && isset($_POST["Phone"]) && isset($_POST["email"]) && isset($_POST["catogaries"]) && isset($_POST["shedule"]) && isset($_POST["date"])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];
    $email = $_POST['email'];
    $catogaries = $_POST['catogaries'];
    $shedule = $_POST['shedule'];
    $date = $_POST['date'];

    $sql = "UPDATE users SET `fName`= '$firstname', `lName`= '$lastname', `Address`='$Address', `Mobile`='$Phone', `email`='$email', `dType`='$catogaries', `Frequency`='$shedule', `Date`='$date'   WHERE id= " . $_GET["id"];

    if (mysqli_query($con, $sql)) {
        header("location: view.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }
}
?>

<head>

    <title>Update</title>

    <link rel="stylesheet" href="css/donation.css">

</head>

<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Update Data</h1>
        <div class="container">
            <?php
            require_once "config.php";
            $sql_query = "SELECT * FROM users WHERE id = " . $_GET["id"];
            if ($result = $con->query($sql_query)) {
                while ($row = $result->fetch_assoc()) {
                    $Id = $row['id'];
                    $FName = $row['fName'];
                    $LName = $row['lName'];
                    $Address = $row['Address'];
                    $TepNo = $row['Mobile'];
                    $Email = $row['email'];
                    $Type = $row['dType'];
                    $Frequency = $row['Frequency'];
                    $Date = $row['Date'];
            ?>
                    <form action="update.php?id=<?php echo $Id; ?>" method="post">
                        <p class="Decorate"><u><b>Donor Information</b></u></p>

                        <label>Name</label>
                        <input type="text" name="firstname" placeholder="First Name" value="<?php echo $FName ?>" required>
                        <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $LName ?>" required>
                        <br><br>

                        <label>Address</label>
                        <input type="text" name="Address" placeholder="Street Address Line 1" value="<?php echo $Address ?>" required><br>


                        <label>Telephone</label><br>
                        <input type="tel" name="Phone" pattern="[0-9]{10}" placeholder="xxxxxxxxxx" value="<?php echo $TepNo ?>" required>

                        <div class="b_mail">
                            <label>E-mail</label><br>
                            <input type="text" name="email" pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$" value="<?php echo $Email ?>" required>
                        </div><br>

                        <p class="Decorate_2"><u><b>Donation Details</b></u></p>

                        <p class="p1">(Your donation receipt will be upload to the below e-mail)</p><br>
                        <p class="p2">Donation Type
                            <select name="catogaries">
                                <option value="blood" <?php if ($Type == "blood") {
                                                            echo "Selected";
                                                        } ?>>Blood</option>
                                <option value="cash" <?php if ($Type == "cash") {
                                                            echo "Selected";
                                                        } ?>>Cash</option>
                                <option value="eye" <?php if ($Type == "eye") {
                                                        echo "Selected";
                                                    } ?>>Eye & Tissues</option>
                                <option value="plasma" <?php if ($Type == "plasma") {
                                                            echo "Selected";
                                                        } ?>>Plasma</option>
                                <option value="Lungs" <?php if ($Type == "Lungs") {
                                                            echo "Selected";
                                                        } ?>>Lungs</option>
                                <option value="heart" <?php if ($Type == "heart") {
                                                            echo "Selected";
                                                        } ?>>Heart</option>
                                <option value="liver" <?php if ($Type == "liver") {
                                                            echo "Selected";
                                                        } ?>>Liver</option>
                                <option value="bone" <?php if ($Type == "bone") {
                                                            echo "Selected";
                                                        } ?>>Bone</option>
                                <option value="skin" <?php if ($Type == "skin") {
                                                            echo "Selected";
                                                        } ?>>Skin</option>
                                <option value="cartilage" <?php if ($Type == "cartilage") {
                                                                echo "Selected";
                                                            } ?>>Cartilage</option>
                            </select>
                        </p>

                        <label>Frequency</label>
                        <select name="shedule">
                            <option value="time" <?php if ($Frequency == "time") {
                                                        echo "Selected";
                                                    } ?>>One-time</option>
                            <option value="month" <?php if ($Frequency == "month") {
                                                        echo "Selected";
                                                    } ?>>Monthly</option>
                            <option value="annually" <?php if ($Frequency == "annually") {
                                                            echo "Selected";
                                                        } ?>>Annually</option>
                        </select><br>

                        <label>Date</label>
                        <input type="date" name="date" value="<?php echo $Date ?>"><br><br><br>



                        <div style="display: grid;align-items:  flex-end;">
                            <input type="submit" name="submit" id="submit" value="Update">
                        </div>
        </div>
        </form>
<?php
                }
            }
?>
</div>
    </section>
</body>

</html>