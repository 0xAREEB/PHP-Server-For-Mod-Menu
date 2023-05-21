<?php
session_start();

include 'DB.php';
include 'Global.php';

if ($maintenance == false) {
	if (!isset($_SESSION['admin'])) {
		// session isn't started
		echo "<h2 style='text-align:center;'><span style='color: red;'>Error!</span> You are not logged in..</h2>";
		die();
	} else if (!$_SESSION['admin']) {
		echo "<h2 style='text-align:center;'><span style='color: red;'>Error!</span> You are not an Admin..</h2>";
		die();
	}
	$conn->query("DELETE FROM `tokens` WHERE `Username` = '" . $_GET['no'] . "'");
}

?>

<script type="text/javascript">
	alert("User Deletion Success");
	window.location.href = 'usersDash.php';
</script>