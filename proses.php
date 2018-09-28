<?php
  
error_reporting(0);
	$uss  =$_POST['username'];
	$pass =$_POST['password'];

	$user = array(
		"user" => 'Eko',
				  "pass" => '1234');

	

	if (isset($_POST['submit'])) {
		if ($uss==$user['user'] && $pass==$user['pass']) {
			echo "Log In".$uss."Berhasil <br><br>";
			
			echo "<form method='POST'>
				 	<input type='checkbox' name='hobi[]'' value='Renang'>Renang<br>
					<input type='checkbox'name='hobi[]' value='Menari'>Menari<br>
					<input type='checkbox' name='hobi[]'' value='Memancing'>Memancing<br>
					<input type='checkbox' name='hobi[]'' value='Tidur'>Tidur<br>
					<input type='checkbox' name='hobi[]' value='Ngoding'>Ngoding<br>
					<input type='checkbox' name='hobi[]' value='Main game'>Main game<br>
					<input type='submit' name='submit2'>
				</form>";
		}
		else{
			echo "Username atau password salah";
		}
		
	}
?>
	 
<?php
	if (isset($_POST['submit2'])) {
		$data = $_POST['hobi'];
		echo "Hobby :";
		foreach ($data as $nilai) {
			echo "$nilai, ";
			# code...
		}
			echo "<br>gambar : ";
	}
	?>



