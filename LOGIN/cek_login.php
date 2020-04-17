<?php
include "../FUNCTION/function.php";//memasukkan koneksi
$user=$_POST['username'];
$pass=$_POST['password'];
// pastikan username dan password adalah berupa huruf atau angka.
if (ctype_alnum($user) OR ctype_alnum($pass)){
	$login=mysqli_query($connect,"SELECT * FROM user WHERE username ='$user' AND password ='$pass'");
	$ketemu=mysqli_num_rows($login);
	if($ketemu>0){	
		$r=mysqli_fetch_array($login);
		session_start();
		$_SESSION['username']=$r['username'];
		$_SESSION['password']=$r['password'];	
		$_SESSION['login'] = true;
		header('location: dasboard.php');
	}else{
		header('location: ../FRONT-END/log_index.php?login-gagal');
	}
}
else{
	header('location:../FRONT-END/log_index.php?user='.$user.'pass='.$pass.'');
}
?>