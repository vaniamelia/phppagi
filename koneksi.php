<?php
$server="localhost";
$user="root";
$database="phpregpagi";
$password="";

$koneksi=mysqli_connect($server,$user,$password,$database);

if($koneksi){
    echo "koneksi sukses";
}else{
    echo "koneksi gagal";
}
 ?>
