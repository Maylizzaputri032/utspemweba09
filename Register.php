<?php

require 'function.php';

if (isset($_POST["register"])) {
	
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('user baru berhasil ditambahkan!')
			 </script>";
	} else {
		echo mysql_error($connect);
	}
}


?>