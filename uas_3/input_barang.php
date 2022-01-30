<?php
include("koneksi.php");
if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into barang(nama,id_kategori,id_satuan)
	values(
	'".$_POST['nama']."',
	'".$_POST['id_kategori']."',
	'".$_POST['id_satuan']."')");
	
	if($query_input){
	header('location:tampil_barang.php');
	}else{
		echo mysqli_error();
	}
	}	
include('header.php');
?>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>NAMA</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
	<td>ID Kategori</td>
		<td><select class="form-control" name="id_kategori">
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_kategori = mysqli_query ($koneksi, "Select * from kategori" ) or die
			(mysql_error($koneksi));
			while ($id_kategori = mysqli_fetch_array($sql_kategori)) {
				echo '<option value="'.$id_kategori['id_kategori'].'">'.$id_kategori['id_kategori'].'</option>';
			} ?>
		</select></td>
		</tr>
		<tr>
	<td>ID Satuan</td>
		<td><select class="form-control" name="id_satuan">
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_satuan = mysqli_query ($koneksi, "Select * from satuan" ) or die
			(mysql_error($koneksi));
			while ($id_satuan = mysqli_fetch_array($sql_satuan)) {
				echo '<option value="'.$id_satuan['id_satuan'].'">'.$id_satuan['id_satuan'].'</option>';
			} ?>
		</select></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
	
</table>
</form><input type='button'value='Tambah kategori'onClick='top.location="input_kategori.php"'class='btn btn-success btn-sm'>
<input type='button'value='Tambah Satuan'onClick='top.location="input_satuan.php"'class='btn btn-success btn-sm'>
</form>
<?php
include('footer.php');
?>