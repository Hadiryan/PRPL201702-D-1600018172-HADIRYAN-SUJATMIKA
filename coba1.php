<?php 
 
	$db = new mysqli("localhost","root","","hotel3");
	if($db->connect_error){
		echo"ahahaha mampus erorr ".$db->error;
	}else{
		echo"Database sudah siap gan,";
	}
	$sql = "select * from reservation";
	$data=$db->query($sql);
	echo "<h1>Informasi Pemesanan";
	echo "<table border='1'>";
	echo "<tr><td>No.</td>
	<td>Check-In</td>
	<td>Check-Out</td>
	<td>Nama</td>
	<td>Email</td>
	<td>bed_type</td>
	<td>adult</td>
	</tr>";
if($data->num_rows > 0){
	$no = 1;
	while ($row = $data->fetch_assoc()){

		echo "<tr>";
		echo "<td>".$no++."</td>";
		echo "<td>".$row['checkin']."</td>";
		echo "<td>".$row['checkout']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['bed_type']."</td>";
		echo "<td>".$row['adult']."</td>";
		

	}

}else{
	echo " data kosong ";
}
echo "</table>";
$db->close();
echo "<a href='index.php'> kembali ke menu</a> / <a href='reservation.php'> Inputin data dulu</a> / <a href='coba1.php'> Tampil</a> / <a href='filter.php'> Filter</a> / <a href='print.php'> Search Name</a> / <a href='grafreservasi.php'> Graf Reservasi</a>" ;
 ?>	

