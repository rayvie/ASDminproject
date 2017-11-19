
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}


/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }


/* page */

html { background: #999; cursor: default; }
body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }

/* article */

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }


		</style>
		
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
		<header>
			<h1>Invoice</h1>
			
		</header>
		<article>
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