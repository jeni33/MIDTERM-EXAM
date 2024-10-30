<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Client Management</title>
</head>
<style>
	body {
			font-family: "system-ui";
			background-color: #CDC1FF;
		}
	input {
			font-size: 1.5em;
			height: 40px;
			width: 200px;
			background-color: #F3F3E0;
		}
    input [type = "submit"]{
        font-weight: bold;
        }
</style>
<body>
	<h1>Welcome to the Loan Management System! Kindly fill out the client details.</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="first_name"><strong>First Name: </strong></label> 
			<input type="text" name="first_name" required>
		</p>
		<p>
			<label for="last_name"><strong>Last Name: </strong></label> 
			<input type="text" name="last_name" required>
		</p>
		<p>
			<label for="contact_number"><strong>Contact Number: </strong></label> 
			<input type="text" name="contact_number" required>
		</p>
        <p>
			<label for="client_address"><strong>Client Address: </strong></label> 
			<input type="text" name="client_address" required>
		</p>
		<p>
		    <input type="submit" name="insertClientBtn">
		</p>
	</form>
	<?php $getAllClients = getAllClients($pdo); ?>
	<?php foreach ($getAllClients as $row) { ?>
	<div class="container" style="border-style: solid; width: 50%; height: 300px; margin-top: 15px; background-color: #F3F3E0;">
		<h3>Client ID: <?php echo $row['client_id']; ?></h3>
		<h3>First Name: <?php echo $row['first_name']; ?></h3>
		<h3>Last Name: <?php echo $row['last_name']; ?></h3>
		<h3>Contact Number: <?php echo $row['contact_number']; ?></h3>
        <h3>Client Address: <?php echo $row['client_address']; ?></h3>

		<div class="editAndDelete" style="float: right; margin-right: 20px;">
			<a href="viewLoans.php?client_id=<?php echo $row['client_id']; ?>">View Loans</a>
			<a href="editClient.php?client_id=<?php echo $row['client_id']; ?>">Edit</a>
			<a href="deleteClient.php?client_id=<?php echo $row['client_id']; ?>">Delete</a>
		</div>
	</div> 
	<?php } ?>
</body>
</html>