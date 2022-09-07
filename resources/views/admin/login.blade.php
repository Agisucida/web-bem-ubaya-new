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
    <link rel="icon" type="image/png" sizes="20x20" href="img/Logo.webp">
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
                  ><img src="img/logoBEM.webp" alt="" width="30" style="margin-right: 10px;"/>BEM
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
        <!--Login-->
        <div class="container-md login">
            <div class="mb-2">
                @if (Session::get('SUKSES'))
                    <div class="alert alert-success">
                        {{ Session::get('SUKSES') }}
                    </div>
                @endif

                @if (session()->has('login nerror'))
                    <div class="alert alert-danger">
                        {{ session('login error') }}
                    </div>
                @endif
            </div>
            <div id="LOGIN" class="container-md">
              <div class="row text-center">
                <h2 style="color: white;"><strong>LOGIN ADMIN</strong></h2>
              </div>
              <div class="row justify-content-md-start">
                @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if($errors->any())
                @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
              <form action="/loginAction" method="post">
                    @csrf
                    <div class="form-group">
                        <div class= "row text-center">
                      <label for="nrp" class="row text-center">Nama</label>
                      <input class="form-control input-sm" type="text" id="nama" name="nama" value="{{ old('nama') }}"/><br/>
                      <span style="color:red">@error('nrp'){{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class = "row text-center">
                      <label for="password" class="row text-center">Password</label>
                      <input class="form-control input-sm" type="password" id="password" name="password" value="{{ old('password') }}"><br/>
                      <span style="color:red">@error('password'){{ $message }} @enderror</span>
                        </div>
                    </div>
                    <p></p>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <p></p>
                    <div class="row text-center">
                        <a href=/forgetpassword>Lupa Password?</a>
                      </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        <!-- Login-->
        <script src="js/jquery.vide.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      </div>
    </div>
  </body>

</html>
