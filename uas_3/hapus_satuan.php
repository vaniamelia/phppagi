<?php
include("koneksi.php");
$query_delete=mysqli_query($koneksi,"delete from satuan where id_satuan='".$_GET['id_satuan']."'");
if($query_delete){
  header("location:tampil_satuan.php");
}else{
  echo mysqli_error();
}