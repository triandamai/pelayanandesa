<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pelayanan Desa</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>
  
  <body class="size-1140">
  	 <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo White Version -->
            
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <!-- <li><a href="index.php">Home</a></li> -->
            <li><a href="index.php?module=profil">Profile</a></li>
            <li><a href="index.php?module=informasi">Informasi</a></li>
            <li><a href="index.php?module=kontak">Contact</a></li>
            <li><a href="index.php?module=login">Login</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-white text-center">
          <div class="item">
            <div class="s-12">
              <img src="img/black.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
					
                    <h4 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Pelayanan Masyarakat<br>
					Desa Lumbir</h4>
					
                    <div class="s-12 m-10 l-8 center"></div>
                    <div class="line">
                      <div class="s-12 m-12 l-3 center">
                        <img src="img/lambang_banyumas.png">
                      </div>       
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      
      <!-- Section 1 -->

      
      <!-- Section 1 -->
      
      
      <!-- Section 2 -->
      
      
      <!-- Section 3 -->
      
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 -->
      
      
      <!-- Section 5 --> 
<?php
					if (@$_GET['module'] == "") { 

            include_once("login.php");
		?>
		<!-- <section class="section background-dark">
        <div class="line">
         Balai Desa Lumbir berdiri pada tahun berapa yaaa ???
        </div>
      </section> -->
	  <?php
		
		}else{
		
		if($_GET["module"]){
	include_once($_GET["module"].".php");
}
		}
					?>
	  
      
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">Telepon/Hp : (0281) 000000</p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          
        </div>
        
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
				<center>
                  <h3 class="margin-bottom-0">Alamat</h3>
                  <p>Jl. Lumbir, Kabupaten Banyumas, Jawa Tengah<br>
                     
                  </p>
				</center>
                </div>
               
                
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
				<center>
                  <h3 class="margin-bottom-0">No. Handphone</h3>
                  <p>000-000-000-000<br>
                  </p>
				</center>
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Kreator By : Aby</p>
          
        </div>
       
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>