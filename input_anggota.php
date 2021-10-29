<?php
include("koneksi.php");

if (isset($_POST['save'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
		$notelp=$_POST['no_tlpn'];
    $query=mysqli_query($koneksi,"INSERT INTO anggota(nama, alamat, no_tlpn) 
    value ('$nama','$alamat','$notelp')");
if($query) {
    header ("location:view_anggota.php");
} else {
    echo mysqli_error ();

}
}
?>
<form method="POST">
<table class="table table-bordered" border="1">
    <tr>
         <td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>	
	    <tr>
         <td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>	
	    <tr>
         <td>No Telepon</td>
		<td><input type="text" name="no_tlpn" class="form-control"></td>
	</tr>	
	
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>






