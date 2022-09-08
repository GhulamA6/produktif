<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR TABEL NILAI MAHASISWA | STMIK ROYAL KISARAN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header3">
<header>
        <h1 id="daftar">HASIL DAFTAR NILAI YANG SUDAH DI INPUT DALAM SISTEM</h1>
</header>
</div>
   
    <div class="menu2">
    <nav>      
    <ul>
       
        <li><a href="index.php">HOME</a></li>
        <li><a href="input_nilai.php">INPUT NILAI</a></li>
    </ul>        
    </nav>  
    </div> 

<div>
<table class="table1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th id="nama">Nama Mahasiswa</th>
            <th id="jk">Jenis Kelamin</th>
            <th id="jurusan">Jurusan</th>
            <th>Smtr</th>
            <th id="mk">Matakuliah</th>
            <th>Nilai Tugas</th>
            <th>Nilai Quiz</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Etika</th>
            <th>Total Nilai</th>
            <th>Grade</th>
            <th>Bobot</th>
            <th>Ket</th>
            <th>Aksi</th>
            
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM daftar_nilai";
        $query = mysqli_query($db, $sql);

        while($charles_29_mar_mahasiswa = mysqli_fetch_array($query)){
        
            echo "<tr>";
            echo "<td>".$charles_29_mar_mahasiswa['id']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['nim']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['nama_mahasiswa']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['jenis_kelamin']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['jurusan']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['semester']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['mata_kuliah']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['nilai_tugas']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['nilai_quiz']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['nilai_uts']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['nilai_uas']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['nilai_etika']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['total_nilai']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['grade']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['bobot']."</td>";
            echo "<td>".$charles_29_mar_mahasiswa['keterangan']."</td>";


            echo "<td>";
            echo "<a href='hapus.php?id=".$charles_29_mar_mahasiswa['id']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    </div>
    
    <p id="jlh">Total: <?php echo mysqli_num_rows($query) ?></p><br>

    <marquee><p id="pesan"> UNTUK MAHASISWA YANG GAGAL DAN MENGULANG SILAHKAN HUBUNGI DOSEN MASING-MASING</P></marquee>
    
    <div class="footer">
    <p class="tengah">CharlesNababan@2020</p>   
    </div >  
</body>
</html>
