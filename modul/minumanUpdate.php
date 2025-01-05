<?php
require "includes/config.php";
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_minuman WHERE id_minuman=$id";
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
    <title>Update Minuman</title>
    <style>
        body {
            background-color: #f9c8d2; /* Soft pink color */
            font-family: Arial, sans-serif;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 50%;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
        }
        th {
            text-align: center;
            font-size: 1.2em;
        }
        td {
            padding: 10px;
        }
        input[type="text"] {
            padding: 5px;
            width: 100%;
        }
        input[type="submit"], input[type="button"] {
            padding: 10px 15px;
            cursor: pointer;
            background-color: #ff69b4;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #ff1493;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th colspan="3"><u>Update Data Daftar Minuman</u></th>
        </tr>
        <form method="post" action="?page=minumanUpdateProses">
            <!-- menampung nilai id yang akan di edit -->
            <input type="hidden" name="id" value="<?= $data['id_minuman'] ?>" />
            <tr>
                <td style="width: 8em;">Nama Minuman</td>
                <td>:</td>
                <td><input type="text" name="nama_minuman" style="width: 20em;" value="<?= $data['nama_minuman'] ?>"></td>
            </tr>
            <tr>
                <td style="width: 8em;">Jenis Minuman</td>
                <td>:</td>
                <td><input type="text" name="daerah_minuman" style="width: 20em;" value="<?= $data['daerah_minuman'] ?>"></td>
            </tr>
            <tr style="margin-top: 1em;">
                <td></td>
                <td></td>
                <td colspan="3" style="padding: 0.5em;">
                    <input type="submit" name="update" value="Update">
                    <input type="button" value="Cancel" onClick="document.location='?page=minuman'">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>
