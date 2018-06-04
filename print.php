<!DOCTYPE html>
<html>
<head>
  <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title>vacayhome</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="js/instafeed.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
</head>
<body>
<form action="print.php" method="POST">
   <div class="col-md-6 contact-form">
                        <h3>Form <span>Reservation</span></h3>
                        <form method='POST' action="coba.php" >
                            Search Name<input type="text" class="form-control" name="cari" placeholder="Insert Your Name" required="">
                            <input type="submit" class="submit-btn" name="add" value="Cari">
                        </form>
                      </div>
</form>
<?php
  $cari = (isset($_POST['cari']) ? $_POST['cari'] : '');
?>
<?php
require('config.php');
  $result =mysqli_query($con, "SELECT nama FROM reservation where nama = '$cari'");
  $tes = null;
  while ($mem = mysqli_fetch_assoc($result)){
    $tes = $mem['nama'];
  }
  if($cari != null && $cari == $tes){
?>
<div class="row col-lg-12">
		<div id="member">
				<table class="table table-striped table-bordered text-center">
						<thead>
              <tr>
  								<th>Name</th>
                  <th>
                  <?php
      						require('config.php');
      							$result = $con->query("SELECT * FROM reservation where nama = '$cari'");
      							while ($mem = mysqli_fetch_assoc($result)):
      							echo $mem['nama'];
      						endwhile;
      						$result->close();
      						?>
                </th>
              </tr>
						<tr>
								<th>Check-In</th>
                <th>
                <?php
    						require('config.php');
    							$result = $con->query("SELECT * FROM reservation  where nama = '$cari'");
    							while ($mem = mysqli_fetch_assoc($result)):
    							echo $mem['checkin'];
    						endwhile;
    						$result->close();
    						?>
              </th>
            </tr>
            <tr>
              <th>Check-Out</th>
              <th>
                <?php
                require('config.php');
                  $result = $con->query("SELECT * FROM reservation  where nama = '$cari'");
                  while ($mem = mysqli_fetch_assoc($result)):
                  echo $mem['checkout'];
                endwhile;
                $result->close();
                ?>
              </th>
            </tr>
            <tr>
              <th>Email</th>
              <th>
                <?php
                require('config.php');
                  $result = $con->query("SELECT * FROM reservation  where nama = '$cari'");
                  while ($mem = mysqli_fetch_assoc($result)):
                  echo $mem['email'];
                endwhile;
                $result->close();
                ?>
              </th>
            </tr>
            <tr>
              <th>Bed Type</th>
              <th>
                <?php
                require('config.php');
                  $result = $con->query("SELECT * FROM reservation  where nama = '$cari'");
                  while ($mem = mysqli_fetch_assoc($result)):
                  echo $mem['bed_type'];
                endwhile;
                $result->close();
                ?>
              </th>
            </tr>
            <tr>
              <th>Adult</th>
              <th>
                <?php
                require('config.php');
                  $result = $con->query("SELECT * FROM reservation  where nama = '$cari'");
                  while ($mem = mysqli_fetch_assoc($result)):
                  echo $mem['adult'];
                endwhile;
                $result->close();
                ?>
              </th>
            </tr>
            <tr>
              <th>Total Cost</th>
              <th>
                <?php
                require('config.php');
                  $result = $con->query("SELECT * FROM reservation  where nama = '$cari'");
                  while ($mem = mysqli_fetch_assoc($result)):

                    $bed_type = $mem['adult'];
    								$checkin = $mem['checkin'];
    								$rtdata = mysqli_fetch_assoc(mysqli_query($con,"SELECT harga from priceroom where bed_type = '$bed_type'"));
    								$trdata = mysqli_fetch_assoc(mysqli_query($con,"SELECT TIMESTAMPDIFF(DAY,checkin,checkout) from reservation where checkin='$checkin'"));
    								$timeremaining = $trdata['TIMESTAMPDIFF(DAY,checkin,checkout)'];
    								$bed_type_price = $rtdata['harga']*$timeremaining;

                  echo 'IDR '.number_format($bed_type_price, 0, ".", ".").'';
                endwhile;
                $result->close();
                ?>
              </th>
            </tr>
						</thead>
				</table>
        <button type="submit" onclick="window.print()">Print</button>
		</div>
	</div>
</div>
<?php } ?>
</body>
</html>