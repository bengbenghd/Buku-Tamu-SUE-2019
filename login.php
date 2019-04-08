<!DOCTYPE html>
<html>
<head>
	<title>Lapangan Basket</title>
	<!-- link untuk css -->
	<link rel="stylesheet" type="text/css" href="public/css/style2.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>LOGIN</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<!-- form-nya ngambil aksi dari cek-login.php dengan metode post-->
		<form action="cek-login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>

<!-- script javascript untuk form user dan pass tidak boleh kosong -->
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</html>