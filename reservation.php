<!DOCTYPE html>
<html lang="en">
    <head>
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
        <div id="page">
            <!---header top---->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6"><div class="social-grid">
                                <ul class="list-unstyled text-right">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div></div>
                    </div>
                </div>
            </div>
            <!--header--->
            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="index.php"><span>vacay</span>home</a>
                                </div>                       
                            </div>
                            <div class="col-sm-6 visible-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Home" href="index.php" class="active"><span>Home</span></a></li>
                                            <li><a data-hover="Reservation"  href="reservation.php"><span>Reservation</span></a></li>
                                            <li><a data-hover="Rooms"  href="rooms.php"><span>Rooms</span></a></li>
                                            <li><a data-hover="Gallery"  href="gallery.php"><span>Gallery</span></a></li>
                                            <li><a data-hover="Dinning" href="dinning.php"><span>Dinning</span></a></li>
                                            <li><a data-hover="News" href="news.php"><span>News</span></a></li>
                                            <li><a data-hover="Contact Us" href="contact.php"><span>contact Us</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <!--end-->
            <section class="image-head-wrapper" style="background-image: url('images/banner3.jpg');">
                <div class="inner-wrapper">
                    <h1>About us</h1>
                </div>
            </section>
            <div class="clearfix"></div>


            <section class="contact-block">
                <div class="container">
                    <div class="col-md-6 contact-left-block">
                        <h3><span>Information </span>Reservation</h3>
                        <p class="text-left">Isilah data dengan benar 
                        tidak terjadi kesalahan.</p>
                        <p class="text-left"><i class="fa fa-map-marker fa-lg"></i>Jalan Imogiri Timur, Bantul, Yogyakarta. </p>
                        <p class="text-left"><a href="tel:+1-202-555-0100"><i class="fa fa-phone fa-lg"></i> +1-202-555-0100 </a></p>
                        <p class="text-left"><a href="mailto:demo@info.com"> <i class="fa fa-envelope"></i> demo@info.com</a></p>
                    </div>
                    <div class="col-md-6 contact-form">
                        <h3>Form <span>Reservation</span></h3>
                        <form method='POST' action="coba.php" >
                            Check-In<input type="date" class="form-control" name="checkin" placeholder="checkin" required="">
                            Check-Out<input type="date" class="form-control" name="checkout" placeholder="checkout" required="">
                            Name<input type="text" class="form-control" name="nama" placeholder="Sujijo" required="">
                            Email<input type="email" class="form-control" name="email" placeholder="Sujijo@gmail.com" required="">
                            Bed Type<select type="number" class="form-control" name="bed_type" placeholder="" required="">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                              </select>
                            Adult<input type="number" class="form-control" name="adult" placeholder="" required="">
                            <input type="submit" class="submit-btn" name="add" value="Booking Now">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>
            
        </div>
            <footer>
                <div class="container">
                    <div class="row">
                        
                    </div>

                    <div class="copyright">
                        &copy; 2018 All right reserved
                    </div>

                </div>
            </footer>   
        </div>
        <script type="text/javascript">
    $(document).ready(function(){
        //semua element dengan class text-warning akan di sembunyikan saat load
        $('.text-warning').hide();
        //untuk mengecek bahwa semua textbox tidak boleh kosong
        $('input').each(function(){
            $(this).blur(function(){ //blur function itu dijalankan saat element kehilangan fokus
                if (! $(this).val()){ //this mengacu pada text box yang sedang fokus
                    return get_error_text(this); //function get_error_text ada di bawah
                } else {
                    $(this).removeClass('no-valid');
                    $(this).parent().find('.text-warning').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
                    $(this).closest('div').removeClass('has-warning');
                    $(this).closest('div').addClass('has-success');
                    $(this).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-warning-sign');
                    $(this).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-ok');
                }
            });
        });
        //mengecek textbox Nama Valid Atau Tidak
        $('#nama').blur(function(){
      var nama = $('#nama').val();
            var len= nama.length;
            if(len>0){ //jika ada isinya
                if(!valid_nama(nama)){ //jika nama tidak valid
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Your Name Invalid");
                    return apply_feedback_error(this);
                } else {
                    if (len>30){ //jika karakter >30
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Max 30 Character");
                        return apply_feedback_error(this);
                    }
                }
            }
        });


        //submit form validasi
        $('#reservasi').submit(function(e){
            e.preventDefault();
            var valid=true;
            $(this).find('.textbox').each(function(){
                if (! $(this).val()){
                    get_error_text(this);
                    valid = false;
                    $('html,body').animate({scrollTop: 0},"slow");
                }
                if ($(this).hasClass('no-valid')){
                    valid = false;
                    $('html,body').animate({scrollTop: 0},"slow");
                }
            });
            if (valid){
        swal({
          title: "Confirmation",
          text: "Press Yes for booking process.",
          type: "info",
          confirmButtonColor: "#1da1f2",
          confirmButtonText: "Yes",
          closeOnConfirm: false,
          allowOutsideClick: false,
          showLoaderOnConfirm: true
          }).then(function(){
            document.getElementById('reservasi').submit();
          });
            }
        });
    });

    //fungsi cek nama
    function valid_nama(nama) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(nama);
    }

    //menerapkan gaya validasi form bootstrap saat terjadi eror
    function apply_feedback_error(textbox){
        $(textbox).addClass('no-valid'); //menambah class no valid
        $(textbox).parent().find('.text-warning').show();
        $(textbox).closest('div').removeClass('has-success');
        $(textbox).closest('div').addClass('has-warning');
        $(textbox).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-ok');
        $(textbox).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-warning-sign');
    }

    //untuk mendapat eror teks saat textbox kosong, digunakan saat submit form dan blur fungsi
    function get_error_text(textbox){
        $(textbox).parent().find('.text-warning').text("");
        $(textbox).parent().find('.text-warning').text("Text Box Ini Tidak Boleh Kosong");
        return apply_feedback_error(textbox);
    }
</script>

    </body>
</html>


<?php
include "config.php";

$checkin = (isset($_POST['checkin']) ? $_POST['checkin'] : '');
$checkout = (isset($_POST['checkout']) ? $_POST['checkout'] : '');
$nama = (isset($_POST['nama']) ? $_POST['nama'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$bed_type = (isset($_POST['bed_type']) ? $_POST['bed_type'] : '');
$adult = (isset($_POST['adult']) ? $_POST['adult'] : '');

if($checkin != null && $checkout != null && $nama != null && $email != null && $bed_type != null && $adult != null){
  $sql = "INSERT INTO reservasi(checkin, checkout, nama, email, bed_type, adult)
        VALUES ('$checkin','$checkout','$nama','$email','$bed_type','$adult')";
  mysqli_query($con, $sql);
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

}
$con->close();
?>
