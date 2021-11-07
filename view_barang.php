<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from barang");

?>
<a href="input_barang.php" class="btn btn-danger">Tambah barang</a>
<table class="table table-bordered" border="1">
  <tr>
    <td>NO</td>
    <td>ID KATEGORI</td>
    <td>NAMA</td>
    <td colspan="4">Action</td>
  </tr>
  <?php
  $no=1;
  while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['id_kategori'];?></td>
      <td><?php echo $tampil ['nama'];?></td>
      <td><a href="edit_barang.php?id_barang=<?php echo $tampil ['id_barang'];?>">Edit</a></td>
      <td><a href="hapus_barang.php?id_barang=<?php echo $tampil ['id_barang'];?>">hapus</a></td>
  </tr>
<?php }?>

</table>