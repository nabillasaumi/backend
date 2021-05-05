<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
    var $agama = "";
    var $jenis_kelamin = "";
    var $alamat = "";
    var $email = "";
    var $no_hp = "";
    var $hobi = "";
	var $database = "profile";
	var $koneksi;
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}
 
 
	function register($username,$password,$agama,$jenis_kelamin,$alamat,$email,$no_hp,$hobi)
	{	
		$insert = mysqli_query($this->koneksi,"insert into acc values ('','$username','$password','$agama','$jenis_kelamin','$alamat','$email','$no_hp','$hobi')");
		return $insert;
	}
 
	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from acc where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
 
	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from acc where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
	}
} 
 
 
?>