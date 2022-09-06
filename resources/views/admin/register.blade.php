<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="styleSheet" href="styles/webstyle.css" />
    <link rel="stylesheet" href="styles/bootstrap.min.css" />
    <link rel="styleSheet" href="styles/webstyle.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/filepond/dist/filrpond.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>DAFTAR BEM-US!</title>
    <link rel="stylesheet" href="styles/owl.carousel.min.css" />
    <link rel="stylesheet" href="styles/owl.theme.default.min.css" />
    <link rel="icon" type="image/png" sizes="20x20" href="img/Logo.png">
    <style>
        label {
            color: #fff;
            font-weight: Bold;
        }

        input {
            background-color: #fff;
            color: black;
            opacity: 0.5;

        }

        select {
            opacity: 0.5;
            filter: alpha(opacity=50);
        }

        textarea {
            background-color: #fff;
            color: black;
            opacity: 0.5;
        }
        p{
            font-size: 11px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="sticky-md-top">
        <div class="Navbar"></div>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div id="Navbar" class="container sticky-md-top">
                <a><img src="img/logoBEM.png" alt="" width="30" style="margin-right: 10px;" />BEM
                    Universitas Surabaya</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Event Terkini</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"> Kementerian </a>
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
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    </div>
    <!--Akhir Navbar-->
    <!--Register Input-->
    <div class="container-md register">
        <div id="REGISTER" class="container-md">
            <div class="row text-center">
                <h2 style="color: white;"><strong>DAFTAR BEM-US!</strong></h2>
            </div>
            <div class="container-md Esay ">
                <div class="row justify-content-center ">

                    <div class="col-4-md ketentuanEsay">
                        <h4>Ketentuan Esay Tulis Tangan:</h5>
                        <ul>
                            <li>Minimal 2 Halaman & Maksimal 4 Halaman</li>
                            <li>Esay Di tulis dalam bentuk paragraf</li>
                            <li>Esay meliputi isi esai tanpa menyebutkan secara eksplisit (tidak perlu menuliskan "Perkenalkan Diri Anda").</li>
                            <li>Wajib tulis tangan rapih dan dapat dibaca (bukan diketik) di kertas folio bergaris.</li>
                            <li>Dikumpulkan dalam bentuk scan PDF.</li>
                        </ul>

                    </div>
                    <div class="col-4-md isiEsay">
                        <h4>Isi Esay:</h4>
                        <ul>
                            <li>Perkenalkan diri anda (Kelebihan & kekurangan, serta cara mengatasai kekurangan)</li>
                            <li>Apa yang anda ketahui tentang BEM-US</li>
                            <li>Alasan anda mendaftar BEM-US dan kementerian yang anda pilih dibandingkan organisasi mahasiswa lainnya</li>
                            <li>Lebih bisa kerjasama dalam tim atau individu</li>
                            <li>Bagaimana anda melihat diri anda dalam 5 Tahun yang akan datang dan bagaimana BEM-US dapat membantumu untuk menggapainya</li>
                            <li>Komitmen anda apabila diterima menjadi staff BEM-US</li>
                        </ul>

                    </div>
                </div>
                  </div>
            </div>
            <div class="row justify-content-md-start">

                <form action="{{ route('daftar.action') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input class="form-control input-sm" type="text" id="nama" name="nama" required
                            value="{{ old('name') }}" /><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input class="form-control input-sm" type="text" id="nrp" name="nrp" required
                            value="{{ old('name') }}"><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="fakultas">Fakultas</label> <select id="fakultas" name="fakultas">
                            <option>Farmasi</option>
                            <option>Hukum</option>
                            <option>Bisnis dan Ekonomika</option>
                            <option>Psikologi</option>
                            <option>Teknik</option>
                            <option>Teknobiologi</option>
                            <option>Industri Kreatif</option>
                            <option>Kedokteran</option>
                        </select><br /><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="lineID">ID Line</label>
                        <input class="form-control input-sm" type="text" id="lineID" name="lineID" required
                            value="{{ old('name') }}"><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="noHP">Nomor Handphone(WhatsApp)</label>
                        <input class="form-control input-sm" type="text" id="noHP" name="noHP" required
                            value="{{ old('name') }}"><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="pilihan1">Pilihan Kementrian 1</label>
                        <select id="pilihan1" name="pilihan1">
                            <option>Kementrian Sekretaris Negara</option>
                            <option>Kementrian Keuangan</option>
                            <option>Kementrian Dalam Negri</option>
                            <option>Kementrian Luar Negri</option>
                            <option>Kementrian Kerohanian</option>
                            <option>Kementrian PSDM</option>
                            <option>Kementrian KOMINFO</option>
                            <option>Kementrian Seni Budaya</option>
                            <option>Kementrian Olahraga</option>
                            <option>Kementrian SOSPENGMAS</option>
                            <option>Kementrian Nasionalisme</option>
                        </select><br /><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="alasan1">Alasan Memilih Pilihan 1</label>
                        <textarea class="form-control input-sm" type="text" id="alasan1" name="alasan1" required value="{{ old('name') }}">Ketikan sesuatu...</textarea><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="pilihan2">Pilihan Kementrian 2</label>
                        <select id="pilihan2" name="pilihan2">
                            <option>Kementrian Sekretaris Negara</option>
                            <option>Kementrian Keuangan</option>
                            <option>Kementrian Dalam Negri</option>
                            <option>Kementrian Luar Negri</option>
                            <option>Kementrian Kerohanian</option>
                            <option>Kementrian PSDM</option>
                            <option>Kementrian KOMINFO</option>
                            <option>Kementrian Seni Budaya</option>
                            <option>Kementrian Olahraga</option>
                            <option>Kementrian SOSPENGMAS</option>
                            <option>Kementrian Nasionalisme</option>
                        </select><br /><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="alasan2">Alasan Memilih Pilihan 2</label>
                        <textarea class="form-control input-sm" type="text" id="alasan2" name="alasan2" required value="{{ old('name') }}">Ketikan sesuatu...</textarea><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <label for="jadwal1">Pilih Jadwal Interview (pilihlah jadwal yang kalian bisa , jika hanya memilih 1 atau lebih maka pilihan lainnya di pilih yang kosong !.
                        Silahkan sesuaikan dengan jadwal kalian masing".)</label>
                    <div class="form-group">
                        <label for="jadwal1">Jadwal Interview 1</label>
                        <select id="jadwal1" name="jadwal1" required>
                            <option></option>
                            <option>Senin, 19 September 2022 (18.00 - 19.00)</option>
                            <option>Senin, 19 September 2022 (19.00 - 20.00)</option>
                            <option>Senin, 19 September 2022 (20.00 - 21.00)</option>
                            <option>Selasa, 20 September 2022 (18.00 - 19.00)</option>
                            <option>Selasa, 20 September 2022 (19.00 - 20.00)</option>
                            <option>Selasa, 20 September 2022 (20.00 - 21.00)</option>
                            <option>Rabu, 21 September 2022 (18.00 - 19.00)</option>
                            <option>Rabu, 21 September 2022 (19.00 - 20.00)</option>
                            <option>Rabu, 21 September 2022 (20.00 - 21.00)</option>
                        </select>
                        <br>
                        <label for="jadwal2">Jadwal Interview 2</label>
                        <select id="jadwal2" name="jadwal2">
                            <option></option>
                            <option>Senin, 19 September 2022 (18.00 - 19.00)</option>
                            <option>Senin, 19 September 2022 (19.00 - 20.00)</option>
                            <option>Senin, 19 September 2022 (20.00 - 21.00)</option>
                            <option>Selasa, 20 September 2022 (18.00 - 19.00)</option>
                            <option>Selasa, 20 September 2022 (19.00 - 20.00)</option>
                            <option>Selasa, 20 September 2022 (20.00 - 21.00)</option>
                            <option>Rabu, 21 September 2022 (18.00 - 19.00)</option>
                            <option>Rabu, 21 September 2022 (19.00 - 20.00)</option>
                            <option>Rabu, 21 September 2022 (20.00 - 21.00)</option>
                        </select>
                        <br>
                        <label for="jadwal3">Jadwal Interview 3</label>
                        <select id="jadwal3" name="jadwal3">
                            <option></option>
                            <option>Senin, 19 September 2022 (18.00 - 19.00)</option>
                            <option>Senin, 19 September 2022 (19.00 - 20.00)</option>
                            <option>Senin, 19 September 2022 (20.00 - 21.00)</option>
                            <option>Selasa, 20 September 2022 (18.00 - 19.00)</option>
                            <option>Selasa, 20 September 2022 (19.00 - 20.00)</option>
                            <option>Selasa, 20 September 2022 (20.00 - 21.00)</option>
                            <option>Rabu, 21 September 2022 (18.00 - 19.00)</option>
                            <option>Rabu, 21 September 2022 (19.00 - 20.00)</option>
                            <option>Rabu, 21 September 2022 (20.00 - 21.00)</option>
                        </select>
                        <br>
                        <label for="jadwal4">Jadwal Interview 4</label>
                        <select id="jadwal4" name="jadwal4">
                            <option></option>
                            <option>Senin, 19 September 2022 (18.00 - 19.00)</option>
                            <option>Senin, 19 September 2022 (19.00 - 20.00)</option>
                            <option>Senin, 19 September 2022 (20.00 - 21.00)</option>
                            <option>Selasa, 20 September 2022 (18.00 - 19.00)</option>
                            <option>Selasa, 20 September 2022 (19.00 - 20.00)</option>
                            <option>Selasa, 20 September 2022 (20.00 - 21.00)</option>
                            <option>Rabu, 21 September 2022 (18.00 - 19.00)</option>
                            <option>Rabu, 21 September 2022 (19.00 - 20.00)</option>
                            <option>Rabu, 21 September 2022 (20.00 - 21.00)</option>
                        </select>
                        <br>
                        <label for="jadwal5">Jadwal Interview 5</label>
                        <select id="jadwal5" name="jadwal5">
                            <option></option>
                            <option>Senin, 19 September 2022 (18.00 - 19.00)</option>
                            <option>Senin, 19 September 2022 (19.00 - 20.00)</option>
                            <option>Senin, 19 September 2022 (20.00 - 21.00)</option>
                            <option>Selasa, 20 September 2022 (18.00 - 19.00)</option>
                            <option>Selasa, 20 September 2022 (19.00 - 20.00)</option>
                            <option>Selasa, 20 September 2022 (20.00 - 21.00)</option>
                            <option>Rabu, 21 September 2022 (18.00 - 19.00)</option>
                            <option>Rabu, 21 September 2022 (19.00 - 20.00)</option>
                            <option>Rabu, 21 September 2022 (20.00 - 21.00)</option>
                        </select>
                        <br>
                        <label for="jadwal6">Jadwal Interview 6</label>
                        <select id="jadwal6" name="jadwal6">
                            <option></option>
                            <option>Senin, 19 September 2022 (18.00 - 19.00)</option>
                            <option>Senin, 19 September 2022 (19.00 - 20.00)</option>
                            <option>Senin, 19 September 2022 (20.00 - 21.00)</option>
                            <option>Selasa, 20 September 2022 (18.00 - 19.00)</option>
                            <option>Selasa, 20 September 2022 (19.00 - 20.00)</option>
                            <option>Selasa, 20 September 2022 (20.00 - 21.00)</option>
                            <option>Rabu, 21 September 2022 (18.00 - 19.00)</option>
                            <option>Rabu, 21 September 2022 (19.00 - 20.00)</option>
                            <option>Rabu, 21 September 2022 (20.00 - 21.00)</option>
                        </select>
                        <br>
                        <label for="jadwal7">Jadwal Interview 7</label>
                        <select id="jadwal7" name="jadwal7">
                            <option></option>
                            <option>Senin, 19 September 2022 (18.00 - 19.00)</option>
                            <option>Senin, 19 September 2022 (19.00 - 20.00)</option>
                            <option>Senin, 19 September 2022 (20.00 - 21.00)</option>
                            <option>Selasa, 20 September 2022 (18.00 - 19.00)</option>
                            <option>Selasa, 20 September 2022 (19.00 - 20.00)</option>
                            <option>Selasa, 20 September 2022 (20.00 - 21.00)</option>
                            <option>Rabu, 21 September 2022 (18.00 - 19.00)</option>
                            <option>Rabu, 21 September 2022 (19.00 - 20.00)</option>
                            <option>Rabu, 21 September 2022 (20.00 - 21.00)</option>
                        </select>
                        <br>
                        <label for="jadwal8">Jadwal Interview 8</label>
                        <select id="jadwal8" name="jadwal8">
                            <option></option>
                            <option>Senin, 19 September 2022 (18.00 - 19.00)</option>
                            <option>Senin, 19 September 2022 (19.00 - 20.00)</option>
                            <option>Senin, 19 September 2022 (20.00 - 21.00)</option>
                            <option>Selasa, 20 September 2022 (18.00 - 19.00)</option>
                            <option>Selasa, 20 September 2022 (19.00 - 20.00)</option>
                            <option>Selasa, 20 September 2022 (20.00 - 21.00)</option>
                            <option>Rabu, 21 September 2022 (18.00 - 19.00)</option>
                            <option>Rabu, 21 September 2022 (19.00 - 20.00)</option>
                            <option>Rabu, 21 September 2022 (20.00 - 21.00)</option>
                        </select>
                        <br>
                        <label for="jadwal9">Jadwal Interview 9</label>
                        <select id="jadwal9" name="jadwal9">
                            <option></option>
                            <option>Senin, 19 September 2022 (18.00 - 19.00)</option>
                            <option>Senin, 19 September 2022 (19.00 - 20.00)</option>
                            <option>Senin, 19 September 2022 (20.00 - 21.00)</option>
                            <option>Selasa, 20 September 2022 (18.00 - 19.00)</option>
                            <option>Selasa, 20 September 2022 (19.00 - 20.00)</option>
                            <option>Selasa, 20 September 2022 (20.00 - 21.00)</option>
                            <option>Rabu, 21 September 2022 (18.00 - 19.00)</option>
                            <option>Rabu, 21 September 2022 (19.00 - 20.00)</option>
                            <option>Rabu, 21 September 2022 (20.00 - 21.00)</option>
                        </select>
                        <br><br>
                        {{-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Senin, 19 September 2022 (18.00-19.00)" id="flexCheckChecked" name="day1sesi1" >
                            <label class="form-check-label" for="flexCheckChecked">
                              Senin, 19 September 2022 (18.00-19.00)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Senin, 19 September 2022 (19.00-20.00)" id="flexCheckChecked" name="day1sesi2" >
                            <label class="form-check-label" for="flexCheckChecked">
                                Senin, 19 September 2022 (19.00-20.00)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Senin, 19 September 2022 (20.00-21.00)" id="flexCheckChecked" name="day1sesi3">
                            <label class="form-check-label" for="flexCheckChecked">
                                Senin, 19 September 2022 (20.00-21.00)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=" Selasa, 20 September 2022 (18.00-19.00)" id="flexCheckChecked" name="day2sesi1" >
                            <label class="form-check-label" for="flexCheckChecked">
                              Selasa, 20 September 2022 (18.00-19.00)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Selasa, 20 September 2022 (19.00-20.00)" id="flexCheckChecked" name="day2sesi2" >
                            <label class="form-check-label" for="flexCheckChecked">
                                Selasa, 20 September 2022 (19.00-20.00)
                            </label>
                        </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Rabu, 21 September 2022 (18.00-19.00)" id="flexCheckChecked" name="day3sesi1">
                            <label class="form-check-label" for="flexCheckChecked">
                                Rabu, 21 September 2022 (18.00-19.00)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Rabu, 21 September 2022 (19.00-20.00)" id="flexCheckChecked" name="day3sesi2" >
                            <label class="form-check-label" for="flexCheckChecked">
                              Rabu, 21 September 2022 (19.00-20.00)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Rabu, 21 September 2022 (20.00-21.00)" id="flexCheckChecked" name="day3sesi3" >
                            <label class="form-check-label" for="flexCheckChecked">
                                Rabu, 21 September 2022 (20.00-21.00)
                            </label>
                          </div> --}}



                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="cv">Upload Essay</label>
                        <input class="form-control input-sm" type="file" id="essay" name="essay" required
                            accept="application/pdf"><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="cv">Upload Transkirp KHS</label>
                        <input class="form-control input-sm" type="file" id="khs" name="khs" required
                            accept="application/pdf"><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="cv">Upload CV</label>
                        <input class="form-control input-sm" type="file" id="cv" name="cv" required
                            accept="application/pdf"><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="cv">Upload Foto Diri</label>
                        <input class="form-control input-sm" type="file" id="foto" name="foto" required
                            accept="image/*"><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="cv">Upload Foto KTM</label>
                        <input class="form-control input-sm" type="file" id="ktm" name="ktm" required
                            accept="image/*"><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="alasan2">Link Google Drive Portofolio(Khusus KOMINFO)</label>
                        <textarea class="form-control input-sm" type="text" id="porto" name="porto" value="{{ old('name') }}">Ketikan sesuatu...</textarea><br />
                        <span style="color:red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <p></p>
                    <button type="submit" class="btn btn-primary" name="register">Daftar Sekarang</button>
                    <p></p>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!--Register Input End-->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javaScript">
            $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
      </script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    </div>
</body>
<!--Footer-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h3><img src="img/Logo.png " width="60" alt="" />BEM Universitas Surabaya</h3>
                </div>
            </div>
            <div class="social-links">
                <a href="https://instagram.com/bem_ubaya?utm_medium=copy_link" class="twitter"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/channel/UCNvPUz49JsMyQheWF7Xgr6w" class="Youtube"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-youtube" viewBox="0 0 16 16">
                        <path
                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
<!--akhir Footer-->

</html>
