<?php
session_start();
if(isset($_session['username'])){
    header ("location:home.php");
}
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagaluser"){
            echo "<SCRIPT>alert('Username dan Password tidak Sesuai !');window.location='index.php'</SCRIPT>";
        }else if($_GET['pesan']=="gagalaktif"){
            echo "<SCRIPT>alert('User Tidak Aktif !');window.locaation='index.php'</SCRIPT>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <style type="text/css">
.login {
    margin: 50px auto;
    border: 2px;
    padding: 10px 10px;
    width: 400px;
}
input[type=text], input[type=password] {
    width: 100%;
    margin: 5px auto;
    padding: 10px;
}
input[type=submit] {
    margin: 5px auto;
    cursor: pointer;
    background: #008992;
    color: #fff;
    border: 1px solid #fff;
    width: 70px;
    padding: 5px;
    float: right;
}
</style>
</head>
<body>
    <div  class="login">
    <center><h2>Login ke Akun</h2></center>
        <form action="cek_login.php" method="post" onSubmit="return validasi()">
        <div>
            <label>Username</label>
		    <input type="text" name="username" id="username" />
        </div>	
        <div>
            <label>Password</label>
	    	<input type="password" name="password" id="password" />
         </div>	
        <div>
            <input type="submit" value="Login" class="tombol">
        </div>
        </form>
    </div>
</body>
<script type="text/javascript">
    function validasi(){
        var username = document.getElementById("username").value;
        var username = document.getElementById("password").value;
        if (username != "" && password!=""){
            return true;
        }else{
            alert('username dan password harus di isi !');
            return false;
        }
    }
</script>
</html>
