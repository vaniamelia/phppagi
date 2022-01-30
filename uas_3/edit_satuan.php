<?php
include("koneksi.php");
if(isset($_POST['save'])){
$query_edit=mysqli_query($koneksi,"update satuan set
 
	nama_satuan='".$_POST['nama_satuan']."'
	WHERE id_satuan ='".$_POST['id_satuan']."'");
if($query_edit){
	header("location:tampil_satuan.php");
}else{
	echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi,"select * from satuan where id_satuan='".$_GET['id_satuan']."'");
$hasil_data=mysqli_fetch_array($tampil);
include("header.php");
?>
<form method="POST">
<table class="table table-bordered" border="1">
  <input type="hidden" name="id_satuan" value="<?php echo $hasil_data['id_satuan'];?>">	
	<tr>
    <td>Nama</td>
		<td><input type="text" name="nama_satuan" class="form-control" value="<?php echo $hasil_data['nama_satuan'];?>"></td>
	</tr>		
	<tr>
		<td><input type="submit" value="rubah data" name="save"></td>
	</tr>
</table>
</form>
<?php
include("footer.php");
?>