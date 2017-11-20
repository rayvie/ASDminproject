<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
					</ul>

            </div>

        </nav>
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small>Room Booking </small>
                        </h1>
                    </div>
                </div>
				<?php
						include ('db.php');
						 $sql = "select * from roombook";
						$re = mysqli_query($con,$sql);
						$c =0;
						while($row=mysqli_fetch_array($re) )
						{
								$new = $row['stat'];
								$cin = $row['cin'];
								$id = $row['id'];
								if($new=="Not Confirm")
								{
									$c = $c + 1;
									
								
								}
						}
                    ?>

					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
							
							<div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
												 New Room Bookings  <span class="badge"><?php echo $c ; ?></span>
											
                                        </h4>
                                    </div>
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Country</th>
											<th>Room</th>
											<th>Bedding</th>
											<th>Meal</th>
											<th>Check In</th>
											<th>Check Out</th>
											<th>Status</th>
											<th>More</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
									$tsql = "select * from roombook";
									$tre = mysqli_query($con,$tsql);
									while($trow=mysqli_fetch_array($tre) )
									{	
										$co =$trow['stat']; 
										if($co=="Not Confirm")
										{
											echo"<tr>
												<th>".$trow['id']."</th>
												<th>".$trow['FName']." ".$trow['LName']."</th>
												<th>".$trow['Email']."</th>
												<th>".$trow['Country']."</th>
												<th>".$trow['TRoom']."</th>
												<th>".$trow['Bed']."</th>
												<th>".$trow['Meal']."</th>
												<th>".$trow['cin']."</th>
												<th>".$trow['cout']."</th>
												<th>".$trow['stat']."</th>
												
												<th><a href='roombook.php?rid=".$trow['id']." ' class='btn btn-primary'>Action</a></th>
												</tr>";
										}	
									
									}
									?>
                                        
                                    </tbody>
                                </table>
								
                            </div>
                        </div>
                    </div>
                                        </div>
                                </div>
								<?php
								
								$rsql = "SELECT * FROM `roombook`";
								$rre = mysqli_query($con,$rsql);
								$r =0;
								while($row=mysqli_fetch_array($rre) )
								{		
										$br = $row['stat'];
										if($br=="Confirm")
										{
											$r = $r + 1;
											
											
											
										}
										
								
								}
						
								?>
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
												 Booked Rooms  <span class="badge"><?php echo $r ; ?></span>

                                        </h4>
                                    </div>
                                    
                                        <div class="panel-body">
										<?php
										$msql = "SELECT * FROM `roombook`";
										$mre = mysqli_query($con,$msql);
										
										while($mrow=mysqli_fetch_array($mre) )
										{		
											$br = $mrow['stat'];
											if($br=="Confirm")
											{
												$fid = $mrow['id'];
												 
											echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-green'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$mrow['FName']."</h3>
														</div>
														<div class='panel-footer back-footer-green'>
														<a href=show.php?sid=".$fid ."><button  class='btn btn-success btn' data-toggle='modal' data-target='#myModal'>
													Show
													</button></a>
															".$mrow['TRoom']."
														</div>
													</div>	
											</div>";
															
												
					
				
												
											}
											
									
										}
										?>
                                           
										</div>
									
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>