<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>PENGAJUAN CUTI</title>
  </head>
  <body>
    <h1><center>MASUKAN DATA ANDA</center></h1>

   
  </body>
<?php
include "koneksi.php";
if (isset ($_POST['save'])) {
	$NIK=$_POST['NIK'];
  $nama=$_POST['nama'];
  $jabatan=$_POST['jabatan'];
	$bagian=$_POST['bagian'];
  $mulai_cuti=$_POST['mulai_cuti'];
	$berakhir_cuti=$_POST['berakhir_cuti'];
	$keterangan=$_POST['keterangan'];
  
$query=mysqli_query($koneksi, "insert into cuti_karyawan (NIK,nama,jabatan,bagian,mulai_cuti,berakhir_cuti,keterangan)
value('$NIK','$nama','$jabatan','$bagian','$mulai_cuti','$berakhir_cuti','$keterangan')");
if ($query){
    header("location:view_cuti.php");
}else{
    echo mysqli_eror();
}
}
?>
<form method="POST" action="">
<table class="table table-bordered table-danger">

	<tr>
  <td><strong> NIK </strong></td>
	<td><input class="form-control"
    placeholder="masukan NIK"
    aria-label="default input example"
    type="varchar"
    name="NIK"></td>
  </tr>

  <tr>
  <td><strong> Nama </strong></td>
	<td><input class="form-control"
    placeholder="masukan nama"
    aria-label="default input example"
    type="varchar"
    name="nama"></td>
  </tr>



	<tr>
  <td><strong> Jabatan </strong></td>
  <td><select name="jabatan"</td>
      <option value="">--Pilih--</option>
      <option value="Manager">Manager</option>
      <option value="Spv">Spv</option>
      <option value="Leader">Leader</option>
      <option value="Staff">Staff</option>
      <option value="Admin">Admin</option>
  </tr>

	<tr>
  <td><strong> Bagian </strong></td>
	<td><select name="bagian"</td>
    <option value="">--Pilih--</option>
    <option value="Hrd">Hrd</option>
    <option value="Produksi">Produksi</option>
    <option value="Marketing">Marketing</option>
  </Select></td>
  </tr>

	<tr>
  <tr>
      <td><strong> Mulai Cuti </strong></td>
  <td><input type="date" name="mulai_cuti"></td>
  </tr>
  <tr>
      <td><strong> Berakhir Cuti </strong></td>
  <td><input type="date" name="berakhir_cuti"></td>
  </tr>


	<tr>
  <td><strong> Keterangan </strong></td>
	<td><input class="form-control"
    placeholder="masukan keterangan"
    aria-label="default input example"
    type="int"
    name="keterangan"></td>
  </tr>

  </table>

<tr>
    <td><input class="btn btn-primary"
    type="submit"
    name="save"
    value="save"></td>
	</tr>
</br></br></br></br>

</form>
</html>