<!DOCTYPE HTML>
<html>
   <head>
	  <title>Apotek</title>
   </head>
   <body>
		<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="gagal"){
					echo "<h3 style='color:red';>Username dan Password tidak sesuai !</h3>";
				}
			}
		?>
		<form action="loginAction.php" method="post">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" placeholder="Username" required /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"  placeholder="Password" required /></td>
				<tr>
					<td colspan="2" align="right"><input type="submit" value="LOGIN"></td>
				</tr>
			</table>
		</form>
   </body>
</html>