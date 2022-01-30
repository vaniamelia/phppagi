<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from kategori");
include('header.php')
?>
</br>
<h1><center> DAFTAR KATEGORI </center></h1>
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
      <td><?php echo $tampil ['nama_kategori'];?></td>
      <td><a href="edit_kategori.php?id_kategori=<?php echo $tampil ['id_kategori'];?>">Edit</a></td>
     <td><a href="hapus_kategori.php?id_kategori=<?php echo $tampil ['id_kategori'];?>">hapus</a></td>
  </tr>
<?php }?>
</table>
<input type='button'value='Tambah Kategori'onClick='top.location="input_kategori.php"'class='btn btn-success btn-sm '>
<?php
include ("footer.php");
?>