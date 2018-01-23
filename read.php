
<?php require "templates/header.php"; ?>
<?php

	if (isset($_POST['submit'])) 
	{
		try 
		{	
			require "config.php";
			require "common.php";

			$connection = new PDO($dsn, $username, $password, $options);
			
			$location = $_POST['location'];
			$sql = 'SELECT * 
					FROM users
					WHERE `location`="'.$location.'"';

			$statement = $connection->prepare($sql);
			$statement->bindParam(':location', $location, PDO::PARAM_STR);
			$statement->execute();

			$result = $statement->fetchAll();
			printData($result);
		}
		
		catch(PDOException $error) 
		{
			echo $sql . "<br>" . $error->getMessage();
		}
	}
?>

<?php  
		function printData($result) {
	 ?>
			<h2>Results</h2>

			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email Address</th>
						<th>Age</th>
						<th>Location</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
		<?php 
			foreach ($result as $row) 
			{?>
				<tr>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["firstname"]; ?></td>
					<td><?php echo $row["lastname"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["age"]; ?></td>
					<td><?php echo $row["location"]; ?></td>
					<td><?php echo $row["date"]; ?> </td>
				</tr>
			<?php 
			} ?>
			</tbody>
		</table>
		<?php 
		}
?> 

<h2>Find user based on location</h2>

<form method="post">
	<label for="location">Location</label>
	<input type="text" id="location" name="location">
    <br>
	<input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
