<?php
include "koneksi.php";
$nama=$_POST['nama'];
$cities=$_POST['cities'];
$tglLahir=$_POST['tanggal_lahir'];
$noHp=$_POST['no_handphone'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$pendidikan=$_POST['pendidikan'];
$hobi=$_POST['hobi'];

$query=mysql_query("insert into biodata(full_name,date_of_birth,place_of_birth_id,phone_number,address,last_education,religion,hobby") 
         value($nama,$tglLahir,$cities,$noHp,$alamat,$agama,$hobi);
         if($query){
            echo "Berhasil ditambahkan" 
            ?>
            <a href="tabel.php">Lihat data di Tabel</a>
            <?php
         }else{
             echo "Gagal menambahkan"
             echo mysql_error();
         }
            ?>
