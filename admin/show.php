<html>
	<head>
		<meta charset="utf-8">
		<title>Details of Book key</title>
		
		
	</head>
	<body>

	<?php
		ob_start();	
		include ('db.php');

		$pid = $_GET['sid'];
		
		$sql ="select * from roombook where id = '$pid' ";
		$re = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($re))
		{
			$id = $row['id'];
			$title =  $row['Title'];
			$Fname = $row['FName'];
			$lname = $row['LName'];
			$email = $row['Email'];
			$National = $row['National'];
			$country = $row['Country'];
			$phone = $row['Phone'];
			$room_type = $row['TRoom'];
			$Bed_type = $row['Bed'];
			//$Noof_room = $row['Nroom'];
			$meal_type = $row['Meal'];
			$cin_date = $row['cin'];
			$cout_date = $row['cout'];
			$nodays = $row['nodays'];
		}									
	?>
		<header>
			<h1>Information of Guest</h1>
		</header>
			<table class="meta">
				<tr>
					<th><span >Customer Name: </span></th>
					<td><span ><?php echo $title." ".$Fname." ".$lname;?></span></td>
				</tr>
				<tr>
				<tr>
					<th><span >Customer ID: </span></th>
					<td><span ><?php echo $id; ?></span></td>
				</tr>
				<tr>
					<th><span >Check in Date: </span></th>
					<td><span ><?php echo $cin_date; ?> </span></td>
				</tr>
				<tr>
					<th><span >Check out Date: </span></th>
					<td><span ><?php echo $cout_date; ?> </span></td>
				</tr>
				<tr>
					<th><span >Customer phone: </span></th>
					<td><span ><?php echo $phone; ?> </span></td>
				</tr>
				<tr>
					<th><span >Customer Country: </span></th>
					<td><span ><?php echo $country; ?> </span></td>
				</tr>
				<tr>
					<th><span >Customer Nationality: </span></th>
					<td><span ><?php echo $National; ?> </span></td>
				</tr>
				
			</table>
				<br>
				<br>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >No of Days</span></th>
						
					</tr>
				</thead>
				<tbody>
				
					<tr>
						<td><span ><?php echo $room_type; ?></span></td>
						<td><span ><?php echo $nodays; ?> </span></td>
						
					</tr>
					<tr>
						<td><span ><?php echo $Bed_type; ?>  Bed </span></td>
						<td><span ><?php echo $nodays; ?></span></td>
						
					</tr>
					<tr>
						<td><span ><?php echo $meal_type; ?>  </span></td>
						<td><span ><?php echo $nodays; ?></span></td>
						
					</tr>
				</tbody>
			</table>
	</body>
</html>

<?php 

ob_end_flush();

?>