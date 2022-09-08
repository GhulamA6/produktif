<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Input'])){

    // ambil data dari formulir
    $charles_29_mar_nim = $_POST['nim'];
    $charles_29_mar_nama = $_POST['nama_mahasiswa'];
    $charles_29_mar_jk = $_POST['jenis_kelamin'];
    $charles_29_mar_jurusan = $_POST['jurusan'];
    $charles_29_mar_smr = $_POST['semester'];
    $charles_29_mar_mkul = $_POST['mata_kuliah'];
    $charles_29_mar_tugas = $_POST['nilai_tugas'];
    $charles_29_mar_quiz = $_POST['nilai_quiz'];
    $charles_29_mar_uts = $_POST['nilai_uts'];
    $charles_29_mar_uas = $_POST['nilai_uas'];
    $charles_29_mar_etika = $_POST['nilai_etika'];
    
/**==============untuk ambil nilai total dari tugas,quiz,uts,uas,dan etika=========== */
  $charles_29_mar_total_nilai=($charles_29_mar_tugas*0.20)+($charles_29_mar_quiz*0.15)+($charles_29_mar_uts*0.25)+($charles_29_mar_uas*0.30)+($charles_29_mar_etika*0.10);
/**===============untuk ambil nilai grade dari nilai total===================== */
  if(($charles_29_mar_total_nilai>=90) AND ($charles_29_mar_total_nilai<=100))
  {$charles_29_mar_grade="A";} 
  elseif(($charles_29_mar_total_nilai>=80) AND ($charles_29_mar_total_nilai<=89))
  {$charles_29_mar_grade="A-";}
  elseif(($charles_29_mar_total_nilai>=70) AND ($charles_29_mar_total_nilai<=79))
  {$charles_29_mar_grade="B";} 
  elseif(($charles_29_mar_total_nilai>=60) AND ($charles_29_mar_total_nilai<=69))
  {$charles_29_mar_grade="B-";}
  elseif(($charles_29_mar_total_nilai>=45) AND ($charles_29_mar_total_nilai<=59))
  {$charles_29_mar_grade="C";}
  elseif(($charles_29_mar_total_nilai>=25) AND ($charles_29_mar_total_nilai<=44))
  {$charles_29_mar_grade="D";}
  else
  {$charles_29_mar_grade="E";}
/**==========================untuk ambil nilai bobot dari grade===========  */
  if($charles_29_mar_grade=="A")
  {$charles_29_mar_bobot="4";}
  elseif($charles_29_mar_grade=="A-")
  {$charles_29_mar_bobot="3.5";}
  elseif($charles_29_mar_grade=="B")
  {$charles_29_mar_bobot="3";}
  elseif($charles_29_mar_grade=="B-")
  {$charles_29_mar_bobot="2.5";}
  elseif($charles_29_mar_grade=="C")
  {$charles_29_mar_bobot="2";}
  elseif($charles_29_mar_grade=="D")
  {$charles_29_mar_bobot="1";}
  else
  {$charles_29_mar_bobot="0";}
/**===================untuk ambil nilai keterangan dari bobot==================== */
  if($charles_29_mar_bobot=="4")
  {$charles_29_mar_keterangan="DENGAN PUJIAN";}
  elseif(($charles_29_mar_bobot>=3) AND ($charles_29_mar_bobot<=3.5))
  {$charles_29_mar_keterangan="SANGAT MEMUASKAN";}
  elseif(($charles_29_mar_bobot>=2.5) AND ($charles_29_mar_bobot<=3))
  {$charles_29_mar_keterangan="MEMUASKAN";}
  elseif(($charles_29_mar_bobot>=2) AND ($charles_29_mar_bobot<=2.5))
  {$charles_29_mar_keterangan="CUKUP";}
  else
  {$charles_29_mar_keterangan="GAGAL DAN MENGULANG";}

  
    // buat query
    $sql = "INSERT INTO daftar_nilai (nim,nama_mahasiswa,jenis_kelamin,jurusan,semester,mata_kuliah,nilai_tugas,nilai_quiz,nilai_uts,nilai_uas,nilai_etika,total_nilai,grade,bobot,keterangan) VALUE ('$charles_29_mar_nim','$charles_29_mar_nama','$charles_29_mar_jk','$charles_29_mar_jurusan','$charles_29_mar_smr','$charles_29_mar_mkul','$charles_29_mar_tugas','$charles_29_mar_quiz','$charles_29_mar_uts',' $charles_29_mar_uas',' $charles_29_mar_etika','$charles_29_mar_total_nilai','$charles_29_mar_grade','$charles_29_mar_bobot','$charles_29_mar_keterangan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location:input_nilai.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: input_nilai.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>