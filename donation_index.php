<html>

<head>
    <title></title>
    <link rel="stylesheet" href="css/donation.css">
</head>

<body>

    <?php include 'header.php' ;?>

    <script>
        alert(" Hi!    Welcome To Donation Page...");
    </script>

    <h1><b>DONATION FORM</b></h1><br>

    <div class="form">

        <form method="POST" action="insert.php">

            <p class="Decorate"><u><b>Donor Information</b></u></p>

            <label>Name</label>
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>
            <br><br>

            <label>Address</label>
            <input type="textarea" width="200px" name="Address" placeholder="Address" required><br>

            <label>Telephone</label><br>
            <input type="tel" name="Phone" pattern="[0-9]{10}" placeholder="xxxxxxxxxx" required>

            <div class="b_mail">
                <label>E-mail</label><br>
                <input type="text" name="email" pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$" required>
            </div><br>

            <p class="Decorate"><u><b>Donation Details</b></u></p>

            <p class="p1">(Your donation receipt will be upload to the below e-mail)</p><br>
            <p class="p2">Donation Type
                <select name="catogaries">
                    <option value="blood">Blood</option>
                    <option value="cash">Cash</option>
                    <option value="eye">Eye & Tissues</option>
                    <option value="plasma">Plasma</option>
                    <option value="Lungs">Lungs</option>
                    <option value="heart">Heart</option>
                    <option value="liver">Liver</option>
                    <option value="bone">Bone</option>
                    <option value="skin">Skin</option>
                    <option value="cartilage">Cartilage</option>
                </select>
            </p>

            <label>Frequency</label>
            <select name="shedule">
                <option value="time">One-time</option>
                <option value="month">Monthly</option>
                <option value="annually">Annually</option>
            </select><br>

            <label>Date</label>
            <input type="date" name="date"><br><br><br>

            <div class="check">
                <input type="checkbox" required>Confirm your understanding of the teams and conditions.<br>
                <input type="checkbox" required>Agree to privacy and policy.<br><br><br>
            </div><br>

            <button class="option1" type="submit"> Submit </button>
            <div class="option2"><input type="button" value="Clear"></div>
    </div>
    </form>

    <?php include 'footer.php' ;?>
</body>

</html>