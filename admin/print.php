
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		
		
	</head>
	<body>
	
	
	
	
	<?php
		ob_start();	
		include ('db.php');

		$pid = $_GET['pid'];
		
		$sql ="select * from payment where id = '$pid' ";
		$re = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($re))
			{
				$id = $row['id'];
				$title = $row['title'];
				$fname = $row['fname'];
				$lname = $row['lname'];
				$troom = $row['troom'];
				$bed = $row['tbed'];
				$nroom = $row['nroom'];
				$cin = $row['cin'];
				$cout = $row['cout'];
				$meal = $row['meal'];
				$ttot = $row['ttot'];
				$mepr = $row['mepr'];
				$btot = $row['btot'];
				$fintot = $row['fintot'];
				$days = $row['noofdays'];
			}
		$type_of_room = 0;       
				
			if($troom=="Superior Room")
			{
				$type_of_room = 320;
			
			}
			else if($troom=="Deluxe Room")
			{
				$type_of_room = 220;
			}
			else if($troom=="Guest House")
			{
				$type_of_room = 180;
			}
			else if($troom=="Single Room")
			{
				$type_of_room = 150;
			}
			
			if($bed=="Single")
			{
				$type_of_bed = $type_of_room * 1/100;
			}
			else if($bed=="Double")
			{
				$type_of_bed = $type_of_room * 2/100;
			}
			else if($bed=="Triple")
			{
				$type_of_bed = $type_of_room * 3/100;
			}
			else if($bed=="Quad")
			{
				$type_of_bed = $type_of_room * 4/100;
			}
			else if($bed=="None")
			{
				$type_of_bed = $type_of_room * 0/100;
			}
			
			if($meal=="Room only")
			{
				$type_of_meal=$type_of_bed * 0;
			}
			else if($meal=="Breakfast")
			{
				$type_of_meal=$type_of_bed * 2;
			}else if($meal=="Half Board")
			{
				$type_of_meal=$type_of_bed * 3;
			
			}else if($meal=="Full Board")
			{
				$type_of_meal=$type_of_bed * 4;
			}
	?>

			<h1>Recipient</h1>
			<address >
				<p><?php echo $title.$fname." ".$lname ?> <br></p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span ><?php echo $id; ?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo $cout; ?> </span></td>
				</tr>
				
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >No of Days</span></th>
						<th><span >Rate</span></th>
						<th><span >Quantity</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span ><?php echo $troom; ?></span></td>
						<td><span ><?php echo $days; ?> </span></td>
						<td><span data-prefix>$</span><span ><?php  echo $type_of_room;?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix>$</span><span><?php echo $ttot; ?></span></td>
					</tr>
					<tr>
						<td><span ><?php echo $bed; ?>  Bed </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix>$</span><span ><?php  echo $type_of_bed;?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix>$</span><span><?php echo $btot; ?></span></td>
					</tr>
					<tr>
						<td><span ><?php echo $meal; ?>  </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix>$</span><span ><?php  echo $type_of_meal?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix>$</span><span><?php echo $mepr; ?></span></td>
					</tr>
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>$</span><span><?php echo $fintot; ?></span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix>$</span><span >0.00</span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix>$</span><span><?php echo $fintot; ?></span></td>
				</tr>
			</table>
		</article>
	</body>
</html>
<?php 

ob_end_flush();

?>