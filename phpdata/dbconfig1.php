
 <h2 style="text-align: center;">DATA</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>JURUSAN</th>    
        </tr>
<?php
 include "koneksi2.php";
 $no=1;
 $ambildata = mysqli_query($koneksi,"select * from siswa");
 while ($tampil = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
    <td>$tampil[id]</td>
    <td>$tampil[nama]</td>
    <td>$tampil[kelas]</td>
    <td>$tampil[jurusan]</td>
    </tr>";
    $no++;
 }
 ?>