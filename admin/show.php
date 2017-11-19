<html>
	<head>
		<meta charset="utf-8">
		<title>Details of Book key</title>
		
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
		<article>
			<h1></h1>
			<address >
				
				<p><br></p>
				<p>Customer Name  : -  <?php echo $title.$Fname." ".$lname;?><br></p>
			</address>
			<table class="meta">
				<br>
				<br>
				<tr>
					<th><span >Customer ID: </span></th>
					<td><span ><?php echo $id; ?></span></td>
				</tr>
				<tr>
					<th><span >Check in: </span></th>
					<td><span ><?php echo $cin_date; ?> </span></td>
				</tr>
				<tr>
					<th><span >Check out: </span></th>
					<td><span ><?php echo $cout_date; ?> </span></td>
				</tr>
			</table>
			<table>
				<tr>
					<th><span >Customer phone: </span></th>
					<td><span ><?php echo $phone; ?> </span></td>
				</tr>
				<tr>
					<th><span >Customer Country: </span></th>
					<td><span ><?php echo $country; ?> </span></td>
				</tr>
			</table>
				<br>
				<br>
			<table class="meta">
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
			
			
		</article>
	</body>
</html>

<?php 

ob_end_flush();

?>