<?php 

    $db = new mysqli("localhost","root","","hotel3");
    if($db->connect_error){
        echo"ahahaha mampus erorr ".$db->error;
    }else{
        echo"Database sudah siap gan, ";
    }
    if(isset($_POST['add'])){
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $bed_type=$_POST['bed_type'];
    $adult=$_POST['adult'];

    $sql = "INSERT INTO reservation values ('$checkin','$checkout','$nama','$email','$bed_type','$adult')"; //isi table
    $query = $db->query($sql);  //diesekusi syntaknya atau objek

    if($query){
        echo"data berhasil di masukkan pelan - pelan ya bang";
        echo "<script>swal({
    title: 'Booking Status',
    text: 'Booking Request has been sent',
    type: 'success',
    showLoaderOnConfirm: true,
    preConfirm: function() {
      return new Promise(function(resolve) {
        setTimeout(function() {
          resolve()
        }, 2000)
      })
    }
  }).then(function() {
    swal('Booking Success!')
  })
      </script>";
    }else{
        echo "data gagal dimasukkin".$db->error;
    }
    }
    echo "<a href='/2/1home.php'> kembali ke menu</a> / <a href='inputreservasi.php'> Inputin data dulu</a> / <a href='coba1.php'> Tampil</a> <a href='datafilterreservasi.php'> Filter</a>" ;
 ?>