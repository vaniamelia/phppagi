<?php
include 'koneksi.php';

session_start();
$username = $_POST['username'];
$password = md5($_POST['password']);
$login = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
 $data = mysqli_fetch_assoc($login);
	if($data['status']=="1"){
		
		// cek jika user login sebagai admin
		if($data['level']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:home.php");
 
		// cek jika user login sebagai host
		}else if($data['level']=="host"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "host";
			// alihkan ke halaman dashboard host
			header("location:home.php");
 	
		}else{
 
			// alihkan ke halaman login kembali
			header("location:index.php?pesan=gagaluser");
		}	
	}else{
		header("location:index.php?pesan=gagalaktif");
	}
}else{
 
	// alihkan ke halaman login kembali
	header("location:index.php?pesan=gagaluser");
}	


 
?>
