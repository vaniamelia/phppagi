<?php
include ("koneksi.php");
session_start();
if(!($_SESSION['username'])){
  echo "<SCRIPT>alert('silahkan login terlebih dahulu !');window.location='index.php'</SCRIPT>";
}
$query_view=mysqli_query($koneksi,"select * from barang");
?>
</br>
<?php
if($_SESSION['level']=="admin"){
  echo '<a href="input_barang.php" class="btn btn-danger">Tambah barang</a>';
}?> <a href="home.php">Halaman Utama</a>
<table class="table table-bordered" border="1">
  <tr>
    <td>No</td>
    <td>id_kategori</td>
    <td>Nama</td>
    <td colspan="4">Action</td>
    <?php if($_SESSION['level']=="admin")?>
  </tr>
  <?php
  $no=1;
  while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['id_kategori'];?></td>
      <td><?php echo $tampil ['nama'];?></td>
      <?php if($_SESSION['level']=="admin"){ echo '<td><a href="edit_barang.php?id_barang='.$tampil ['id_barang'].'">Edit</a></td>';
      echo '<td><a href="hapus_barang.php?id_barang='.$tampil ['id_barang'].'" onclick="return confirm("yakin keluar?")">hapus</a></td>';}?>
  </tr>
<?php }?>

</table>