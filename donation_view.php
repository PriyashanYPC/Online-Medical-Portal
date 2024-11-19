<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-white">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Telephone No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Donation Type</th>
                        <th scope="col">Donation shedule</th>
                        <th scope="col">Donation Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "config.php";
                    $sql_query = "SELECT * FROM users";
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

                            <tr class="trow">

                                <td><?php echo $Id; ?></td>
                                <td><?php echo $FName; ?></td>
                                <td><?php echo $LName; ?></td>
                                <td><?php echo $Address; ?></td>
                                <td><?php echo $TepNo; ?></td>
                                <td><?php echo $Email; ?></td>
                                <td><?php echo $Type; ?></td>
                                <td><?php echo $Frequency; ?></td>
                                <td><?php echo $Date; ?></td>
                                <td><a href="update.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>

                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>


</body>

</html>