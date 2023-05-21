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
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <style>
        .registration_form {
            border: none !important;
            padding: 30px 10px !important;
        }

        body {
            background: #b4b4b4;
            font-family: 'Ubuntu';
        }

        #cccccc {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            flex-direction: column;
        }

        #registration-form {
            font-family: "Ubuntu", sans-serif;
            width: 430px;
            min-width: 250px;
            margin: 30px auto;
            position: relative;

        }

        #registration-form .fieldset {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 6px;
        }

        #registration-form legend,
        #navigation-dialog legend {
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            width: 100%;
            padding: 15px 0;
            border-radius: 6px 6px 0 0;
            color: white;
            font-size: 1.8em;
        }

        .fieldset form {
            border: 1px solid #2f2f2f;
            margin: 0 auto;
            width: 100%;
            padding: 30px 20px;
            box-sizing: border-box;
            border-radius: 0 0 3px 3px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .placeholder #registration-form label {
            display: none;
        }

        .no-placeholder #registration-form label {
            margin-left: 5px;
            position: relative;
            display: block;
            color: grey;
            text-shadow: 0 1px white;
            font-weight: bold;
        }

        /* all */
        ::-webkit-input-placeholder {
            text-shadow: 1px 1px 1px white;
            font-weight: 700;
        }

        ::-moz-placeholder {
            text-shadow: 0 1px 1px white;
            font-weight: 700;
        }

        /* firefox 19+ */
        :-ms-input-placeholder {
            text-shadow: 0 1px 1px white;
            font-weight: 700;
        }

        /* ie */
        #registration-form input[type="text"] {
            padding: 15px 20px;
            border-radius: 1px;
            margin: 5px auto;
            background-color: #f7f7f7;
            border: none;

            -webkit-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.2);
            box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, 0.8);
            width: 400px;

            -webkit-transition: background-color 0.5s ease;
            -moz-transition: background-color 0.5s ease;
            -o-transition: background-color 0.5s ease;
            -ms-transition: background-color 0.5s ease;
            transition: background-color 0.5s ease;
        }

        .no-placeholder #registration-form input[type="text"] {
            padding: 10px 20px;
        }

        #registration-form input[type="text"]:active,
        .placeholder #registration-form input[type="text"]:focus {
            outline: none !important;
            border: 1px solid red !important;
            background-color: #c7c7c7 !important;
        }

        #registration-form input[type="submit"] {
            font-family: "Ubuntu";
            outline: none;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
            width: 400px;
            background-color: #5c8cf7;
            padding: 10px;
            color: white;
            border: 1px solid #5c8cf7;
            border-radius: 3px;
            font-size: 1.5em;
            font-weight: bold;
            margin-top: 5px;
            cursor: pointer;
            position: relative;
            top: 0;
            transition: all 0.5s;
        }

        #registration-form input[type="submit"]:hover {
            background-color: #2960f9;
        }

        #registration-form input[type="submit"]:active {
            background-color: #2960f9;
        }

        #registration-form input[type="date"] {
            font-family: "Ubuntu";
            padding: 5px 8px;
            border: 2px solid #d4d4d4;
            border-radius: 6px;
            margin: 10px auto;
            cursor: pointer;
        }

        .parsley-error-list {
            background-color: #c34343;
            padding: 5px 11px;
            margin: 0;
            list-style: none;
            border-radius: 0 0 3px 3px;
            margin-top: -5px;
            margin-bottom: 5px;
            color: white;
            border: 1px solid #870d0d;
            border-top: none;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            position: relative;
            top: -1px;
            text-shadow: 0px 1px 1px #460909;
            font-weight: 700;
            font-size: 12px;
        }

        .parsley-error {
            border-color: #870d0d !important;
            border-bottom: none;
        }

        #registration-form select {
            width: 100%;
            padding: 5px;
        }

        ::-moz-focus-inner {
            border: 0;
        }

        legend span {
            font-size: 1.2rem;
            font-weight: 100;
            color: #5c8cf7;
        }

        #navigation-dialog {
            font-family: "Ubuntu", sans-serif;
            width: 430px;
            min-width: 250px;
            margin: 30px auto;
            position: relative;

        }

        #navigation-dialog .fieldset {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 0 0 10px 10px;
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        .fieldset .navigation-body {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 16px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
    <div id="cccccc">
        <div id="registration-form">
            <div class='fieldset'>
                <legend>Add New User<br>
                    <span><?php echo $_SESSION['adminName'] ?> is currently logged in..</span>
                </legend>

                <form action="" method="post" data-validate="parsley" class="registration_form">
                    <div>
                        <!--	<label for='firstname'>Username</label> -->
                        <input type="text" placeholder="Username" name='username' id='firstname' data-required="true" data-error-message="UserName is required" required>
                    </div>
                    <div>
                        <!--	<label for="lastname">Password</label> -->
                        <input type="text" placeholder="Password" name='password' data-required="true" data-type="email" data-error-message="Password is required" required>
                    </div>
                    <div class='row'>
                        <!--	<label for="email">Expiration Time</label> -->
                        <input type="date" name='expiry' data-required="true" data-error-message="Year - Month - Day" required>
                    </div>
                    <input type="submit" value="Register" name="register">
                </form>
            </div>
        </div>
        <div id="navigation-dialog">
            <div class='fieldset'>
                <legend>Registered Users</legend>
                <div class='navigation-body'>
                    <span><a href="usersDash.php">Click here to view your registered users<a></span>
                </div>
            </div>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/parsley.js/1.2.2/parsley.min.js'></script>

    <?php   // this code is use to insert the form details and register and expiration date
    include 'DB.php';
    include 'Global.php';
    if (isset($_POST['register'])) {
        $Username = $_POST['username'];
        $Password  = $_POST['password'];
        $Expiration = $_POST['expiry'];
        $date = date("Y/m/d");
        $yes = 2;
        $vendor = $_SESSION['adminUser'];

        $fetch = "INSERT INTO `tokens`(`Username`, `Password`, `StartDate`, `EndDate`, `UID`, `Expiry`, `vendor`) VALUES ('$Username','$Password','$date','$Expiration', NULL, '$yes', '$vendor')";
        $fire = mysqli_query($conn, $fetch);
    }
    ?>

</body>

</html>