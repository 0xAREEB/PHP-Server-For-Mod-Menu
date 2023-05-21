<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register User</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <style>
        body {
            font-family: 'Ubuntu';
            background: #b4b4b4;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            flex-direction: column;
        }

        .container h2 {
            padding: 15px;
            background: rgba(0, 0, 0, 0.7);
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

        thead tr th {
            background: rgba(0, 0, 0, 0.7) !important;
            text-align: center;
            color: #5c8cf7;
            border: none;
        }

        tr th,
        tr td {
            border: 1px solid black !important;
            background-color: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>

<?php
if (!isset($_SESSION['admin'])) {
    // session isn't started
    echo "<h2 style='text-align:center;'><span style='color: red;'>Error!</span> You are not logged in..</h2>";
    die();
} else if (!$_SESSION['admin']) {
    echo "<h2 style='text-align:center;'><span style='color: red;'>Error!</span> You are not an Admin..</h2>";
    die();
}
?>

<body>
    <div id="main-container">
        <div class="container">
            <h2>Registered Users</h2>
            <table class="table table-hover">
                <thead>
                    <tr class="info">
                        <th>Username</th>
                        <th>Password</th>
                        <th>UID</th>
                        <th>Registration Date</th>
                        <th>Expiration Date</th>
                        <th>Status</th>
                        <th>Vendor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'DB.php';
                    include 'Global.php';

                    if ($_SESSION['superuser'] != 1) {
                        $adminUN = $_SESSION['adminUser'];
                        $fetchqry = "SELECT * FROM `tokens` WHERE vendor = '$adminUN'";
                    } else {
                        $fetchqry = "SELECT * FROM `tokens`";
                    }
                    $result = mysqli_query($conn, $fetchqry);
                    $num = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['Username']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><?php echo $row['UID']; ?></td>
                            <td><?php echo $date1 = $row['StartDate']; ?></td>
                            <td><?php echo $date2 = $row['EndDate']; ?></td>
                            <td><?php if (strtotime(date("Y/m/d")) < strtotime($date2)) echo "Active";
                                else {
                                    echo "Expired";
                                } ?></td>
                            <td><?php echo $row['vendor']; ?></td>
                            <?php {
                                echo "<td><center><a href='editUser.php?no=" . $row['Username'] . "'><button type='button' class='btn btn-primary'>Edit</button></a> <a href='deleteUser.php?no=" . $row['Username'] . "'><button type='button' class='btn btn-danger'>Remove</button></a></center></td>";
                            }

                            ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>