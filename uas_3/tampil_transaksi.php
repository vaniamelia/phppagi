<?php
include ("koneksi.php");
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
 <title>Join Table</title>
</head>
<body>
<h1><center> DAFTAR TRANSAKSI </center></h1>
<table class="table table-bordered" border="1">
  <tr>
    <td>No</td>
    <td>Nama Transaksi</td>
    <td>Tanggal Transaksi</td>
    <td>Harga</td>
    <td>Qty</td>
    <td>Diskon</td>
    <td>Nama</td>
    <td>Nama Pelanggan</td>
    <td>No Telepon</td>
    <td>Status</td>
</tr> 
<?php
  $query =mysqli_query($koneksi, "SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan");
  $no=1;
  while($tampil=mysqli_fetch_array($query)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['nama_transaksi'];?></td>
      <td><?php echo $tampil ['tgl_transaksi'];?></td>
      <td><?php echo $tampil ['harga'];?></td>
      <td><?php echo $tampil ['qty'];?></td>
      <td><?php echo $tampil ['diskon'];?></td>
      <td><?php echo $tampil ['nama'];?></td>
      <td><?php echo $tampil ['nama_pelanggan'];?></td>
      <td><?php echo $tampil ['no_tlp'];?></td>
      <td><?php echo $tampil ['status'];?></td>
    <?php }?>
 </table>
 <input type='button'value='Tambah transaksi'onClick='top.location="input_transaksi.php"'class='btn btn-success btn-sm '>
</body>
</html>
<?php
include("footer.php");
?>