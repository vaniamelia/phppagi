<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>LIST CUTI</title>
  </head>
  <body>
    <h1><center>Laporan Cuti Karyawan</center></h1>

  </body>
<?php
include "koneksi.php";

?>
<table class="table table-bordered table-success table-striped">

<tr>

    <td><strong> NO </strong></td>
    <td><strong> NIK </strong></td>
    <td><strong> Nama </strong></td>
    <td><strong> Jabatan </strong></td>
		<td><strong> Bagian </strong></td>
    <td><strong> Mulai cuti</strong></td>
		<td><strong> Berakhir cuti </strong></td>
		<td><strong> Keterangan </strong></td>
    <td><strong> Jenis cuti </strong></td>
    <td><strong> sisa cuti </strong></td>

		
    </tr>
    <?php
    $no=1;
        $query=mysqli_query($koneksi,"select * from cuti_karyawan");
        while ($sisa_cuti=mysqli_fetch_array($query))
        {
        ?>
  
    <tr>
    <td><?php echo $no++;?></td>
		<td><?php echo $sisa_cuti['NIK'];?></td>
    <td><?php echo $sisa_cuti['nama'];?></td>
		<td><?php echo $sisa_cuti['jabatan'];?></td>
		<td><?php echo $sisa_cuti['bagian'];?></td>
    <td><?php echo $sisa_cuti['mulai_cuti'];?></td>
		<td><?php echo $sisa_cuti['berakhir_cuti'];?></td>
    <td><?php echo $sisa_cuti['keterangan'];?></td>
    <td><?php echo $sisa_cuti['jenis_cuti'];?></td>
    <td><?php echo $sisa_cuti['sisa_cuti'];?></td>

    </tr>

        <?php } ?>

</table>
<table class="d-grid gap-2">
	<tr>
	<td><a class="btn btn-primary" href="input_cuti.php" type="button">kembali</a><td>
	</tr>
</table>
</html>