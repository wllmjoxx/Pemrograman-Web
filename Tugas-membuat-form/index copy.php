<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pendaftaran PMB</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="jumbotron">
        <h1 class="display-4">Pendaftaran PMB Universitas Pembangunan Jaya</h1>
        <p class="lead">Selamat datang di Website resmi pendaftaran Mahasiswa baru
        </p>
        <hr class="my-4">
        <p>Dengan mengisi form dibawah, artinya anda menyetujui segala S&K yang berlaku</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Mulai Isi</a>
      </div>
      
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h3 id="wkwkw" class="display-4">Tahun Ajaran 2022/2023</h3>
          <p class="lead">Universitas Pembangunan Jaya. All rights reserved@</p>
        </div>
      </div>

    <div class="pendaftaran">
        <h1 id="pmb1">Pendaftaran Online</h1>
    </div>

    <div class="contact-form">
        <form id="contact-form" method="POST" action="index copy.php">
        <h5 id="wkwk">Nama Calon Mahasiswa (Sesuai akta lahir)*</h5>
        <input name="namamhs" type="text" class="form-control" placeholder="Silahkan masukan nama lengkap" required>
        <br>
        <h5>Alamat Email*</h5>
        <input name="emailmhs" type="email" class="form-control" placeholder="Silahkan masukan email anda" required>
        <br>
        <h5>Nama Orang Tua*</h5>
        <h6>Nama Ibu*</h6>
        <input name="namaibu" type="name" class="form-control" placeholder="Silahkan masukan nama ibu" required>
        <br>
        <h6>Nama Ayah*</h6>
        <input name="namaayah" type="name" class="form-control" placeholder="Silahkan masukan nama ayah" required>
        <br>
        <h5>Alamat Calon Mahasiswa*</h5>
            <textarea name="message" class="form-control" placeholder="Silahkan masukan alamat anda" row="4"
            required></textarea><br>

            <div class="tombolsubmit">
                <form id="submitbutton" method="POST" action="">
                  <input type="submit" class="form-control submit" value="SUBMIT DATA">
                </form>
            </div>

            <div class="tombolsumbitcadangan">
            <h6 id="klik">Ingin lihat konfirmasi data tetapi tombol submit tidak bekerja?</h6>
            <a href="form.php">Klik disini</a>
            </div>
        </form>
    </div>

    <div class="datasch">
        <form id="datasch" method="POST" action="index copy.php">
            <h3 id="pmb2">DATA SEKOLAH ASAL CALON MAHASISWA</h3>
            <h5>Asal Sekolah (SMA/SMK/MA) *</h5>
            <input name="namasklh" type="text" class="form-control" placeholder="Silahkan masukan asal Sekolah" required>
            <br>
            <h5>Jurusan Sekolah *</h5>
            <input name="namajrsklh" type="text" class="form-control" placeholder="Silahkan masukan Jurusan Sekolah" required>
            <br>
            <h5>Kota Sekolah *</h5>
            <input name="kotasklh" type="text" class="form-control" placeholder="Silahkan masukan Kota Sekolah" required>
            <br>
            <h5>Tahun Lulus *</h5>
            <input name="tahunlulus" type="text" class="form-control" placeholder="Silahkan masukan Tahun Lulus" required>
            <br>
            <h5>Provinsi Sekolah *</h5>
            <input name="provinsisekolah" type="text" class="form-control" placeholder="Silahkan masukan Provinsi Sekolah" required>
            <br>
            <div class="tombolsubmit">
                <form id="submitbutton" method="POST" action="">
                  <input type="submit" class="form-control submit" value="SUBMIT DATA">
                </form>
            </div>

            <div class="tombolsumbitcadangan">
            <h6 id="klik">Ingin lihat konfirmasi data tetapi tombol submit tidak bekerja?</h6>
            <a href="form.php">Klik disini</a>
            </div>
        </form>
    </div>

    <div class="dataot">
        <form id="dataot" method="POST" action="index copy.php">
            <h3 id="pmb3">DATA ORANG TUA CALON MAHASISWA</h3>
            <h5>Alamat *</h5>
            <input name="alamatortu" type="text" class="form-control" placeholder="Silahkan masukan Alamat Orang Tua" required>
            <br>
            <h5>Kode Pos *</h5>
            <input name="kodeposortu" type="text" class="form-control" placeholder="Silahkan masukan Kode Pos" required>
            <br>
            <h5>No. Handphone *</h5>
            <input name="nohportu" type="number" class="form-control" placeholder="Silahkan masukan No. Handphone Orang Tua" required>
            <br>
            <h5>Pekerjaan Ayah *</h5>
            <input name="pekerjaanayah" type="text" class="form-control" placeholder="Silahkan masukan Pekerjaan Ayah" required>
            <br>
            <h5>Pekerjaan Ibu *</h5>
            <input name="pekerjaanibu" type="text" class="form-control" placeholder="Silahkan masukan Pekerjaan Ibu" required>
            <br>
            
            <div class="tombolsubmit">
                <form id="submitbutton" method="POST" action="">
                  <input type="submit" class="form-control submit" value="SUBMIT DATA">
                </form>
            </div>

            <div class="tombolsumbitcadangan">
            <h6 id="klik">Ingin lihat konfirmasi data tetapi tombol submit tidak bekerja?</h6>
            <a href="form.php">Klik disini</a>
            </div>
        </form>
     </div>

