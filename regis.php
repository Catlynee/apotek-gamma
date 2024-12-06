<!DOCTYPE HTML>
<html>
   <head>
	  <title>Registrasi - Apotek</title>
   </head>
   <body>
		<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="username_terpakai"){
					echo "<h3 style='color:red;'>Username sudah terpakai, silakan gunakan username lain!</h3>";
				} else if($_GET['pesan']=="registrasi_gagal"){
					echo "<h3 style='color:red;'>Registrasi gagal, silakan coba lagi!</h3>";
				} else if($_GET['pesan']=="registrasi_berhasil"){
					echo "<h3 style='color:green;'>Registrasi berhasil, silakan login!</h3>";
				}
			}
		?>
		<form action="regisAction.php" method="post">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" placeholder="Username" required /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" placeholder="Password" required /></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" value="REGISTER"></td>
				</tr>
			</table>
		</form>
		<p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
   </body>
</html>
