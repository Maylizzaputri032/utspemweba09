<?php

$conn = new mysql_connect( "localhost" , "root", "", "elearning");

function registrasi($data){
	global $connect;

	$name = $data["name"];
	$email = $data["email"];
	$password = mysql_real_escape_string($conn, $data["password"]);
	$password_confirmation = mysql_real_escape_string($conn, $data["password_confirmation"]);

	//cek konfirmasi password
	if ($password !== $password_confirmation) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!')
			  </script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, password_default);

	//tambahkan userbaru ke database
	mysql_query($connect, "INSERT INTO user VALUES('', '$name', '$email', '$password')");

	return mysql_affected_rows($connect);
}