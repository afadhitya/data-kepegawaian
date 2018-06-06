<?php
echo $_POST["nip"];
echo "<br>";
echo $_POST["nama"];
echo "<br>";
echo $_POST["tanggalLahir"];
echo "<br>";
echo $_POST["jenisKelamin"];
echo "<br>";
echo $_POST["pendidikan"];
echo "<br>";
if(!empty($_POST["hobi"])){
	foreach ($_POST["hobi"] as $check) {
		echo $check;
		echo "<br>";
	}
}
echo $_POST["gaji"];
echo "<br>";
echo $_POST["email"];
echo "<br>";
echo $_POST["noHP"];
echo "<br>";
?>