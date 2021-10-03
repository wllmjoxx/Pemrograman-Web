<?php
    include 'index copy.php';

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
        echo "<strong>Alamat:</strong> {$emailmhs} <br>";
    }

    if ($namaibu) {
        echo "<strong>Alamat:</strong> {$namaibu} <br>";
    }

    if ($namaayah) {
        echo "<strong>Alamat:</strong> {$namaayah} <br>";
    }

    if ($namasklh) {
        echo "<strong>Alamat:</strong> {$namasklh} <br>";
    }

    if ($namajrsklh) {
        echo "<strong>Alamat:</strong> {$namajrsklh} <br>";
    }

    if ($kotasklh) {
        echo "<strong>Alamat:</strong> {$kotasklh} <br>";
    }

    if ($tahunlulus) {
        echo "<strong>Alamat:</strong> {$tahunlulus} <br>";
    }

    if ($provinsisekolah) {
        echo "<strong>Alamat:</strong> {$provinsisekolah} <br>";
    }

    if ($alamatortu) {
        echo "<strong>Alamat:</strong> {$alamatortu} <br>";
    }

    if ($kodeposortu) {
        echo "<strong>Alamat:</strong> {$kodeposortu} <br>";
    }

    if ($nohportu) {
        echo "<strong>Alamat:</strong> {$nohportu} <br>";
    }

    if ($pekerjaanayah) {
        echo "<strong>Alamat:</strong> {$pekerjaanayah} <br>";
    }

    if ($pekerjaanibu) {
        echo "<strong>Alamat:</strong> {$pekerjaanibu} <br>";
    }
?>