<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from pelanggan");
include('header.php')
?>
</br>
<h1><center> DAFTAR PELANGGAN </center></h1>
<table class="table table-bordered" border="1">
  <tr>
    <td>No</td>
    <td>Nama Pelanggan</td>
    <td>Nomor Telepon</td>
    <td>Status</td>
    <td colspan="4">Action</td>
  </tr>
<?php
  $no=1;
  while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['nama_pelanggan'];?></td>
      <td><?php echo $tampil ['no_tlp'];?></td>
      <td><?php echo $tampil ['status'];?></td>
      <td><a href="edit_pelanggan.php?id_pelanggan=<?php echo $tampil ['id_pelanggan'];?>">Edit</a></td>
     <td><a href="hapus_pelanggan.php?id_pelanggan=<?php echo $tampil ['id_pelanggan'];?>">hapus</a></td>    
    </tr>
<?php }?>
</table>
<input type='button'value='Tambah Pelanggan'onClick='top.location="input_pelanggan.php"'class='btn btn-success btn-sm '>
<?php
include ("footer.php");
?>