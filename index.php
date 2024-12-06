<!DOCTYPE HTML>
<html>
   <head>
	  <title>Apotek</title>
   </head>
   <body>
		<?php
			session_start();
			if(empty($_SESSION['username'])){
				header("location:login.php");
			}
			else{
				echo "<small><p><b>".$_SESSION['username']."</b><a class='link' href='logout.php'><i> (Logout) </i></a></p></small><hr>";
			}
		?>
		<ul type="square">
			<li><a href="selectGolongan.php">Golongan</a></li>
			<li><a href="selectSediaan.php">Sediaan</a></li>
			<li><a href="selectObat.php">Obat</a></li>
		</ul>
   </body>
</html>