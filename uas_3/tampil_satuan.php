<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from satuan");
include('header.php')
?>
</br>
<h1><center> DAFTAR SATUAN </center></h1>
<table class="table table-bordered" border="1">
  <tr>
    <td>No</td>
    <td>Nama</td>
    <td colspan="4">Action</td>
  </tr>
<?php
  $no=1;
  while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['nama_satuan'];?></td>
      <td><a href="edit_satuan.php?id_satuan=<?php echo $tampil ['id_satuan'];?>">Edit</a></td>
     <td><a href="hapus_satuan.php?id_satuan=<?php echo $tampil ['id_satuan'];?>">hapus</a></td>
  </tr>
<?php }?>
</table>
<input type='button'value='Tambah satuan'onClick='top.location="input_satuan.php"'class='btn btn-success btn-sm '>
<?php
include ("footer.php");
?>