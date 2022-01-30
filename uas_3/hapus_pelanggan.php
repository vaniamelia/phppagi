<?php
include("koneksi.php");
$query_delete=mysqli_query($koneksi,"delete from pelanggan where id_pelanggan='".$_GET['id_pelanggan']."'");
if($query_delete){
  header("location:tampil_pelanggan.php");
}else{
  echo mysqli_error();
}