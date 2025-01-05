<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Makanan</title>
    <style>
        body {
            background-color: #ffe6e6; /* Soft pink */
            color: #333; /* Warna teks */
            font-family: Arial, sans-serif;
        }
        .form-container {
            background-color: #fff; /* Warna putih untuk form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan ringan */
            max-width: 500px;
            margin: auto;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container input[type="submit"],
        .form-container input[type="reset"] {
            background-color: #ff99cc; /* Soft pink button */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover,
        .form-container input[type="reset"]:hover {
            background-color: #ff66b2; /* Hover effect */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="tambah_makanan.php" method="post">
            <label for="nama_makanan">Nama Makanan:</label>
            <input type="text" name="nama_makanan" id="nama_makanan">
            <label for="daerah_makanan">Daerah Makanan:</label>
            <input type="text" name="daerah_makanan" id="daerah_makanan">
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </div>
</body>
</html>
