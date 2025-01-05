<?php
require "includes/config.php";
// ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Makanan</title>
    <style>
        body {
            background-color: #f9c8d2; /* Soft pink background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .form-container {
            background-color: #fff; /* White background for the form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 50px auto;
        }
        table {
            width: 100%;
        }
        th {
            text-align: center;
            font-size: 1.5em;
            color: #333;
            padding-bottom: 20px;
        }
        td {
            padding: 10px 5px;
            vertical-align: middle;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"],
        input[type="button"] {
            background-color: #ff99cc; /* Soft pink buttons */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }
        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #ff66b2; /* Darker pink on hover */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <table>
            <tr>
                <th colspan="3"><u>Update Data Daftar Makanan</u></th>
            </tr>
            <form method="post" action="?page=makananUpdateProses">
                <!-- menampung nilai id yang akan di edit -->
                <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />
                <tr>
                    <td style="width: 8em;">Nama Makanan</td>
                    <td>:</td>
                    <td><input type="text" name="nama_makanan" value="<?= $data['nama_makanan'] ?>"></td>
                </tr>
                <tr>
                    <td style="width: 8em;">Daerah Makanan</td>
                    <td>:</td>
                    <td><input type="text" name="daerah_makanan" value="<?= $data['daerah_makanan'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="padding: 0.5em;">
                        <input type="submit" name="update" value="Update">
                        <input type="button" value="Cancel" onClick="document.location='?page=makanan'">
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>
