<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Most Epic ROM Ever - ROM</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="img/icon/mere.png">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
				<a class="navbar-brand" href="index.php"><img src="img/merelogo.png" width="45" height="45" ></img></a>
            </div>
        </div>
    </nav>


    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="section-heading">
					<h2><?php echo $_GET['Device'];?></h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
		</div>
			<?php
					require "config.php";
					$device = $_GET['Device'];
					echo "<table border='0' align='center' width='100%' >";
					$crt =1;
					$sql1 = mysql_query("SELECT * FROM tbl_firmware 
											WHERE DeviceName='".$device."'
											AND DeletedFlag= 0
											ORDER BY ReleaseDate DESC");

					?>

					<tr> 	
					 <th width= "40%" bgcolor="#222222"><font color="white" size="2"> Filename </th>
					 <th bgcolor="#222222"><font color="white" size="2"> Type </th>
					 <th bgcolor="#222222"><font color="white" size="2"> Build Date </th>
					 <th width= "10%" bgcolor="#222222"><font color="white" size="2"> File Size </th>
					</tr>

					<?php
					if(mysql_num_rows($sql1)>0)
					{
					while($row = mysql_fetch_array($sql1))
						{ 
						if ($crt % 2 == 0){
						$bg="#E5E5E5";
						}
						else
						{
						$bg="";
						}
					?>


					<tr>
					 <td bgcolor="<?=$bg?>"><font size="2"><a href="download.php?Filename=<?=$row['DeviceID'] ?>"><h6><img src="img/downloadicon.png"/>&nbsp&nbsp<?=$row['Filename'] ?>&nbsp&nbsp<small><?=$row['Count'] ?></small></h6></a></td>
					 <td align="left" bgcolor="<?=$bg?>"><font size="2"><h6><?=$row['Type'] ?></h6></td>
					 <td align="left" bgcolor="<?=$bg?>"><font size="2"><h6><?=$row['BuildDate'] ?></h6></td>
					 <td align="left" bgcolor="<?=$bg?>"><font size="2" color="#8C8C8C"><h6><?=$row['Size'] ?></h6></td>
					</tr>

					 <?php
					 $crt++;
					  }
					}
					else
						{
					 echo "<tr>
					  <td colspan='4' align='center'><br><br><br><br><br></td>
					  </tr>";
					  echo "<tr>
					  <td colspan='4' align='center'>No Firmware Available</td>
					  </tr>";
					   echo "<tr>
					  <td colspan='4' align='center'><br><br><br><br><br></td>
					  </tr>";
						}
					echo "</table>";
			?>	
        </div>		
		</div>
	</section>


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<p>Copyright 2015 - MERE. All rights reserved.</p>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="https://www.facebook.com/mostepicromever" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-google"><a href="https://plus.google.com/u/0/105514812301222049883" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>					
				</div>
				<div class="col-md-12 col-lg-12">
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>
