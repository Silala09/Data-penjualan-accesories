<?php
include_once 'Connection.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM data_game WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    // Validasi Form
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $email = htmlspecialchars($_POST["email"]);
    $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $telepon = htmlspecialchars($_POST["telepon"]);
    $merk_barang = htmlspecialchars($_POST["merk_barang"]);
    $jenis = htmlspecialchars($_POST["jenis"]);
    $gambarlama = $_POST["gambarlama"];

    // Tambahkan Validasi Form sesuai kebutuhan

    // Edit Data
    if (edit($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diedit');
            document.location.href = 'admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diedit');
            document.location.href = 'admin.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit data</title>
    <style>
        body {
            margin: 0;
            padding: 10px;
            background-color: #001f3f;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h1 {
            color: #007bff;
        }

        form {
            background-color: #0d47a1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        form label {
            color: #fff;
            font-weight: bold;
        }

        form input,
        form select {
            background-color: #1565c0;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
        }

        form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px;
            cursor: pointer;
            width: 100%;
        }

        form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <h1>Edit Data Pembeli Laptop</h1>
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
    <div class="col-md-6">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" required autocomplete="off" value="<?= $mhs["nama"] ?>">
    </div>
    <div class="col-md-6">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" required autocomplete="off" value="<?= $mhs["alamat"] ?>">
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="contoh@gmail.com" required autocomplete="off" value="<?= $mhs["email"] ?>">
    </div>
    <div class="col-md-6">
      <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
      <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required autocomplete="off" value="<?= $mhs["tanggal_lahir"] ?>">
    </div>
    <div class="col-md-6">
      <label for="jenis_kelamin" class="form-label">jenis kelamin</label>
      <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required autocomplete="off" value="<?= $mhs["jenis_kelamin"] ?>">
        <option>Laki-laki</option>
        <option>Perempuan</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="telepon" class="form-label">No telepon</label>
      <input type="text" name="telepon" class="form-control" id="telepon" placeholder="08123456789" required autocomplete="off" value="<?= $mhs["telepon"] ?>">
    </div>
    <div class="col-md-6">
      <label for="merk_barang" class="form-label">Merk Barang</label>
      <input type="text" name="merk_barang" class="form-control" id="merk_barang" placeholder="contoh : 2015" required autocomplete="off" value="<?= $mhs["merk_barang"] ?>">
    </div>
    <div class="col-md-6">
      <label for="jenis" class="form-label">Jenis</label>
      <select id="jenis" name="jenis" class="form-select" required autocomplete="off" value="<?= $mhs["jenis"] ?>">
        <option>---</option>
        <option>Langganan</option>
        <option>Peremium</option>
        <option>Permanen</option>
      </select>
    </div>
    <div class="col-12">
      <label for="gambar" class="form-label">Gambar</label><br><img src="image/<?= $mhs["gambar"] ?>" width="50"><br>
      <input type="file" name="gambar" class="form-control" id="gambar" autocomplete="off" value="<?= $mhs["gambar"] ?>">
    </div>
    <div class="col-12 mt-3">
      <button type="submit" name="submit" class="btn btn-primary">Edit</button>
    </div>
  </form>
</body>  

</html>
