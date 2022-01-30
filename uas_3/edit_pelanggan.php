<?php
include("koneksi.php");
if(isset($_POST['save'])){
$query_edit=mysqli_query($koneksi,"update pelanggan set
    nama_pelanggan='".$_POST['nama_pelanggan']."',
    no_tlp='".$_POST['no_tlp']."', 
    status='".$_POST['status']."'
	WHERE id_pelanggan ='".$_POST['id_pelanggan']."'");
if($query_edit){
	header("location:tampil_pelanggan.php");
}else{
	echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi,"select * from pelanggan where id_pelanggan='".$_GET['id_pelanggan']."'");
$hasil_data=mysqli_fetch_array($tampil);
include("header.php");
?>
<form method="POST">
<table class="table table-bordered" border="1">
  <input type="hidden" name="id_pelanggan" value="<?php echo $hasil_data['id_pelanggan'];?>">
    <tr>
        <td>Nama Pelanggan</td>
		    <td><input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $hasil_data['nama_pelanggan'];?>"></td>
	    </tr>	
	<tr>
    <tr>
        <td>Nomor Telepon</td>
		    <td><input type="text" name="no_tlp" class="form-control" value="<?php echo $hasil_data['no_tlp'];?>"></td>
	    </tr>	
	<tr>
    <tr>
        <td>Status</td>
		    <td><input type="text" name="status" class="form-control" value="<?php echo $hasil_data['status'];?>"></td>
	    </tr>	
	<tr>
		<td><input type="submit" value="rubah data" name="save"></td>
		</tr>
</table>
</form>
<?php
include("footer.php");
?>