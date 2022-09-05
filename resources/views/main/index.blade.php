

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/bootstrap.min.css" />
    <link rel="styleSheet" href="styles/webstyle.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="http://fonts.cdnfonts.com/css/nexa-bold" rel="stylesheet" />

    <style>
      @import url("http://fonts.cdnfonts.com/css/gotham");
    </style>
    <script src="js/jquery.vide.js"></script>
    <title> BEM-US</title>
    <link rel="icon" type="image/png" sizes="20x20" href="img/Logo.png">
  </head>
  <body>
    <div class="glass">
      <div class="BigContainer">
        <!--Navbar-->
        <div class="sticky-md-top">
          <div class="Navbar">
            <nav class="navbar navbar-expand-lg navbar-dark">
              <div id="Navbar" class="container sticky-md-top">
                <a
                  ><img src="img/logoBEM.png" alt="" width="30" style="margin-right: 10px;"/>BEM
                  Universitas Surabaya</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/index">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#event">Event Terkini</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Kementerian </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/Sesneg">Kementerian Sekretaris Negara</a></li>
                        <li><a class="dropdown-item" href="/keuangan">Kementerian Keuangan</a></li>
                        <li><a class="dropdown-item" href="/dagri">Kementerian Dalam Negeri</a></li>
                        <li><a class="dropdown-item" href="/luarNegeri">Kementerian Luar Negeri</a></li>
                        <li><a class="dropdown-item" href="/kerohanian">Kementerian Kerohanian</a></li>
                        <li><a class="dropdown-item" href="/psdm">Kementerian PSDM</a></li>
                        <li><a class="dropdown-item" href="/kominfo">Kementerian KOMINFO</a></li>
                        <li><a class="dropdown-item" href="/senibudaya">Kementerian Seni Budaya</a></li>
                        <li><a class="dropdown-item" href="/olahraga">Kementerian Olahraga</a></li>
                        <li><a class="dropdown-item" href="/sospengmas">Kementerian SOSPENGMAS</a></li>
                        <li><a class="dropdown-item" href="/nasionalisme">Kementerian Nasionalisme</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="/kabinet">Tentang Kabinet</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Contact</a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="/">Bem.ubaya@gmail.com</a>
                        </li>
                        <li><a class="dropdown-item" href="https://lin.ee/ILm31at">Line</a></li>
                        <li><a class="dropdown-item" href="https://instagram.com/bem_ubaya?utm_medium=copy_link">Instagram</a></li>
                        <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCNvPUz49JsMyQheWF7Xgr6w"
                          >Youtube</a></li>

                      </ul>
                    </li>
                  </ul>
                  <ul class="navbar-nav">
                    <li class= "nav-item">
                        <a href="/daftarStaff" class="nav-link">Daftar BEM-US!</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav">
                    <li class= "nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
        <!--Akhir Navbar-->
        <!--Jumbo tron-->

        <section id="hero" class="hero d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up-right" data-aos-duration="1500">
                <h1 data-aos="fade-up" style="text-shadow: 10px 10px 30px rgb(0, 0, 0)">Universitas Surabaya</h1>
                <h2 data-aos="fade-up" data-aos-delay="400" style="text-shadow: 10px 10px 30px rgb(0, 0, 0)">The First University in Heart and Mind.</h2>
                <div data-aos="fade-up" data-aos-delay="600"></div>
              </div>
              <div class="col-lg-6 hero-img" data-aos="fade-up-left" data-aos-duration="1500" data-aos-delay="300">
                <img src="img/Logo.png" width="480px" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </section>
        <!--akhir tron-->
        <!--Container 1-->
        <section id="event" class="eventContainer" class="container-md">
          <div class="row text-center">
            <h1 class="text-light fw-bold" style="padding: 50px">Event Bem Ubaya</h1>
          </div>
          <section id="featured" class="featured">
            <div class="container-md event">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="card" data-aos="fade-up-right" data-aos-duration="1500">
                    <img src="img/logo UG.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title text-light fw-bold" style="text-shadow: 10px 10px 30px black">Ubaya Games 2022</h5>

                      <a href="https://instagram.com/ubayagames2022" class="btn">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="card" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500">
                    <img src="img/Logo UEL.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title text-light fw-bold" style="text-shadow: 10px 10px 30px black">Ubaya Esport League S2</h5>

                      <a href="https://instagram.com/uel2022_" class="btn">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="card" data-aos="fade-up-left" data-aos-delay="200" data-aos-duration="1500">
                    <img src="img/logo earth day.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title text-light fw-bold" style="text-shadow: 10px 10px 30px black">Earth Day</h5>

                      <a href="https://instagram.com/earthday.ubaya" class="btn">Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="card" data-aos="fade-up-right" data-aos-duration="1500">
                    <img src="img/logo Ufest.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title text-light fw-bold" style="text-shadow: 10px 10px 30px black">United Festival</h5>

                      <a href="https://instagram.com/unitedfestival2022" class="btn text-lightk">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="card" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500">
                    <img src="img/logo nationFest.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title text-light fw-bold" style="text-shadow: 10px 10px 30px black">Nation Fest 2022</h5>

                      <a href="https://instagram.com/nationfest2022" class="btn">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="card" data-aos="fade-up-left" data-aos-delay="200" data-aos-duration="1500">
                    <img src="img/logo ecc.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title text-light fw-bold">The Enchanted Ceremony</h5>

                      <a href="https://instagram.com/enchanted.ceremony" class="btn">Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </section>
        <!--akhir container-->
        <!-- awal container 2-->
        <div id="MENTRI" class="container-md kenali" class="text-center">
          <div class="row text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
            <h2 class="fw-bold">Kenali Bem Universitas Surabaya</h2>
          </div>
          <div id="UKM" class="container-md">
            <div class="row justify-content-center">
              <div class="col-md-4 p-md-0 infologo" data-aos="fade-up-right" data-aos-duration="1500" data-aos-offset="200">
                <img src="img/Logo.png" class="img img-fluid m-sm-5" alt="" />
              </div>
              <div class="col-md-6 text-md-start info" data-aos="fade-up-right" data-aos-duration="1000" data-aos-offset="200">
                <p ><strong>
                  Badan Eksekutif Mahasiswa Universitas Surabaya (BEM-US) adalah organisasi mahasiswa intra kampus di lingkup Universitas Surabaya yang merupakan lembaga eksekutif di tingkat Pendidikan tinggi yang dipimpin oleh Presiden dan
                  Wakil Presiden Mahasiswa. Dalam hal ini, untuk melaksanakan program yang telah direncanakan, maka BEM-US terbagi menjadi 11 kementerian, yaitu Kementerian Sekretaris Negara, Kementerian Keuangan, Kementerian Dalam Negeri,
                  Kementerian Luar Negeri, Kementerian Olahraga, Kementerian Seni dan Budaya, Kementerian Pengembangan Sumber Daya Mahasiswa, Kementerian Sosial dan Pengabdian Kepada Masyarakat, Kementerian Kerohanian, Kementerian
                  Komunikasi dan Informasi, serta Kementerian Nasionalisme.</strong>
                </p>
                <a class="btn btn-outline-warning" href="/kabinet" role="button">Tentang Kabinet</a>
              </div>
            </div>
          </div>
        </div>
        <!-- akhir container 2-->
        <script src="js/jquery.vide.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      </div>
    </div>
  </body>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h3><img src="img/Logo.png " width="60" alt="" />BEM Universitas Surabaya</h3>
          </div>
        </div>
        <div class="social-links">
          <a href="https://instagram.com/bem_ubaya?utm_medium=copy_link" class="twitter"
            ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
              />
            </svg>
          </a>
          <a href="https://www.youtube.com/channel/UCNvPUz49JsMyQheWF7Xgr6w" class="Youtube"
            ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
              <path
                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"
              />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </footer>
</html>
