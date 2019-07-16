<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
  <title>ICT - Himpunan Mahasiswa Jurusan Teknik Informatika UIN Maulana Malik Ibrahim Malang</title>
  <link rel="icon shortcut" href="assets/landing/assets/ict_logo_Images/ict_logo_ImgID1.png">
  <link rel="preload" href="assets/landing/css/style.css" as="style">
  <link rel="preload" href="assets/landing/css/bootstrap.min.css" as="style">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="stylesheet" rel="preload">
  <link rel="stylesheet" href="assets/landing/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/landing/css/style.css">
</head>

<body class="special">
  <div id="app">
    <nav @click.stop class="navbar-panel scrolled">
      <div class="container">
        <div class="mini-nav" v-if="isMobile">
          <i @click.stop="navbar.show = !navbar.show" class="fa fa-bars"></i>
        </div>
        <ul ref="link-wrapper" class="link-wrapper" :style="{height:isMobile?trigger:scrollHeight}">
          <li class="link-item">
            <a href="<?= base_url();?>">HOME</a>
          </li>
          <li class="link-item" :style="{margin:isMobile?'0':'null'}">
            <a href="<?= base_url('login');?>" :style="{display:isMobile?'block':'inline-block'}" class="btn btn-warning btn-login">LOG IN</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <section class="event-page container">
      <div class="row">
        <div class="col-md-4 col-xs-12">
          <div class="logo-wrapper">
            <img class="img-fluid" src="assets/landing/assets/drone.png" alt="Lomba Start Up, Memecahkan masalah, ngoding, Event Malang, koding, informatika">
          </div>
          <div class="timeline">
            <p class="event-title text-center text-bold mt-4">Micro Drone Race</p>
            <p class="event-disc text-center text-bold mt-2">Jadwal</p>
            <ul class="event-schedule ">
              <li class="row">
                <div class="col-2">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="col-10">
                  <p class="text-bold title">1 Agustus 2018 - 10 Oktober 2018</p>
                  <p class="desc">Pendaftaran Peserta.</p>
                </div>
              </li>
              <li class="row">
                <div class="col-2">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="col-10">
                  <p class="text-bold title">12 Oktober 2018</p>
                  <p class="desc">Technical Meeting.</p>
                </div>
              </li>
              <li class="row">
                <div class="col-2">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="col-10">
                  <p class="text-bold title">14 Oktober 2018</p>
                  <p class="desc">Pelaksanaan Lomba.</p>
                </div>
              </li>
              
            </ul>
          <a href="{{ base_url('registrasi') }}" class="btn btn-primary block join-in-btn">JOIN IN</a>
          </div>
        </div>
        <div class="col-md-8 col-xs-12" :class="{'mt-5':isMobile}">
          <div class="paragraph">
            <h2 class="title">Deskripsi</h2>
            <p class="content">
              Mikro Drone race competition merupakan lomba bagian dari event ICT 2018 yang diselenggarakan oleh Teknik Informatika UIN Malang. Yang mana pada lomba Drone ini peserta dibuka untuk umum dan para peserta dituntut untuk adu wahana serta skill yang dimiliki. Sekaligus menjadi daya tarik bagi warga milenial menyaksikan salah satu kemajuan teknologi wahana terbang.
              <br><br>
              Fasilitas Peserta : Sertifikat, Trophy, uang
              <br><br>
              Hadiah:
              <ul>
                <li>Juara 1 mendapatkan sertifikat, trophy dan uang sebesar Rp.1.000.000</li>
                <li>Juara 2 mendapatkan sertifikat, trophy dan uang sebesar Rp.750.000</li>
                <li>Juara 3 mendapatkan sertifikat, trophy dan uang sebesar Rp.500.000</li>
              </ul>
              
              
            </p>
          </div>  

          <div class="paragraph">
            <h2 class="title">Syarat dan Ketentuan</h2>
            <p class="content">
              <ol>
                <li>Peserta adalah Masyarakat umum.</li>
                <li>Semua Peserta dapat mengikuti kontes secara penuh selama hari pelaksanaan lomba.</li>
                <li>Setiap tim terdiri dari 1-2 orang.</li>
                <li>Panitia tidak bertanggung jawab atas kerusakan dan/atau berkurangnya kemampuan drone sebelum, saat, dan setelah lomba berlangsung.</li>
                <li>Peserta tidak boleh mengganti dan/atau memodifikasi wahana setelah validasi/cek dimensi oleh panitia.</li>
                <li>Peserta dilarang melakukan kecurangan dalam bentuk apapun.</li>
                <li>Peserta dilarang melakukan penghinaan secara langsung maupun tidak langsung kepada panitia dan dewan juri pelaksana lomba.</li>
                <li>Peserta dilarang melakukan penghinaan secara langsung maupun tidak langsung kepada panitia dan dewan juri pelaksana lomba.</li>
                <li>Memakai pakaian bebas, sopan, dan bersepatu.</li>
                <li>Peserta menggunakan ID Card Peserta saat kontes berlangsung.</li>
                <li>Peserta mematuhi segala peraturan yang berlaku.</li>
                <li>Panitia berhak merubah, menambah, dan mengganti peraturan dan informasi yang ada.</li>
                <li>Keputusan panitia dan dewan juri mutlak dan tidak dapat diganggu gugat.</li>
              </ol>
              <br>
          <b>Ketentuan Wahana</b> <br>
              <ol>
                <li>Dimensi Wahana frame under 100mm (Micro Drone).</li>
                <li>Propeller (baling baling) bilah 2/3/4.</li>
                <li>Motor brushed.</li>
                <li>Vtx = 25watt race band.</li>
                <li>Wajib FPV.</li>
              </ol>
              <b>Ketentuan Frekuensi</b> <br>
              <ol>
                <li>Frekuensi Drone 2.4Ghz.</li>
                <li>Frekuensi FPV 2.4/5.8Ghz.</li>
              </ol>
            </p>
          </div>  
          
          <div class="paragraph">
            <h2 class="title">Pendaftaran</h2>
            <p class="content">
              Biaya : <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• Biaya pendaftaran akan dikenakan sebesar Rp.50.000/Tim <br><br>
              Periode :<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• 1 Agustus 2018 - 10 Oktober 2018<br><br>

              Syarat Pendaftaran : <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• Menentukan nama tim, ketua tim, dan anggota tim<br><br>
                  <!--&nbsp;&nbsp;&nbsp;&nbsp;• Mempersiapkan :<br><br>-->

              Mekanisme Pendaftaran :<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• Peserta melakukan pendaftaran di <a href="http://ict2018.himatif-encoder.or.id">ict2018.himatif-encoder.or.id</a><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• Peserta mengisi form registrasi yang tersedia dengan data yang sebenarnya-benarnya dan memverifikasi email.<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• Peserta melakukan pembayaran sebesar Rp 50.000 di transfer ke nomor rekening : <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bank BRI 3183-01-031108-53-9 an :Iffatul Izzah <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• Unggah bukti transfer (membayar melalui bank) atau upload scan kwitansi ketika pembayaran dengan COD. <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• Setelah dikonfirmasi maka peserta sudah resmi terdaftar sebagai peserta lomba Mikro Drone Race Gebyar ICT 2018.<br><br>
              <b>Contact Person :</b><br>
              Hafid Ahmad Fahmianto<br>
              HP : 081234266486 (WA)<br>
              Line : @hafidd_ahmad<br>
              IG : @hafidd_ahmad<br><br>
              Ahmad Rotibul Fadloil Abash<br>
			  Hp: 085745975044 (wa)<br>
			  Line: rotib_abash<br>
			  Ig: rotib_abash<br>
            </p>
          </div>  
          <div class="paragraph">
            <h2 class="title">F.A.Q</h2>
            <p class="content">
              <ul>
                <li>Q : Kak apakah Drone sudah dirakit dari rumah?</li>
                <li>A : Benar, Wahana yang dibawa dan siap dikarantina(seleksi dimensi) harus sudah siap.</li>
                <li>Q : Kak apakah boleh memakai FPV?</li>
                <li>A : Wajib kak, ketentuannya harus menggunakan FPV.</li>
                <li>Q : Kak apakah dari panitia menyediakan Drone yang boleh dipinjam/dibeli? </li>
                <li>A : Mohon maaf, panitia tidak menyediakan. Jadi mohon calon peserta bisa merakit sebelum hari dimana kompetisi berlangsung.</li>
                <li>Q : Kak mau daftar dong, lihat rulenya dimana?</li>
                <li>A : visit <a href="http://ict2018.himatif-encoder.or.id">ict2018.himatif-encoder.or.id</a></li>
              </ul>
            </p>
          </div>  

        </div>
      </div>
    </section>

  <?php 
    $url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($url, 'localhost') !== false) {
      echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>';
    }else{
      echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js"></script>';
    }
  ?>
  <script src="assets/landing/js/main.js"></script>
</body>

</html>