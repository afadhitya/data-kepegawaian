<?php include('connection.php');

$sql = "SELECT * FROM pendidikan";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

 ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Form Kepegawaian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Kepegawaian</h2>
  <form action="action-page-kepegawaian.php" method="POST">
    <div class="form-group">
      <label for="nip">NIP:</label>
      <input type="text" class="form-control" id="nip" placeholder="Masukan NIP" name="nip">
    </div>

    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
    </div>

    <div class="form-group">
      <label for="tanggalLahir">Tanggal Lahir:</label>
      <input type="date" class="form-control" id="tanggalLahir" placeholder="Masukan Tanggal Lahir" name="tanggalLahir">
    </div>

    <div class="form-group">
      <label for="jenisKelamin">Jenis Kelamin:</label><br>
      <label><input type="radio" name="jenisKelamin" id="jenisKelamin" value="Pria"> Pria</label><br>
      <label><input type="radio" name="jenisKelamin" id="jenisKelamin" value="Wanita"> Wanita</label>
    </div>

    <div class="form-group">
      <label for="pendidikan">Pendidikan:</label>
      <select class="form-control" id="pendidikan" name="pendidikan">
        <?php
        while($row = $result->fetch_assoc()) {
          echo "<option>" . $row["JENJANG_PENDIDIKAN"] . "</option>";
        }
        ?>
        
      </select>
    </div>

    <div class="form-group">
      <label for="hobi">Hobi:</label><br>
      <label><input type="checkbox" name="hobi[]" id="hobi" value="Berenang"> Berenang</label><br>
      <label><input type="checkbox" name="hobi[]" id="hobi" value="Membaca Buku"> Membaca Buku</label><br>
      <label><input type="checkbox" name="hobi[]" id="hobi" value="Mendengarkan Musik"> Mendengarkan Musik</label>
    </div>

    <div class="form-group">
      <label for="gaji">Gaji:</label>
      <input type="number" class="form-control" id="gaji" min="1" placeholder="Masukan Gaji" name="gaji">
    </div>

    <div class="form-group">
      <label for="email">E-Mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Masukan E-Mail" name="email">
    </div>

    <div class="form-group">
      <label for="noHP">Nomor HP:</label>
      <input type="text" class="form-control" id="noHP" required pattern="[0-9]{8,13}" placeholder="Masukan Nomor HP" name="noHP">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

<?php
}else {
    echo "0 results";
}
$conn->close();
?>
