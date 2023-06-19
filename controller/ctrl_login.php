<?php 
//untuk memulai session
session_start();

//bangun koneksi ke database
include '../koneksi/koneksi.php';

//tampung isi dari form username
$username = $_POST['username'];

//tampung isi dari form password
$password = $_POST['password'];

//Jika variable tidak kosong
if (!empty($username)&& !empty($password)){

//maka bandingkan dengan data dalam database
	$query = mysqli_query($sambung,"select * from user where username='$username' and password='$password'");

	$result = mysqli_num_rows($query);

		if ($result>0){

			//ini lagi bikin session 	
		   	$_SESSION['username'] = $_POST['username'];
		   	$_SESSION['status'] = "login";
			   header("location:../v_home.php");

			}else{

				$_SESSION['error']="Username atau Password Anda salah";
					header("location:../login.php?app=gagal");
			}

		}else{

		// //mengalihkan ke halaman login 
		$_SESSION['error']="Username atau password tidak boleh kosong";
			header("location:../login.php?app=error");
		}
?>	