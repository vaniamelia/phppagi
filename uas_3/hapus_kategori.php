<?php
include("koneksi.php");
$query_delete=mysqli_query($koneksi,"delete from kategori where id_kategori='".$_GET['id_kategori']."'");
if($query_delete){
  header("location:tampil_kategori.php");
}else{
  echo mysqli_error();
}