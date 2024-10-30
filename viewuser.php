<?php 
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User</title>
	<style>
		body {
			font-family: "system-ui";
			background-color: #CDC1FF;
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
            background-color: #F3F3E0;
		}
		table, th, td {
			border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getUserByID = getUserByID($pdo, $_GET['user_id']); ?>
	<h1>Username: <?php echo $getUserByID['username']; ?></h1>
	<h1>Date Joined: <?php echo $getUserByID['date_added']; ?></h1>
</body>
</html>