<?php
      
    $namamhs = @$_POST['namamhs'];
    $emailmhs = @$_POST['emailmhs'];
    $namaibu = @$_POST['namaibu'];
    $namaayah = @$_POST['namaayah'];
    $namasklh = @$_POST['namasklh'];
    $namajrsklh = @$_POST['namajrsklh'];
    $kotasklh = @$_POST['kotasklh'];
    $tahunlulus = @$_POST['tahunlulus'];
    $provinsisekolah = @$_POST['provinsisekolah'];
    $alamatortu = @$_POST['alamatortu'];
    $kodeposortu = @$_POST['kodeposortu'];
    $nohportu = @$_POST['nohportu'];
    $pekerjaanayah = @$_POST['pekerjaanayah'];
    $pekerjaanibu = @$_POST['pekerjaanibu'];

    if ($namamhs) {
        echo "<strong>Nama:</strong> {$namamhs} <br>";
    }
    
    if ($emailmhs) {
        echo "<strong>Email:</strong> {$emailmhs} <br>";
    }

    if ($namaibu) {
        echo "<strong>Nama Ibu:</strong> {$namaibu} <br>";
    }

    if ($namaayah) {
        echo "<strong>Nama Ayah:</strong> {$namaayah} <br>";
    }

    if ($namasklh) {
        echo "<strong>Nama Sekolah:</strong> {$namasklh} <br>";
    }

    if ($namajrsklh) {
        echo "<strong>Jurusan Sekolah:</strong> {$namajrsklh} <br>";
    }

    if ($kotasklh) {
        echo "<strong>Kota Asal Sekolah:</strong> {$kotasklh} <br>";
    }

    if ($tahunlulus) {
        echo "<strong>Tahun lulus:</strong> {$tahunlulus} <br>";
    }

    if ($provinsisekolah) {
        echo "<strong>provinsi Sekolah:</strong> {$provinsisekolah} <br>";
    }

    if ($alamatortu) {
        echo "<strong>alamat ortu:</strong> {$alamatortu} <br>";
    }

    if ($kodeposortu) {
        echo "<strong>Kode pos orang tua:</strong> {$kodeposortu} <br>";
    }

    if ($nohportu) {
        echo "<strong>nomor hp orang tua:</strong> {$nohportu} <br>";
    }

    if ($pekerjaanayah) {
        echo "<strong>Pekerjaan Ayah:</strong> {$pekerjaanayah} <br>";
    }

    if ($pekerjaanibu) {
        echo "<strong>Pekerjaan Ibu:</strong> {$pekerjaanibu} <br>";
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>