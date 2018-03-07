<?php
    session_start();
    if(!isset($_SESSION['simple_login'])){
        header("Location: index.php");
        exit();
    }
     
/*** you can  write your protected content here ***/
 
?>
<!DOCTYPE html>
<!--
Template Name: Merciano
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Merciano</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/graha.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <h2 class="heading">SELAMAT DATANG DI DEPARTEMEN TEKNOLOGI INFORMASI</h2>
        <p>Fakultas Teknologi Informasi dan Komunikasi Institut Teknologi Sepuluh Nopember Surabaya</p>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Visi = Menjadi program studi teknologi informasi yang unggul dalam bidang keamanan berbasis IoT untuk mendukung pembangunan Smart City secara berkelanjutan hingga tahun 2022</a></h1>
      </div>
      
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="btmspace-50 center">
      <h3 class="btmspace-10">PROFIL LULUSAN</h3>
      <p class="nospace">Beberapa keahlian yang akan didapatkan ketika lulus dari Departemen Teknologi Informasi</p>
    </div>
    <ul class="nospace clear services">
      <li class="one_quarter first"><a href="#">
        <figure><img src="images/demo/gallery/1.png" alt="">
          <figcaption>Spesialis Keamanan Siber</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure><img src="images/demo/gallery/2.png" alt="">
          <figcaption>Spesialis IoT</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure><img src="images/demo/gallery/3.png" alt="">
          <figcaption>Analis Keamanan Aplikasi</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure><img src="images/demo/gallery/4.png" alt="">
          <figcaption>Pengembang Layanan Awan</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter first"><a href="#">
        <figure><img src="images/demo/gallery/5.png" alt="">
          <figcaption>Spesialis Integrasi Sistem</figcaption>
        </figure>
        </a></li>
    </ul>
    <p class="center"><a class="inverse" href="#">MISI
      <p class="center"><a class="inverse" href="#">1. Menyelenggarakan pendidikan dan pengajaran teknologi informasi dengan menggunakan kurikulum yang adaptif, berorientasi ke masa depan dan didukung SDM yang berkualitas serta fasilitas yang memadai
        <p class="center"><a class="inverse" href="#">2. Melaksanakan penelitian yang bermutu di bidang keamanan Siber dan IoT untuk teknologi Smart City
          <p class="center"><a class="inverse" href="#">3. Menjalin kemitraan dengan instansi dalam maupun luar negeri
      <p class="center"><a class="inverse" href="#">4. Menyelenggarakan pengabdian kepada masyarakat berupa pelatihan, penyuluhan, penerapan hasil penelitian untuk pengenmbangan potensi dan pemberdayaan masyarakat daerah
    </a></p>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/lab.jpg');">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="testimonial clear">
      <blockquote>Mengapa Teknologi informasi ?</blockquote>
      <figure><img class="circle" src="images/demo/tanyat.jpg" alt="">
        <figcaption><strong>1. Saat ini banyak terdapat hacker, diperlukan ahli keamanan siber dan aplikasi untuk mengurangi penipuan</strong><br>
          <figcaption><strong>2. Program studi teknologi informasi dapat mencetak lulusan yang mempunyai keahlian di bidang layanan, sehingga dapat meningkatkan efisiensi operasional organisasi</strong><br>
            <figcaption><strong>3. Memiliki kemampuan penanganan aplikasi di instansi pemerintahan (E-Gov) </strong><br>
              <figcaption><strong>4. Memfasilitasi otomatisasi proses bisnis di organisasi untuk pengembangan teknologi smart city</strong><br>
          <em>Job / Title</em></figcaption>
      </figure>
    </div>
    <p class="center"><a class="btn" href="#">Risus justo nunc</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="btmspace-50 center">
      <h3 class="btmspace-10">APA KATA MEREKA ?</h3>
      <p class="nospace"></p>
    </div>
    <div class="latest">
      <article class="clear">
        <div class="one_half first"><a class="iblock borderedbox inspace-10" href="#"><img src="images/demo/wiranto.jpg" alt=""></a></div>
        <div class="one_half">
          <h3 class="heading"></h3>
          <ul class="nospace meta">
            <li>
              <time datetime="2018-02-27">27<sup>th</sup> Februari 2018</time>
            </li>
            <li>by <a href="#">Permata</a></li>
          </ul>
          <p>"Kegiatan siber nasional terutama pengamanan siber ini merupakan keharusan, keniscayaan.."</p>
          <footer><a class="btn" href="#">Wiranto - Mentri Polhukam</a></footer>
        </div>
      </article>
      <article class="clear">
        <div class="one_half first">
          <h3 class="heading"></h3>
          <ul class="nospace meta">
            <li>
              <time datetime="2018-02-27">27<sup>th</sup> Februari 2018</time>
            </li>
            <li>by <a href="#">Permata</a></li>
          </ul>
          <p>"Smart City menciptakan perubahan sistem lebih efektif dan efisien dalam lembaga pemerintahan"</p>
          <footer><a class="btn" href="#">Rudiantara - Menkominfo</a></footer>
        </div>
        <div class="one_half"><a class="iblock borderedbox inspace-10" href="#"><img src="images/demo/rudiantara.jpg" alt=""></a></div>
      </article>
    </div>
    <div class="btmspace-50 center">
      <h3 class="btmspace-10"></h3>
      <p class="nospace"></p>
    </div>
    <div class="latest">
      <article class="clear">
        <div class="one_half first"><a class="iblock borderedbox inspace-10" href="#"><img src="images/demo/john.jpg" alt=""></a></div>
        <div class="one_half">
          <h3 class="heading"></h3>
          <ul class="nospace meta">
            <li>
              <time datetime="2018-02-27">27<sup>th</sup> Februari 2018</time>
            </li>
            <li>by <a href="#">Permata</a></li>
          </ul>
          <p>"Suatu hari nanti komputasi akan menjadi infrastruktur publik seperti listrik dan telepon";</p>
          <footer><a class="btn" href="#">John McCarthy - Pakar Komputasi MIT</a></footer>
        </div>
      </article>
      <div class="btmspace-50 center">
      <h3 class="btmspace-10"></h3>
      <p class="nospace"></p>
    </div>
      <article class="clear">
        <div class="one_half first">
          <h3 class="heading"></h3>
          <ul class="nospace meta">
            <li>
              <time datetime="2018-02-27">27<sup>th</sup> Februari 2018</time>
            </li>
            <li>by <a href="#">Permata</a></li>
          </ul>
          <p>"Jika kita tidak memecahkan masalah keamanan, maka orang-orang akan ragu"</p>
          <footer><a class="btn" href="#">Bill Gates - Microsoft</a></footer>
        </div>
        <div class="one_half"><a class="iblock borderedbox inspace-10" href="#"><img src="images/demo/bill.jpg" alt=""></a></div>
      </article>
    </div>
    <div class="btmspace-50 center">
      <h3 class="btmspace-10"></h3>
      <p class="nospace"></p>
    </div>
    <div class="latest">
      <article class="clear">
        <div class="one_half first"><a class="iblock borderedbox inspace-10" href="#"><img src="images/demo/ddarwin.jpg" alt=""></a></div>
        <div class="one_half">
          <h3 class="heading"></h3>
          <ul class="nospace meta">
            <li>
              <time datetime="2018-02-27">27<sup>th</sup> Februari 2018</time>
            </li>
            <li>by <a href="#">Permata</a></li>
          </ul>
          <p>"Sistem yang terintegrasi dalam suatu perusahaan dapat meningkatkan penghematan atau efisiensi"</p>
          <footer><a class="btn" href="#">Darwin Widjaja - Praktisi Teknologi Informasi</a></footer>
        </div>
      </article>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <section class="hoc container center clear"> 
    <!-- ################################################################################################ -->
    
    <h3 class="btmspace-10">JENIS PELUANG KERJA</h3>
    <p class="font-xs"><a href="#">1. Komputasi Awan dan Komputasi Terdistribusi (Cloud and Distributed Computing)</a></p>
    <p class="font-xs"><a href="#">2. Arsitektur Web dan Pengembangan Framework(Web Architercture and Development Framework)</a></p>
    <p class="font-xs"><a href="#">3. Integrasi Perangkat Lunak dan Middleware (Middleware and Integration Software)</a></p>
    <p class="font-xs"><a href="#">4. Rancangan Antarmuka Pengguna (User Interface Design)</a></p>
    <p class="font-xs"><a href="#">5. Keamanan Informasi dan Jaringan  (Network and Information Security)</a></p>
    <p class="font-xs"><a href="#">6. Manajemen Penyimpanan Data  (Storage Systems and Management)</a></p>

    <!-- ################################################################################################ -->
  </section>
  
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

  <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">

            <div class="mu-title">
              <span class="mu-subtitle">Get In Touch</span>
              <h2>Contact Us</h2>
            </div>

            <div class="mu-contact-content">
              <div class="row">

                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <!-- Email message div -->
                    <div id="form-messages"></div>
                    <!-- Start contact form -->
                    <form id="ajax-contact" method="post" action="testmail.php" class="mu-contact-form">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                      </div>                      
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>                        
                        <textarea class="form-control" id="message" name="message"  cols="30" rows="10" placeholder="Type Your Message" required></textarea>
                      </div>                      
                      <button type="submit" class="mu-send-btn">Send Message</button>
                        
                    </form>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Office Address</h3>
                      <p>Jalan Raya ITS, Keputih, Sukolilo, Keputih, Sukolilo, Kota SBY, Jawa Timur 60111</p>
                      <address>
                        <p><i class="fa fa-phone"></i> (031) 5994251</p>
                        <p><i class="fa fa-envelope-o"></i>teknologi.informasi@its.ac.id</p>
                        <p><i class="fa fa-map-marker"></i>Surabaya, Jawa Timur, Indonesia</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Open Hours</h3>                      
                      <address>
                        <p><span>Senin - Jumat</span> 08.00-16.00</p>
                        <p><span>Sabtu</span> Libur</p>
                        <p><span>Minggu</span> Libur</p>
                      </address>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
<!-- Start Map section -->
  <section id="mu-map">
    <iframe src=
            "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.662365446152!2d112.790795!3d-7.279204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa16b145e469%3A0x83df57e6a93ef2c2!2sJurusan+Sistem+Informasi+ITS!5e0!3m2!1sen!2sid!4v1429068412402"  width="100%" height="100%" frameborder="0"allowfullscreen></iframe>
  </section>
  <!-- End Map section -->

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="layout/scripts/gmaps.js"></script>

</body>
</html>