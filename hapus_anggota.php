<?php
include("koneksi.php");
$query_delete=mysqli_query($koneksi,"delete from anggota where id_anggota='".$_GET['id_anggota']."'");
if($query_delete){
  header("location:view_anggota.php");
}else{
  echo mysqli_error();
}