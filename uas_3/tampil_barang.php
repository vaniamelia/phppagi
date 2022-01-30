<?php
  include ("koneksi.php");
  include("header.php");
 ?>
<!DOCTYPE html>
<html>
<head>
 <title>Join Table</title>
</head>
<h1><center> DAFTAR BARANG </center></h1>
<body>
<table class="table table-bordered" border="1">
  <tr>
    <td>No</td>
    <td>Nama Barang</td>
    <td>Kategori</td>
    <td>Satuan</td>
</tr>
<?php
 $query =mysqli_query($koneksi, "SELECT * FROM barang INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori INNER JOIN satuan ON barang.id_satuan = satuan.id_satuan");
 $no=1;
 while($tampil=mysqli_fetch_array($query)){?>
   <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['nama'];?></td>
      <td><?php echo $tampil ['nama_kategori'];?></td>
      <td><?php echo $tampil ['nama_satuan'];?></td>
    </tr> 
    <?php }?>
 </table>
 <input type='button'value='Tambah Barang'onClick='top.location="input_barang.php"'class='btn btn-success btn-sm '>
</body>
</html>
<?php
include("footer.php");
?>