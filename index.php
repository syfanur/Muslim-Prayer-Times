<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title>Muslim Prayer Times</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Gym website, Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 

    <!-- Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick-carousel/slick.css"> 
    <link rel="stylesheet" type="text/css" href="assets/fonts/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="assets/css/hovereffects.css"> 
    <!-- Theme Styles -->
    <link href="assets/css/scrolling-nav.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

    <style type="text/css">
 .box {
  width:  350px;
  height: 100px;
  background-color: #F4A460;
  text-align: center;
  line-height: 30px;
  margin: 5px;
 }
 
 .clear {clear: both;}
</style>
  </head>
  <!-- End Head -->

  <body>
    <!-- Header -->
    <header id="top">
      <!-- Navbar --> 
	  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="#page-top">Muslim<span>PrayerTimes</span></a>  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-menu"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#top">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#services">Prayer Times</a>
			  </li>
			   <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#about">Al-Quran</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#contact">About</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
      <!-- End Navbar --> 
		<section class="hero-large hero">
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
			  </ul>
			  <div class="carousel-inner">
		
				<div class="carousel-item active">
				  <img src="assets/img/intro/background.png" alt="Chicago" width="1100" height="500">
				    <div class="container">
				  <div class="carousel-caption">
					<h2>Prayer Times</h2>
          <p style="font-size:18px">MuslimPrayeTimes provides the most accurate Prayer times based on your current location</p>
				  </div>   
				</div>
				</div>
				<div class="carousel-item">
				  <img src="assets/img/intro/background2.png" alt="New York" width="1100" height="500">
				    <div class="container">
				  <div class="carousel-caption">
            <h2>Prayer Times</h2>
            <p style="font-size:18px">MuslimPrayeTimes provides the best online Quran learning on the internet</p>
				  </div>   
				  </div>
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			</div>
			
		</section>

    </header>
    <!-- End Header -->

    <main role="main" class="mt-lg-5 m-0">
	
	<section class="wt-section" id="services">
        <div class="container">
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0">
            <h2 class="mb-md-2">Prayer Times in Bandung</h2>
          </div>
		</div> 
          

        	
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                <b>Daily Prayer Times</b> 
              </div>
              <br>
              <div class="panel-body">
                <div class="list-group">

                  <a class="list-group-item">
                  <?php
                  echo "Today is " . date("l, Y-m-d") . "<br>"; ?>
                  </a>
                  <?php

                $url = file_get_contents('https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/adzan/bandung/2020/11/01.json');
                $daily = json_decode($url, true);

                ?>
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Waktu Shalat</th>
                            <th>Jam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Shubuh</td>
                            <td><?=$daily['shubuh']?></td>
                        </tr>
                        <tr>
                            <td>Dzuhur</td>
                            <td><?=$daily['dzuhur']?></td>
                        </tr>
                        <tr>
                            <td>Ashar</td>
                            <td><?=$daily['ashr']?></td>
                        </tr>
                        <tr>
                            <td>Magrib</td>
                            <td><?=$daily['magrib']?></td>
                        </tr>
                        <tr>
                            <td>Isya</td>
                            <td><?=$daily['isya']?></td>
                        </tr>
                     
                    </tbody>
                </table>
              </div>
              </div>
          </div>

      </div>
      <div class="col-md-8 col-sm-12 col-xs-12">

          <div class="panel panel-default">
              <div class="panel-heading">
               <b>Monthly Prayer Times</b> 
                
              </div> 
              <br>
              <div class="panel-body">
                  <div class="table-responsive">
                    <?php

                $url = file_get_contents('https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/adzan/bandung/2020/11.json');
                $data = json_decode($url, true);

                ?>
                      <table class="table table-striped table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>Tanggal</th>
                                  <th>Shubuh</th>
                                  <th>Dzuhur</th>
                                  <th>Ashar</th>
                                  <th>Magrib</th>
                                  <th>Isya</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php 

                    foreach ($data as $dataa):
                    ?>

                    <tr>
                     <td><?=$dataa['tanggal']?></td>
                     <td><?=$dataa['shubuh']?></td>
                     <td><?=$dataa['dzuhur']?></td>
                     <td><?=$dataa['ashr']?></td>
                     <td><?=$dataa['magrib']?></td>
                     <td><?=$dataa['isya']?></td>

                    </tr>

                    <?php 
                    endforeach 
                    ?>

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

      </div>
  </div>
  <!-- /. ROW  -->
  
        </div>
      </section> 

  <section class="wt-section bg-light" id="about">
    <div class="container">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0">
            <h2 class="mb-md-2">Al - Quran</h2>
            <p class="lead text-muted">List of Surahs</p>
          </div>
	
        <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
          <?php
         

        $url = file_get_contents('https://equran.id/api/surat/');
        $quran = json_decode($url, true);

            foreach ($quran as $q):
                    ?>
            <p class="box"><?=$q['nama']?> (<?=$q['nama_latin']?>) <br>
            Jumlah Ayat : <?=$q['jumlah_ayat']?> <br> 
            <img src="image.png" width="24" height="24" value="PLAY"  onclick="play()">
            <audio id="audio" src="<?=$q['audio']?>" ></audio></p>
                    <?php 
                    endforeach 
                    ?>
                   </div>

            </div>
       
</section> 

<section class="wt-section bg-light" id="contact">
    <div class="container">
      <center><h2 class="mb-md-2">Address</h2></center>
      <br><br>
		 <div class="row" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2986422225986!2d107.62834001477327!3d-6.974049293874376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285c5b7da517%3A0x864485f26a388f95!2sTelkom%20University!5e0!3m2!1sen!2sid!4v1604131088146!5m2!1sen!2sid" width="1300" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    </div>
</section> 
      <!-- End Clients Section -->
    </main>

    <!-- Footer -->
    <footer class="bg-dark py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
            <small class="text-white"><a class="text-white" href="https://webthemez.com/free-bootstrap-templates/">&copy; All Rights Reserved</small>
          </div>

          <div class="col-md-4 align-self-center">
            <ul class="list-inline text-center text-md-right mb-0">
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                <a class="text-white" target="_blank" href="https://www.facebook.com/">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                <a class="text-white" target="_blank" href="https://www.instagram.com/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                <a class="text-white" target="_blank" href="https://twitter.com/">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
                <a class="text-white" target="_blank" href="https://dribbble.com/">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
  
    <!-- JS Script Files --> 
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- Components Vendor  --> 
    <script src="assets/vendors/slick-carousel/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/counters/waypoint.min.js"></script>
    <script src="assets/vendors/counters/counterup.min.js"></script>

	<script src="assets/contact/jqBootstrapValidation.js"></script>
	<script src="assets/contact/contact_me.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <!--Plugin Initialize-->
    <script src="assets/js/global.js"></script>

    <!-- Theme Components and Settings --> 
    <script src="assets/vendors/carousel.js"></script>
    <script src="assets/vendors/counters.js"></script>

    <script>
     function play(){
       var audio = document.getElementById("audio");
       audio.play();
}
</script>

	
  </body>
  <!-- End Body -->
</html>


