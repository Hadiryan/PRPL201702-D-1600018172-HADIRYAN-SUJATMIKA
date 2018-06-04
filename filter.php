<html>
<head>
	<title></title>
</head>
<body>
	<table border="0px">
		<form method='POST' action="filter.php">
			<tr>
				<td><br>
					From
					<input type="date" id="from" name="from">

				</td>
				<td><br> 
					To
					<input type="date" id="to" name="to">
					<input type="submit" value="Filter">
				</td>
			</tr>			
		</form>
		<form method='POST' action="grafreservasi.php">
			<tr>
				<input type="submit" value="Graf Reservasi">
			</tr>
		</form>
		<tbody>
			<?php
               require('koneksi.php');
                $from = (isset($_POST['from']) ? $_POST['from'] : '');
                $to = (isset($_POST['to']) ? $_POST['to'] : '');

                  if(!$from == null && !$to == null){
                    $result = $konek->query("SELECT * FROM reservation where checkin between '".$_POST['from']."' AND  '".$_POST['to']."' ORDER by email ASC");
                    while ($mem = mysqli_fetch_assoc($result)):

                    echo '<tr>';
                    echo '<td>'.$mem['nama'].'</td>';
                    echo '<td>'.$mem['email'].'</td>';
                    echo '<td>'.$mem['checkin'].'</td>';
                    echo '<td>'.$mem['checkout'].'</td>';
                    echo '<td>'.$mem['bed_type'].'</td>';
                    echo '<td>'.$mem['adult'].'</td>';
                    echo '</tr>';

                  endwhile;
                }else{
                  $result = $konek->query("SELECT * FROM reservation");

                  while ($mem = mysqli_fetch_assoc($result)):

                  echo '<tr>';
                  echo '<td>'.$mem['nama'].'</td>';
                  echo '<td>'.$mem['email'].'</td>';
                  echo '<td>'.$mem['checkin'].'</td>';
                  echo '<td>'.$mem['checkout'].'</td>';
                  echo '<td>'.$mem['bed_type'].'</td>';
                  echo '<td>'.$mem['adult'].'</td>';
                  echo '</tr>';

                endwhile;
                }
                /* free result set */
                $result->close();
                ?>
		</tbody>
	</table>

</body>
</html>