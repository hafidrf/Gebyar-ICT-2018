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

<body>
  <div id="app">
    <nav @click.stop class="navbar-panel " :class="{scrolled:navbar.scrolled,show:navbar.show}">
      <div class="container">
        <div class="mini-nav" v-if="isMobile">
          <i @click.stop="navbar.show = !navbar.show" class="fa fa-bars"></i>
        </div>
        <ul ref="link-wrapper" class="link-wrapper" :style="{height:isMobile?trigger:scrollHeight}">
          <li class="link-item">
            <a @click.prevent="hashLink('#home')" href="#home">HOME</a>
          </li>
          <li class="link-item">
            <a @click.prevent="hashLink('#events')" href="#events">EVENTS</a>
          </li>
          <li class="link-item">
            <a @click.prevent="hashLink('#gallery')" href="#gallery">GALLERY</a>
          </li>
          <li class="link-item">
            <a @click.prevent="hashLink('#contact')" href="#contact">CONTACT</a>
          </li>
          <li class="link-item" :style="{margin:isMobile?'0':'null'}">
            <a href="./login" :style="{display:isMobile?'block':'inline-block'}" class="btn btn-warning btn-login">LOG IN</a>
          </li>
        </ul>
      </div>
    </nav>
    <header class="hero" id="home">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <img src="assets/landing/assets/ict_logo_Images/ict_logo_ImgID1.png" class="hero-img" alt="ICT 2018, Lomba IT ICT Malang, Ngoding, Event Malang, Drone, Start up, Hackathon">
          </div>
          <div class="col-md-6 col-xs-12">
            <h1 class="title">ENJOY THIS EVENT</h1>
            <p class="desc">Get in touch with us now</p>
            <a href="{{ base_url('registrasi') }}" class="mt-2 btn btn-primary text-uppercase">Enroll Your Team</a>
          </div>
        </div>
        <div class="sponsor-wrapper text-center mb-5">
          <p class="sponsor-title">Sponsored by</p>
          <div><img src="assets/sponsor/telkom_indonesia.jpg" style="width: 300px;height: 300px;object-fit: contain;" alt="Telkom Indonesia"></div>
          <img src="assets/sponsor/mbois.jpg" class="syariah-sponsor" alt="Konveksi kaos malang">
          <img src="assets/sponsor/osb.jpg" class="syariah-sponsor" alt="Mikrodrone">
          <img src="assets/syariahrooms.jpg" class="syariah-sponsor" alt="syariah rooms, penginapan syariah malang, penginapan syariah uin malang, hotel malang, hotel dan lomba malang">
          <img src="assets/sponsor/mulmed.jpg" class="syariah-sponsor" alt="Komunitas Research">
          <img src="assets/sponsor/kak ros.jpg" class="syariah-sponsor" alt="Geprek ayam kak rose">
        </div>
      </div>
    </header>
    <section class="event bg-icon" class="events" id="events">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="section-title mb-2">EVENTS</h2>
          <p class="section-desc">Here is our whole events that we had</p>
        </div>
        <div class="row single-event-wrapper">
          <div class="col-md-4 col-xs-12 single-event">
            <div v-if="eventSelected === 'drone'" @click="eventSelected=null" class="close-btn">&times;</div>
            <div class="img-container">
              <img class="single-img" src="assets/landing/assets/drone.png" alt="Lomba Drone Racing, Balapan Drone, Event Malang">
            </div>
            <h1 class="event-title text-center">MICRO DRONE RACE</h1>
            <div class="event-schedule-container">
              <transition name="fade" mode="out-in">
                <p key="1" v-if="eventSelected !== 'drone'" class="event-desc mt-3">
                  Drone race competition merupakan lomba bagian dari event ICT 2018 yang diselenggarakan oleh Teknik Informatika UIN Malang. Yang mana pada lomba Drone ini peserta dibuka untuk umum dan para peserta dituntut untuk adu wahana serta skill yang dimiliki. Sekaligus menjadi daya tarik bagi warga milenial menyaksikan salah satu kemajuan teknologi wahana terbang
                </p>
                <div key="2" class="" v-else>
                  <p class="event-disc text-center">Jadwal untuk event ini</p>
                  <ul class="event-schedule">
                    <li class="row">
                      <div class="col-2">
                        <i class="fa fa-apple"></i>
                      </div>
                      <div class="col-10">
                        <p class="text-bold title">1 Agustus 2018 - 10 Oktober 2018</p>
                        <p class="desc">Pendaftaran.</p>
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
                </div>
              </transition>
            </div>
            <div class="action-wrapper row" v-if="eventSelected !== 'mikrodrone'">
              <a href="{{ base_url('mikrodrone') }}" class="btn btn-primary">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-xs-12 single-event">
            <div v-if="eventSelected === 'cdc'" @click="eventSelected=null" class="close-btn">&times;</div>
            <div class="img-container">
              <img class="single-img" src="assets/landing/assets/CDC.png" alt="Lomba Start Up, Memecahkan masalah, ngoding, Event Malang">
            </div>
            <h1 class="event-title text-center">CDC</h1>
            <div class="event-schedule-container">
              <transition name="fade" mode="out-in">
                <p key="1" v-if="eventSelected !== 'cdc'" class="event-desc mt-3">
                  CDC (Creative Development Competition) adalah salah satu lomba dari rangkaian acara ICT 2018 yang diselenggarakan oleh jurusan Teknik Informatika UIN Malang. Disini peserta difokuskan untuk membuat aplikasi berupa Web apps / Mobile apps yang bermanfaat sekaligus bernilai bisnis
                </p>
                <div key="2" v-else>
                  <p class="event-disc text-center">Jadwal untuk event ini</p>
                  <ul class="event-schedule">
                    <li class="row">
                      <div class="col-2">
                        <i class="fa fa-apple"></i>
                      </div>
                      <div class="col-10">
                        <p class="text-bold title">1 Agustus 2018 - 15 September 2018</p>
                        <p class="desc">Pendaftaran dan Submit Judul.</p>
                      </div>
                    </li>
                    <li class="row">
                      <div class="col-2">
                        <i class="fa fa-apple"></i>
                      </div>
                      <div class="col-10">
                        <p class="text-bold title">17 September 2018</p>
                        <p class="desc">Pengumuman Lolos Seleksi.</p>
                      </div>
                    </li>
                    <li class="row">
                      <div class="col-2">
                        <i class="fa fa-apple"></i>
                      </div>
                      <div class="col-10">
                        <p class="text-bold title">18 September 2018 - 15 Oktober 2018</p>
                        <p class="desc">Pengiriman Aplikasi.</p>
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
                        <p class="desc">Presentasi Finalis.</p>
                      </div>
                    </li>
                    
                  </ul>
                </div>
              </transition>
            </div>
            <div class="action-wrapper row" v-if="eventSelected !== 'cdc'">
              <a href="{{ base_url('cdc') }}" class="btn btn-primary">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-xs-12 single-event">
            <div v-if="eventSelected === 'cinema'" @click="eventSelected=null" class="close-btn">&times;</div>
            <div class="img-container">
              <img class="single-img" src="assets/landing/assets/Cinema.png" alt="Lomba Drone Racing, Balapan Drone, Event Malang">
            </div>
            <h1 class="event-title text-center">CINEMATOGRAPHY</h1>
            <div class="event-schedule-container">
              <transition name="fade" mode="out-in">
                <p key="1" v-if="eventSelected !== 'cinema'" class="event-desc mt-3">
                  Cinematography competition adalah salah satu lomba dari rangkaian acara ICT 2018 yang diselenggarakan oleh jurusan Teknik Informatika UIN Malang. Disini peserta difokuskan untuk mengasah kerjasama antar tim dan kekreatifan dalam membuat suatu film yang memiliki makna yang bisa tersampaikan kepada penonton
                </p>
                <div key="2" v-else>
                  <p class="event-disc text-center">Jadwal untuk event ini</p>
                  <ul class="event-schedule">
                    <li class="row">
                      <div class="col-2">
                        <i class="fa fa-apple"></i>
                      </div>
                      <div class="col-10">
                        <p class="text-bold title">1 Agustus 2018 - 15 September 2018</p>
                        <p class="desc">Pendaftaran dan submit judul.</p>
                      </div>
                    </li>
                    <li class="row">
                      <div class="col-2">
                        <i class="fa fa-apple"></i>
                      </div>
                      <div class="col-10">
                        <p class="text-bold title">16 September 2018 - 16 Oktober 2018</p>
                        <p class="desc">Pengumpulan hasil karya.</p>
                      </div>
                    </li>
                    <li class="row">
                      <div class="col-2">
                        <i class="fa fa-apple"></i>
                      </div>
                      <div class="col-10">
                        <p class="text-bold title">17 September 2018 - 17 Oktober 2018</p>
                        <p class="desc">Tahap seleksi.</p>
                      </div>
                    </li>
                    <li class="row">
                      <div class="col-2">
                        <i class="fa fa-apple"></i>
                      </div>
                      <div class="col-10">
                        <p class="text-bold title">21 Oktober</p>
                        <p class="desc">Pengumuman juara.</p>
                      </div>
                    </li>
                   
                  </ul>
                </div>
              </transition>
            </div>
            <div class="action-wrapper row" v-if="eventSelected !== 'cinema'">
              <a href="{{ base_url('cinema') }}" class="btn btn-primary">READ MORE</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="media-partner">
      <div class="container py-2">
        <h2 class="section-title">MEDIA PARTNER</h2>
        <div class="text-center">
          <div class="upper mt-4">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/acaramahasiswa_Images/acaramahasiswa_ImgID1.png" alt="Acara Malang">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/acaramalang_Images/acaramalang_ImgID1.png" alt="Acara Mahasiswa">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/infokost_Images/infokost_ImgID1.png" alt="infokost">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/inipolinema_Images/inipolinema_ImgID1.png" alt="inipolinema">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/kampus_malang_Images/kampus_malang_ImgID1.png" alt="kampus_malang">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/mampus_Images/mampus_ImgID1.png" alt="mampus">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/mhs_mlg_Images/mhs_mlg_ImgID1.png" alt="mhs_mlg">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/mhs_polinema_Images/mhs_polinema_ImgID1.png" alt="mhs_polinema">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/mhs_ub_Images/mhs_ub_ImgID1.png" alt="mhs_ub">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/siswa_malang_Images/siswa_malang_ImgID1.png" alt="siswa_malang">
          </div>
          <div class="mt-3">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/bukadulu_Images/bukadulu_ImgID1.png" alt="buka dulu">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/acaramedia_Images/acaramedia_ImgID1.png" alt="acara media">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/kost_mlg_Images/kost_mlg_ImgID1.png" alt="kost malang">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/mhs_um_Images/mhs_um_ImgID1.png" alt="mahasiswa universitas negeri malang">
            <img class="media-partner-img" src="assets/landing/assets/Komunitas + MP/gudang_lomba_Images/gudanglomba_ImgID1.png" alt="gudanglomba">
          </div>
        </div>
      </div>
    </section>
    

    <section class="gallery" id="gallery">
      <div class="container py-3">
        <h2 class="section-title mb-2">GALLERY</h2>
        <p class="section-desc">The Documentation</p>
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <img src="assets/landing/assets/uin_malikiPEpmA.jpg" class="gallery-img" alt="">
          </div>
          <div class="col-md-4 col-xs-12">
            <img src="assets/landing/assets/uin_malikiPEpmA.jpg" class="gallery-img" alt="">
          </div>
          <div class="col-md-4 col-xs-12">
            <img src="assets/landing/assets/uin_malikiPEpmA.jpg" class="gallery-img" alt="">
          </div>
          <div class="col-md-4 col-xs-12">
            <img src="assets/landing/assets/uin_malikiPEpmA.jpg" class="gallery-img" alt="">
          </div>
          <div class="col-md-4 col-xs-12">
            <img src="assets/landing/assets/uin_malikiPEpmA.jpg" class="gallery-img" alt="">
          </div>
          <div class="col-md-4 col-xs-12">
            <img src="assets/landing/assets/uin_malikiPEpmA.jpg" class="gallery-img" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="join">
      <div class="container text-center">
        <h2 class="section-title">JOIN WITH US NOW!</h2>
        <p class="section-desc">What do you waiting for?</p>
        <a href="{{ base_url('registrasi') }}" class="btn btn-primary mt-2">JOIN IN</a>
      </div>
    </section>

    <section class="contact bg-icon" id="contact">
      <div class="container-fluid py-3">
        <div class="text-center mb-5">
          <h2 class="section-title">CONTACT</h2>
          <p class="section-desc">Contact us for more information needed</p>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="feedback">
              <p class="send mb-4 text-center text-primary">Send your feedback</p>
              <form class="form-group">
                <input type="text" class="my-3 form-control" placeholder="Full Name">
                <input type="email" class="my-3 form-control" placeholder="Email">
                <textarea class="my-3 textarea form-control" placeholder="Message"></textarea>
                <a href="#" class="btn btn-primary mt-3 form-control">SUBMIT</a>
              </form>
              <div class="social-media mt-2 text-center">
                <p class="desc mt-5">Visit us on our Social Media :</p>
                <div class="socmed-link">
                  <a href="#" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" target="_blank">
                    <i class="fa fa-instagram"></i>
                  </a>
                  <a href="#" target="_blank">
                    <i class="fa fa-globe"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <iframe class="gmaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4556108184784!2d112.60526401428687!3d-7.951779081426514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78815e45bbc56d%3A0x5031ab2d7d36dba6!2sUIN+Maulana+Malik+Ibrahim!5e0!3m2!1sen!2sid!4v1532623220110"
              frameborder="0" style="border:0;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer row py-5">
      <p class="desc">Supported by</p>
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/eth0_Images/eth0_ImgID1.png" alt="Komunitas UIN Maulana Malik Ibrahim Malang">
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/mocap_Images/mocap_ImgID1.png" alt="Komunitas UIN Maulana Malik Ibrahim Malang">
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/mamud_Images/mamud_ImgID1.png" alt="Komunitas UIN Maulana Malik Ibrahim Malang">
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/fun_java_Images/fun_java_ImgID1.png" alt="Komunitas UIN Maulana Malik Ibrahim Malang">
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/ontaki_Images/ontaki_ImgID1.png" alt="Komunitas UIN Maulana Malik Ibrahim Malang">
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/uinbuntu_Images/uinbuntu_ImgID1.png" alt="Komunitas UIN Maulana Malik Ibrahim Malang">
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/weboender_Images/weboender_ImgID1.png" alt="Komunitas UIN Maulana Malik Ibrahim Malang">
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/al_fataa_Images/al_fataa_ImgID1.png" alt="Komunitas UIN Maulana Malik Ibrahim Malang">
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/devc_Images/devc_ImgID1.png" alt="devc">
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/dsc_Images/dsc_ImgID1.png" alt="dsc">
      <img class="img-footer" src="assets/landing/assets/Komunitas + MP/msp_Images/msp_ImgID1.png" alt="microsoft student partner">
    </footer>

  </div>
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