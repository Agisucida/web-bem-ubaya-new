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
    <style>
      table td {
        padding: 8px;
        border: 2px solid #000000;
      }
    </style>
    <script src="js/jquery.vide.js"></script>
    <title> BEM-US</title>
    <link rel="icon" type="image/png" sizes="20x20" href="img/Logo.png">
    <style>
        thead{
            background-color: yellow;
        }
        tbody{
            background-color: white;
            font-weight: bold
        }
        button:hover{
            background-color: blue;
        }
        button{
            background-color: #e37317;
        }
    </style>
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
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#event">Event Terkini</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Kementerian </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#"></a></li>
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
                    <li class="nav-item">
                      <a class="nav-link" href="#home">UEL S2</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="/kabinet">Tentang Kabinet</a>
                    </li>

                  </ul>
                  <ul class="navbar-nav">
                    <li class= "nav-item">
                        <a href="/registeradmin11990088uuzzjjkkikksiakwopdkdjejz-sjas" class="nav-link">Daftar Admin!</a>
                    </li>
                  </ul>

                </div>
              </div>
            </nav>
          </div>
        </div>
        <!--Akhir Navbar-->
        <!--Data Staff-->
        <h1>Daftar Calon Staff BEM-US</h1>


        <table>
          <thead>
          <tr style="font-weight: bolder">
            <td>No</td>
            <td>Nama</td>
            <td>NRP</td>
            <td>Fakultas</td>
            <td>Pilihan 1</td>
            <td>Alasan Pilihan 1</td>
            <td>Pilihan 2</td>
            <td>Alasan Pilihan 2</td>
            <td>ID LINE</td>
            <td>No. HP</td>

          </tr>
          </thead>
          <tbody >
          @foreach ($staffs as $staff)
          <tr>
            <td>{{ $staff['id'] }}</td>
            <td>{{ $staff['nama'] }}</td>
            <td>{{ $staff['nrp'] }}</td>
            <td>{{ $staff['fakultas'] }}</td>
            <td>{{ $staff['pilihan1'] }}</td>
            <td>{{ $staff['alasan1'] }}</td>
            <td>{{ $staff['pilihan2'] }}</td>
            <td>{{ $staff['alasan2'] }}</td>
            <td>{{ $staff['idline'] }}</td>
            <td>{{ $staff['nohp'] }}</td>

          </tr>
          @endforeach
          </tbody>
        </table>
        <p></p>
        <!-- Data Staff-->

        <!--Foto Staff-->
        <h1>Foto, KTM, dan Persyaratan Calon Staff BEM-US</h1>

        <table >
          <thead>
          <tr style="font-weight: bolder">
            <td>No</td>
            <td>Nama</td>
            <td>NRP</td>
            <td>Foto KTM</td>
            <td>Foto Diri</td>
            <td>Essay</td>
            <td>CV</td>
            <td>KHS</td>
            <td>Portofolio</td>
            <td>Waktu Submit</td>
          </tr>
          </thead>
          <tbody border="2">
          @foreach ($staffs as $staff)
          <tr>
            <td>{{ $staff['id'] }}</td>
            <td>{{ $staff['nama'] }}</td>
            <td>{{ $staff['nrp'] }}</td>
            <td><img style="max-width:200px; max-height:auto" src="{{ asset('storage/img/ktm/'.$staff['ktm']) }}"></td>
            <td><img style="max-width:200px; max-height:auto" src="{{ asset('storage/img/foto/'.$staff['fotodiri']) }}"></td>
            <td>
              <a href="{{ asset('storage/img/essay/'.$staff['essay']) }}" download="{{ $staff['essay'] }}">
              <button>Download Essay</button>
              </a>
            </td>
            <td>
              <a href="{{ asset('storage/img/cv/'.$staff['cv']) }}" download="{{ $staff['cv'] }}">
              <button>Download CV</button>
              </a>
            </td>
            <td>
              <a href="{{ asset('storage/img/khs/'.$staff['khs']) }}" download="{{ $staff['khs'] }}">
              <button>Download KHS</button>
              </a>
            </td>
            <td><a>{{ $staff['portofolio'] }}</a></td>
            <td>{{ $staff['submited_at'] }}</td>


          </tr>
          @endforeach
          </tbody>
        </table>
        <p></p>
        <!--Foto Staff-->
        <!--Jadwal Interview Start -->
        <h1>Jadwal Interview</h1>
        <table border="2">
            <thead>
            <tr style="font-weight: bolder">
              <td>No</td>
              <td>Nama</td>
              <td>NRP</td>
              <td>Pilihan 1</td>
              <td>Pilihan 2</td>
              <td>Jadwal Interview 1</td>
              <td>Jadwal Interview 2</td>
              <td>Jadwal Interview 3</td>
              <td>Jadwal Interview 4</td>
              <td>Jadwal Interview 5</td>
              <td>Jadwal Interview 6</td>
              <td>Jadwal Interview 7</td>
              <td>Jadwal Interview 8</td>
              <td>Jadwal Interview 9</td>

            </tr>
            </thead>
            <tbody border="2">
            @foreach ($staffs as $staff)
            <tr>
              <td>{{ $staff['id'] }}</td>
              <td>{{ $staff['nama'] }}</td>
              <td>{{ $staff['nrp'] }}</td>
              <td>{{ $staff['pilihan1'] }}</td>
              <td>{{ $staff['pilihan2'] }}</td>
              <td>{{ $staff['jadwal1'] }}</td>
              <td>{{ $staff['jadwal2'] }}</td>
              <td>{{ $staff['jadwal3'] }}</td>
              <td>{{ $staff['jadwal4'] }}</td>
              <td>{{ $staff['jadwal5'] }}</td>
              <td>{{ $staff['jadwal6'] }}</td>
              <td>{{ $staff['jadwal7'] }}</td>
              <td>{{ $staff['jadwal8'] }}</td>
              <td>{{ $staff['jadwal9'] }}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
          <p></p>
        <script src="js/jquery.vide.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
        <script
        src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script>
            $('input').on("keyup", function())
            {
                $("tbody tr").filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf($("input").val().toLowerCase()) > -1)
                })
            }
        </script>
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
