
 <?php 
	$db = new mysqli("localhost","root","","hotel3");
	if($db->connect_error){
		echo"ahahaha mampus erorr ".$db->error;
	}else{
		echo"Database sudah siap gan, ";
	}

	$sql = "create table reservation( nama varchar(255) not null, email varchar(255) not null, checkin date not null, checkout date not null, bed_type int(50)not null, adult int(50) not null)"; //membuat table //menampung sintak
	$query = $db->query($sql);  //diesekusi syntaknya atau objek
	if($query){
		echo" tabel berhasil dibuat coyyyy";
	}else{
		echo " tabel gagal dibuat gan".$db->error;
	}

 ?>