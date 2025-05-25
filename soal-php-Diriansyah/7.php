<?php 
    $NilaiAwal = 75;
    $NilaiPerbaikan = 80;
    echo "Nilai Awal: ". $NilaiAwal . "<br>" . "Nilai Perbaikan: " . $NilaiPerbaikan . "<br><br>";
    $SimpanNilai = $NilaiAwal;
    $NilaiAwal = $NilaiPerbaikan;
    $NilaiPerbaikan = $SimpanNilai;
    echo "Nilai Awal: " . $NilaiAwal . "<br>" . "Nilai Perbaikan: " . $NilaiPerbaikan;
?>