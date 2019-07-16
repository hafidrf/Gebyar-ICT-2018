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
            <img class="img-fluid" src="assets/landing/assets/CDC.png" alt="Lomba Start Up, Memecahkan masalah, ngoding, Event Malang, koding, informatika">
          </div>
          <div class="timeline">
            <p class="event-title text-center text-bold mt-4">CDC (Creative Development Competition)</p>
            <p class="event-disc text-center text-bold mt-2">Jadwal</p>
            <ul class="event-schedule ">
              <li class="row">
                <div class="col-2">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="col-10">
                  <p class="text-bold title">1 Agustus 2018 - 30 September 2018</p>
                  <p class="desc">Pendaftaran Peserta.</p>
                </div>
              </li>
              <li class="row">
                <div class="col-2">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="col-10">
                  <p class="text-bold title">1 Oktober 2018 - 14 Oktober 2018</p>
                  <p class="desc">Pengumpulan Proposal, Aplikasi dan Video.</p>
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
                  <p class="desc">Presentasi Finalis dan Pengumuman Juara.</p>
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
              CDC (Creative Development Competition) adalah salah satu lomba dari rangkaian acara ICT 2018 yang diselenggarakan oleh jurusan Teknik Informatika UIN Malang. Disini peserta difokuskan untuk membuat aplikasi berupa Web apps / Mobile apps yang bermanfaat sekaligus bernilai bisnis
              <br><br>
              <b>Tema : "Ekonomi, Sosial dan Budaya"</b>
              <br><br>
              Fasilitas Peserta : Sertifikat, Trophy, uang
              <br><br>
              Hadiah:
              <ul>
                <li>Juara 1 mendapatkan sertifikat, trophy dan uang sebesar Rp.2.000.000</li>
                <li>Juara 2 mendapatkan sertifikat, trophy, dan uang sebesar Rp.1.500.000</li>
                <li>Juara 3 mendapatkan sertifikat, trophy, dan uang sebesar Rp.1.000.000</li>
              </ul>
              
              
            </p>
          </div>  

          <div class="paragraph">
            <h2 class="title">Syarat dan Ketentuan</h2>
            <p class="content">
              Ketentuan Proposal
              <br>
              <ol>
                <li>Proposal aplikasi merupakan ide orisinil dan bebas dari penyalahgunaan hak kekayaan intelektual</li>
                <li>Proposal aplikasi belum pernah menjuarai dalam kompetisi apapun</li>
                <li>Proposal aplikasi harus sesuai dengan tema yang telah ditentukan yaitu “Ekonomi, Sosial dan Budaya”</li>
                <li>Segala bentuk plagiarisme akan menyebabkan peserta didiskualifikasi</li>
                <li>Aplikasi dapat berbentuk website, desktop ataupun mobile</li>
                <li>Peraturan dapat berubah sewaktu waktu jika diperlukan</li>
              </ol>
              <br>
          Ketentuan Video 
              <ol>
                <li>Video dapat direkam dengan menggunakan screen recorder atau dapat menggunakan kamera</li>
                <li>Video mempertunjukkan penggunaan dan semua fitur aplikasi secara jelas dan singkat</li>
                <li>Video dapat di unggah melalui youtube ataupun platform upload video lainnya </li>
                <li>Video dibuat semenarik mungkin </li>
              </ol>
            </p>
          </div>  
          
          <div class="paragraph">
            <h2 class="title">Pendaftaran</h2>
            <p class="content">
              Biaya : <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• Biaya pendaftaran akan dikenakan sebesar Rp.50.000/Tim <br><br>
              Periode :<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;• 1 Agustus 2018 - 30 September 2018<br><br>

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
                  &nbsp;&nbsp;&nbsp;&nbsp;• Setelah dikonfirmasi maka peserta sudah resmi terdaftar sebagai peserta lomba CDC (Creative Development Competition) Gebyar ICT 2018 dan dapat mengunggah hasil karya.<br><br>
              <b>Contact Person :</b><br>
              • Nuzulul Huda <br>
              &nbsp;&nbsp;&nbsp;HP : 0812-2583-8953 (WA)<br>
              &nbsp;&nbsp;&nbsp;IG : @nuzululhuda_<br><br>
              • Alfionita <br>
              &nbsp;&nbsp;&nbsp;HP : 0896-7645-1887 (WA)<br>
              &nbsp;&nbsp;&nbsp;Line: Alfionitass<br>
              &nbsp;&nbsp;&nbsp;IG : @alfionitas<br>
            </p>
          </div>  

          <div class="paragraph">
            <h2 class="title">Pengumpulan Karya</h2>
            <p class="content">
              Proposal <br>
              URL proposal ide dikirim melalui website <a href="http://ict2018.himatif-encoder.or.id">ict2018.himatif-encoder.or.id</a> Format proposal dalam bentuk pdf dengan nama file: 
              [CDC]_[Nama Tim]_[Nama Produk].pdf <br>
              Contoh : CDC _TimX_ AplikasiX.pdf<br><br>
              Video Demo<br>
              Video di upload di Youtube dengan ketentuan dengan format judul :<br>
              [Gebyar ICT 2018] (spasi) [Nama TIM] (spasi) [Nama Aplikasi]<br>
              Contoh : Gebyar ICT 2018  TimX  AplikasiX<br>
              URL video demo aplikasi disubmit ke website <a href="http://ict2018.himatif-encoder.or.id">ict2018.himatif-encoder.or.id</a><br><br>
              Aplikasi/Prototype<br>
              Aplikasi jadi/protype yang dikirim diunggah ke Google Drive pribadi yang kemudian linknya dikirim ke website <a href="http://ict2018.himatif-encoder.or.id">ict2018.himatif-encoder.or.id</a> dengan nama folder : <br>
              Nama_tim(spasi)Nama_aplikasi<br>
              Folder yang akan di kirimkan harus di zip terlebih dahulu. Yang harus ada dalam folder zip tersebut adalah :<br>
                  • File Aplikasi<br>
                  • Tutorial singkat aplikasi (format .txt .doc atau .docx)<br>
                  • Screenshoot aplikasi<br>
                  • Deskripsi singkat aplikasi, target device yang akan dipakai untuk aplikasi dan URL video demo apps (format .txt .doc atau .docx)<br>
            </p>
          </div>  

          <div class="paragraph">
            <h2 class="title">Kriteria Penilaian</h2>
            <p class="content">
              Penilaian Berdasar 
              <ol>
                <li>Nilai bisnis</li>
                <li>Teknologi yang digunakan</li>
                <li>User Interface</li>
              </ol>
            </p>
          </div>  

          <div class="paragraph">
            <h2 class="title">F.A.Q</h2>
            <p class="content">
              <ol>
                <li>Apakah pembuatan aplikasi dilakukan saat lomba berlangsung ? Tidak, pembuatan aplikasi di buat sebelum lomba berlangsung, saat lomba berlangsung hanya presentasi dan penjurian</li>
                <li>Dapatkah saya mendaftar secara individu jika tidak memiliki tim ? Iya, peserta diperbolehkan tim yang maksimal berjumlah 3 orang ataupun perseorangan</li>
                <li>Apa saja yang harus saya bawa saat pelaksanaan lomba ? Anda membawa laptop dan juga keperluan tambahan yang di butuhkan untuk mendukung kebutuhan presentasi aplikasi anda</li>
                <li>Siapa pemilik solusi (Intelectual Property) setelah lomba selesai? Peserta akan sepenuhnya memiliki ide / produk setelah lomba selesai </li>
              </ol>
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