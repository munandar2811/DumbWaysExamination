<?php 
include "koneksi.php"; 
$query=mysql_query("select * from biodata"); 
$jumlah=mysql_num_rows($query); 
echo "Jumlah data ada : ".$jumlah; 
?>
<table cellspacing='0'>
        <thead> <tr>
           <th></th>
           <th>Nama</th>
           <th>Tempat Lahir</th>
           <th>Tanggal Lahir</th>
           <th>No. Hp</th>
           <th>Alamat</th>
           <th>Pendidikan Terakhir</th>
           <th>Agama</th>
           <th>Hobi</th>
           <th>Tindakan</th>
         </tr></thead>
         <?php 
            while($row=mysql_fetch_array($query)){ 
            ?> 
         <tbody><tr>
           <td><?php $c=$c+1; ?></td>
           <td><?php $row=['nama'];?></td>
           <td><?php $row=['cities']; ?></td>
           <td><?php $row=['tanggal_lahir']; ?></td>
           <td><?php $row=['no_handphone']; ?></td>
           <td><?php $row=['alamat']; ?></td>
           <td><?php $row=['pendidikan']; ?></td>
           <td><?php $row=['agama'];?></td>
           <td><?php $row=['hobi'];?></td>
           <td> 
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a> 
                <a href="update.php?id=<?php echo $row['id']; ?>">Update</a> 
            </td> 
         </tr></tbody>
         <?php>
            }
            ?>
       </table>
       <br /> 
        <a href="index.html">Input data</a>
