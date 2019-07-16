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
            <img class="img-fluid" src="assets/landing/assets/Cinema.png" alt="Lomba Start Up, Memecahkan masalah, ngoding, Event Malang, koding, informatika">
          </div>
          <div class="timeline">
            <p class="event-title text-center text-bold mt-4">Cinematography</p>
            <p class="event-disc text-center text-bold mt-2">Jadwal</p>
            <ul class="event-schedule ">
              <li class="row">
                <div class="col-2">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="col-10">
                  <p class="text-bold title">1 Agustus 2018 - 10 Oktober 2018</p>
                  <p class="desc">Pendaftaran dan Submit Judul.</p>
                </div>
              </li>
              <li class="row">
                <div class="col-2">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="col-10">
                  <p class="text-bold title">1 Agustus 2018 - 14 Oktober 2018</p>
                  <p class="desc">Pengiriman Karya.</p>
                </div>
              </li>
              <li class="row">
                <div class="col-2">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="col-10">
                  <p class="text-bold title">18 Oktober 2018</p>
                  <p class="desc">Pengumuman Finalis.</p>
                </div>
              </li>
              <li class="row">
                <div class="col-2">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="col-10">
                  <p class="text-bold title">21 Oktober 2018</p>
                  <p class="desc">Screening Film dan Pengumuman Juara.</p>
                </div>
              </li>
              
            </ul>
          <a href="{{ base_url('registrasi') }}" class="btn btn-primary block join-in-btn">JOIN IN</a>
          <video width="320" height="240" controls autoplay>
			<source src="assets/SignatureICT2018.mp4" type="video/mp4">
			<source src="movie.ogg" type="video/ogg">
			Signature ICT 2018
		  </video>
          </div>
        </div>
        <div class="col-md-8 col-xs-12" :class="{'mt-5':isMobile}">
          <div class="paragraph">
            <h2 class="title">Deskripsi</h2>
            <p class="content">
              Cinematography competition adalah salah satu lomba dari rangkaian acara ICT 2018 yang diselenggarakan oleh jurusan Teknik Informatika UIN Malang. Disini peserta difokuskan untuk mengasah kerjasama antar tim dan kekreatifan dalam membuat suatu film yang memiliki makna yang bisa tersampaikan kepada penonton
              <br><br>
              <b>Tema : "Teknologi sebagai Penjaga Budaya"</b>
              <br><br>
              Fasilitas Peserta : Sertifikat, Trophy, uang
              <br><br>
              Hadiah:
              <ul>
                <li>Juara 1 mendapatkan sertifikat, trophy dan uang sebesar Rp.2.000.000</li>
                <li>Juara Favorit mendapatkan sertifikat, trophy, dan uang sebesar Rp.750.000</li>
              </ul>
              
              
            </p>
          </div>  

          <div class="paragraph">
            <h2 class="title">Syarat dan Ketentuan</h2>
            <p class="content">
              <ol>
                <li>Peserta adalah Pelajar (SMP & SMA/Sederajat), Mahasiswa (D3 & S1/ Sederajat) dan Masyarakat umum</li>
                <li>Durasi film maksimal 10 menit, minimal 3 menit. termasuk credit tittle.</li>
                <li>Film tidak pernah diikutkan pada lomba-lomba yang lain.</li>
                <li>Film tidak berupa profil lembaga/perusahaan yang bersifat promosi, iklan layanan masyarakat, trailer film, video music dan film animasi.</li>
                <li>Wajib menggunakan subtittle dengan menggunakan bahasa Indonesia serta bisa dibaca dengan jelas bagi film yang menggunakan bahasa lokal dan asing atau menggunakan bahasa daerah.</li>
                <li>Penggunaan bahan dalam film yang berasal dari pihak lain seperti music latar, footage, potongan gambar dan foto dari media offline maupun online (youtube) wajib menyertakan surat izin khusus dari pihak terkait. Bilamana tidak terdapat adanya surat izin resmi maka otomatis dinyatakan gugur / didiskualifikasi</li>
                <li>Karya yang dikirim akan menjadi file ICT Cinematography.</li>
                <li>Hasil karya dikumpulkan paling lambat  cap pos. (Untuk pengiriman karya secara offline)</li>
                <li>Film yang telah dikirimkan tidak boleh direvisi.</li>
                <li>Formulir pendaftaran dapat diunduh atau diisi di <a href="http://ict2018.himatif-encoder.or.id">ict2018.himatif-encoder.or.id</a></li>
                <li>Keputusan juri tidak dapat diganggu gugat</li>
                <li>Film peserta yang lolos akan diumumkan melalui website dan e-mail.</li>
                <li>Membuat Trailer + Poster + Behind the Scene dari Film yang akan dikumpulkan</li>
              </ol>
              <br>
          Ketentuan Video <br>
                  (1) Video Format: MP4 <br>
                  (2) Video Codec; H.264, AVI  <br>
                  Video size (boleh pilih); <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;– 720p; 1280X720 (HD) <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;– 480p; 854X480 (SD) <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;– 360p; 640X360 (SD) <br>
                  Frame rate; 24 fps <br>
                  Bitrate; <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;– Video bitrate: 480p 2.5 Mbps atau 360p 1 Mbps <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;o Audio bitrate: Stereo 384 Kbps <br>
                Chanels: Stereo <br>
              <br><br>
              Keterangan;<br>
              Film dibuat dengan memanfaatkan teknologi digital dengan ketentuan hasil akhir berbentuk data dengan alternatif format: Mpeg 4 (Mp 4), Image size: 1920×1080 HD, 1280×720 HD, 24 Fps, Audio: Rate 48000 khz size 16 bit, dengan Aspec Ratio: 16:9.
              <br><br>
                Kerangka Isi Karya Film (Kerangka Program) <br>
                (1) Starting: Logo Template ICT 2018 <br> 
                Berikut file templatenya <a href="<?php echo base_url().'download/lakukan_download' ?>"> Download file</a><br>
                (2) Opening: Main Title <br>
                (3) Content (Isi Film) <br>
                (4) Ending: Fade Out <br>
                (5) Closing: <br>
                Credit Title (Nama Pemain dan Tim Produksi) <br>
                Ucapan Terimakasih/Dedikasi <br>
                Imposing Copyright ICT 2018  <br>
                Blank
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
                  <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bank BCA 8935014596 an: Hafid Rizqifaluthi <br>-->
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bank BRI 3183-01-031108-53-9 an :Iffatul Izzah <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• Unggah bukti transfer (membayar melalui bank) atau upload scan kwitansi ketika pembayaran dengan COD. <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• Setelah dikonfirmasi maka peserta sudah resmi terdaftar sebagai peserta lomba Cinematography Gebyar ICT 2018 dan dapat mengunggah hasil karya.<br><br>
              <b>Contact Person :</b><br>
              Ardito Wahyu P<br>
              HP : 0815-3333-5178 (WA)<br>
              Line : @arditowp<br>
              IG : @arditowp<br>
            </p>
          </div>  

          <div class="paragraph">
            <h2 class="title">Pengumpulan Karya</h2>
            <p class="content">
              Hasil karya diletakkan kedalam Google Drive pribadi dan Youtube (untuk video). Kemudian setiap tim mengirimkan link tersebut melalui website <a href="http://ict2018.himatif-encoder.or.id">ict2018.himatif-encoder.or.id</a> diakun masing-masing tim. <b>Jika terdapat</b> Trailer + Poster + Behind the Scene diupload di instagram anda masing-masing lalu ditag ke <a href="https://www.instagram.com/ict_encoder/">@ict_encoder</a> 
            </p>
          </div>  

          <div class="paragraph">
            <h2 class="title">Kriteria Penilaian</h2>
            <p class="content">
              Penilaian Berdasar 
              <ol>
                <li>Originalitas ide</li>
                <li>Pesan yang disampaikan melalui Film</li>
                <li>Penggambaran visual suatu scene</li>
              </ol>
            </p>
          </div>  

          <div class="paragraph">
            <h2 class="title">F.A.Q</h2>
            <p class="content">
              <ul>
                <li>Q : Gimana tahapannya kak?</li>
                <li>A : Ada 2 tahap, yaitu saat proses pembuatan film dan dikumpulkan. Dan tahap terakhir adalah finalis yang terpilih akan berkumpul untuk Screening dan pengumuman pemenang</li>
                <li>Q : Tempat Final dimana?</li>
                <li>A : Dilo Malang</li>
                <li>Q : Umum ga kak? </li>
                <li>A : Untuk umum banget, disini dicari creator-kreator muda berbakat dari berbagai daerah</li>
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