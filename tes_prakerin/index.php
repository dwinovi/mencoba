<?php
include 'config.php';
?>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="assets/dist/aos.css">
  <link rel="stylesheet" href="asset/fonts">
  <link rel="stylesheet" href="asset/dist/aos.css">
  <link rel="stylesheet" href="asset/css/animate.css">
  <link rel="stylesheet" href="asset/css/effect.css">
  <script src="asset/js/smooth.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="background:url(asset/img/banner-bg.jpg); background-size:cover;background-attachment: fixed;">
  <nav class="navbar-fixed-top" id="header">
    <a class="list-1 js-scroll-trigger" href="#">Beranda</a>
    <a class="list-1 "href="#tentang">Tentang</a>
    <a class="list-1" href="#prestasi">Prestasi</a>
    <a class="list-1" href="#galeri">Galeri</a>
    <a class="list-1" href="#contact">Kontak</a>
  </nav>
  <div class="intro">
    <div class="intro-first">
      <div class="animated fadeUp"><b>Selamat Datang!</div>
        <div class="intro-second" >
          <div class="animated fadeDown">It's Nice To Meet You</b></div>
      </div>
   </div>
   <center>
    <a href="#tentang">
      <button class="btn btn-info btn-lg " id="button">
      <span>Tell Me More</span>
      </button>
    </a>
  </center>
  </div>
  <div class="about-me" id="tentang">
    <div class="penulis-tentang">
      <h1 style="margin-bottom: 0!important;"><b>Tentang Penulis</b></h1>
      <div>
        <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp What I am all about</span>
      </div>
    </div>
    <img src="asset/img/11.jpg" class="my-picture" width="230px" height="230px">
    <div style="text-align: center; position: absolute; left: 15%">
      <h3><b>Dwi Novita Sari</b></h3>
      <span>Pelajar</span>
    </div>
    <div style="display:inline- block; position: absolute; top: 195%; left: 17%; ">
      <i class="fa fa-facebook fa-lg" id="fa-fa"></i>
      <i class="fa fa-instagram fa-lg" id="fa-fa"></i>
      <i class="fa fa-twitter fa-lg" id="fa-fa"></i>
    </div>
  </div>
  <div class="full-about">
    Assalamualaikum, hai! perkenalkan nama saya Dwi Novita Sari, saya kelas XI dan mengambil jurusan Rekayasa Perangkat Lunak
    (RPL) di SMKN 1 Purwosari. <br><br> Bicara soal sekolahan, saya masuk SMK dan mengambil jurusan Teknik Informatika
    (TI) bukan karena orang tua atau dorongan siapapun melainkan keinginan sendiri , kenapa ? karena agar saya tidak GAPTEK
    (Gagap Teknologi) yang sudah semakin canggih dari zaman ke zaman . <br><br> Web ini saya buat dalam rangka memenuhi tugas
    untuk prakerin. Alhamdulillah dengan adanya tugas ini saya juga mendapat ilmu baru, jadi sambil mengerjakan sambil menimba
    ilmu . Mau tahu lebih lanjut ? Klik tombol di bawah!
  </div>
  <div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal" style="position: absolute; top: 185%; left: 40%;">Click Me</button>

    <!-- Modal -->
    <div class="modal fade" id="Modal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tentang Saya</h4>
          </div>
          <div class="modal-body">
            <p>Nama : Dwi Novita Sari</p><br>
            <p>TTL : Boyolali, 09 Agustus 2001</p><br>
            <p>Alamat : Sukorejo, Glagahsari Glatik Timur 1</p><br>
            <p>Sekolah : SMKN 1 Purwosari</p><br>
            <p>Jurusan : Rekayasa Perangkat Lunak</p><br>
            <p>Hobby : Menulis & Membaca</p>
          </div>
          <span class="glyphicon glyphicon-globe" style="float: right; font-size: 300px;margin-top: -350px;"></span>
          <div class="modal-footer">
            <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="prestasi" id="prestasi">
    <div style="position: absolute; top: 220%; left: 40%;text-align: center;">
      <h1 style="margin-bottom: 0!important;"><b>PRESTASI</b></h1>
      <span>This achievement is simple <br> &nbsp &nbsp but his special fight <span style="font-size: 25px"class="glyphicon glyphicon-time"></span></span>
    </div>
    <div class="img" style="width: 330px;margin-top: 270px; height: 350px; left: 8%;" >
      <a target="_blank" href="asset/img/f-kti.jpg">
    <img src="asset/img/f-kti.jpg" alt="Trolltunga Norway" width="300" height="200" style="height: auto;">
  </a>
      <div class="desc-1"><b> Sertifikat </b><br> Finalis Lomba Karya Tulis ILmiah</div>
    </div>
    <div class="img" style="width: 330px;margin-top: 270px; height: 350px; right: 8%;">
      <a target="_blank" href="asset/img/j1-a.jpg">
    <img src="asset/img/j1-a.jpg" alt="Trolltunga Norway" width="300" height="200" style="height: auto;">
  </a>
      <div class="desc-1"><b> Sertifikat </b> <br> Peserta Lomba Olimpiade Fisika 1</div>
    </div>
    <div class="img" style="width: 330px;margin-top: 270px; height: 350px; left: 37%;">
      <a target="_blank" href="asset/img/physic1.jpg">
    <img src="asset/img/physic1.jpg" alt="Trolltunga Norway" width="300" height="250px">
  </a>
      <div class="desc-1"><b> Sertifikat </b><br> Juara 1 Lomba Baca Tulis Al-Qur'an</div>
    </div>
    <div class="img" style="width: 270px;margin-top: 650px; height: 310px; left:28%;">
      <a target="_blank" href="asset/img/j1-i.jpg">
    <img src="asset/img/j1-i.jpg" alt="Trolltunga Norway" width="300" height="230px">
  </a>
      <div class="desc-2"><b> Sertifikat </b> <br> Nilai Tertinggi Mapel Bahasa Indonesia</div>
    </div>
    <div class="img" style="width: 270px;margin-top: 650px; height: 310px; right:28%;">
      <a target="_blank" href="asset/img/j1-t.jpg">
    <img src="asset/img/j1-t.jpg" alt="Trolltunga Norway" width="300" height="230px">
  </a>
      <div class="desc-2"><b> Sertifikat </b> <br> Juara 1 Try OUt Sekolah</div>
    </div>
    <div class="img" style="width: 230px;margin-top: 1000px; height: 310px; left:41%;">
      <a target="_blank" href="asset/img/j1-w.jpg">
    <img src="asset/img/j1-w.jpg" alt="Trolltunga Norway" width="300" height="230px">
  </a>
      <div class="desc-2"><b> Sertifikat </b><br> Wisudawati Terbaik</div>
    </div>
    <div class="img" style="width: 230px;margin-top: 1000px; height: 310px; right:20%;">
      <a target="_blank" href="asset/img/j1-7.jpg">
    <img src="asset/img/j1-7.jpg" alt="Trolltunga Norway" width="300" height="230px">
  </a>
      <div class="desc-2"><b> Sertifikat </b> <br> Juara 1 Kelas  VII Semester Genap</div>
    </div>
    <div class="img" style="width: 230px;margin-top: 1000px; height: 310px; left:20%;">
      <a target="_blank" href="asset/img/physic2.jpg">
    <img src="asset/img/physic2.jpg" alt="Trolltunga Norway" width="300" height="230px">
  </a>
      <div class="desc-2"><b> Sertifikat </b><br>Peserta Lomba OLimpiade Fisika 2 </div>
    </div>
  </div>
  <div class="galeri" id="galeri">
    <div style="position: absolute; top: 430%; left: 40%;text-align: center;">
      <h1 style="margin-bottom: 0!important;"><b>GALERI</b></h1>
      <span>This is my work where is your work ?</span>
    </div>
    <div>
      <img src="asset/img/keagungan.jpg" class="poetry-1" width="200px" height="200px" data-toggle="modal" data-target="#poetry-1">
      <!-- Modal -->
      <div class="modal fade" id="poetry-1" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align: center;">Karena-Mu Wahai Tuhanku</h4>
            </div>
            <div class="modal-body">
              <p style="text-align: center;">
                Ku belalakkan mataku <br> Memandang indahnya dunia <br> Melihat setiap orang yang ada <br> Dengan sepasang mata yang kupunya<br>
                Ku dengarkan kata yang berirama <br> Dengan kedua telinga yang kupunya <br> Ku langkahkan kaki <br> Menyusuri teka-teki dunia <br>
                Jikalau secarik puisi ini aku teruskan <br> Seribu lembar kertaspun <br> tak akan menyetujuinya <br> Karema anugrahmu <br> Memang tak terkira <br> Dan berjuta maknanya 
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div style="text-align: center; position: absolute; left: 19%">
      <h4 style="margin-top: 470px;"><b>Karena-Mu <br> Wahai Tuhanku</b></h4>
    </div>
    <div>
      <!-- Trigger the modal with a picture -->
      <img src="asset/img/love.jpg" class="poetry-2" width="200px" height="200px" data-toggle="modal" data-target="#poetry-2">
      <!-- Modal -->
      <div class="modal fade" id="poetry-2" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align: center;">Inikah Cinta</h4>
            </div>
            <div class="modal-body">
              <p style="text-align: center;">
                Inilah kisah remaja <br> Kisah yang penuh canda tawa <br> Diwarnai dengan rasa cinta yang berdebar rasanya <br> 
                Tiap kali kau lirikkan mata <br> Tingkahku jadi tersipu malu <br> Membuatku tenggelam dalam tatapanmu <br> Hingga ku tak sanggup <br>
                meneruskan langkahku <br> Senyum manis dibibirmu <br> Menghiasi malam di tidurku <br> Membuat hari esokku <br> Lebih bermakna dan berwarna <br>
                Inikah kali pertamanya <br> Ku terjatuh dalam lara <br> Lara yang membuatku bahagia <br> Yaitu lara jatuh cinta
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div style="text-align: center; position: absolute; left: 45%">
      <h4 style="margin-top: 480px;"><b>Inikah Cinta</b></h4>
    </div>
    <div>
      <!-- Trigger the modal with a picture -->
      <img src="asset/img/muka-2.jpg" class="poetry-3" width="200px" height="200px" data-toggle="modal" data-target="#poetry-3">
      <!-- Modal -->
      <div class="modal fade" id="poetry-3" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align: center;">Aku lah Si Putih Dan Dia lah Si Merah</h4>
            </div>
            <div class="modal-body">
              <p style="text-align: center">
                Bawang Putih <br> Itulah nama panggilanku <br> Bawang Merah <br> Itulah nama saudara tiriku <br>
               Kehidupanku penuh dengan lika-liku <br> Ditinggal pergi jauh oleh ibu kandungku <br> Dibuat derasan air mata <br>
               Oleh Dia Si Bawang Merah <br> Terlihat manis saat dimuka ayahku <br> dan terlihat pahit di belakang ayahku <br> 
               Sungguh terasa menyakitkan <br> Saat bunga mawar tak mengeluarkan aromanya <br> Justru sebaliknya <br> Ia menunjukkan tajamnya <br>
               duri yang dimilikinya  
               </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div style="text-align: center; position: absolute; left: 67%">
      <h4 style="margin-top: 470px;"><b>Aku lah Si Putih <br> Dia lah Si Merah</b></h4>
    </div>
    <div>
      <a class="like" style="margin-top: 540px; position: absolute; left: 20%;">
        <i class="fa fa-thumbs-o-up"></i>  Like
        <input class="btn-like" name="btn-like" readonly="readonly" type="text" value="0" />
    </a>
    </div>
    <div>
      <a class="like" style="margin-top: 540px; position: absolute; left: 45%;">
        <i class="fa fa-thumbs-o-up"></i>  Like
        <input class="btn-like" name="btn-like" readonly="readonly" type="text" value="0" />
    </a>
    </div>
    <div>
      <a class="like" style="margin-top: 540px; position: absolute; left: 69%;">
        <i class="fa fa-thumbs-o-up"></i>  Like
        <input class="btn-like" name="btn-like" readonly="readonly" type="text" value="0" />
    </a>
    </div>
  </div>
  <div class="contact" id="contact">
    <div class="penulis-contact">
      <h1 style="margin-bottom: 0!important;"><b>Kontak</b></h1>
      <div data-aos="fade-left" data-aos-easing="ease" data-aos-delay="400">
        <span> What do you think about this website ?</span>
      </div>
    </div>
    <form style="position: absolute; top: 550%; left: 10%;" action="tambah.php"" name="formsiswa" method="post">
    <input type="text" class="fname" name="firstname" placeholder="Your Name">
    <input type="text" class="lname" name="lastname" placeholder="Your Email"> 
    <input type="text" class="lname" name="lastname" placeholder="Your Phone">
    <textarea placeholder="Your Comment"></textarea>
</form> 
<button type="button" class="btn btn-info active btn-lg" style="position: absolute; top: 585%; left: 42%;">Kirim Komentar</button>
<div class="ui text container" id="id">
            <h1 class="ui inverted header" style="padding-top:14em; margin-left: 350px;">Thanks for your commend!</h1>
            <?php
                $sql = "SELECT * FROM comment";
                $query = mysqli_query($db,$sql);
                while($comment = mysqli_fetch_array($query)){
           ?>
                <form action="" class="ui form segment" style="color:#1d1c1b;">
                    <div class="field" id="id2">
                      <?php echo $comment['email'];?><br>
                                <?php echo $comment['nama'];?><br>
                                <?php echo $comment['tlp'];?><br>
                                  <?php echo $comment['commend'];?>
                    </div>
                </form>
                

                <?php
                }
                            
                ?>

        </div>
  </div>
  


  <script>
    AOS.init();
  </script>
  <script src="asset/js/jquery.easing.min.js"></script>
  <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/dist/aos.js"></script>
</body>

</html>