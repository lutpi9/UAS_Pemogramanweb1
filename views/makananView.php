<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fffaf3; /* Cream background */
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #d63384; /* Pink title */
        }

        .btn-add {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background-color: #f8d7da; /* Soft pink button */
            color: #842029;
            text-decoration: none;
            border-radius: 5px;
            border: 1px solid #f5c2c7;
        }

        .btn-add:hover {
            background-color: #f5c2c7; /* Slightly darker pink */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #d63384; /* Pink border */
        }

        th {
            background-color: #f8d7da; /* Soft pink */
            color: #842029; /* Darker pink text */
        }

        tr:nth-child(even) {
            background-color: #ffe5e9; /* Light pink for even rows */
        }

        tr:nth-child(odd) {
            background-color: #fffaf3; /* Cream for odd rows */
        }

        .btn-action {
            color: #d63384;
            text-decoration: none;
        }

        .btn-action:hover {
            text-decoration: underline;
        }

        .total {
            text-align: right;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h2>Data Makanan</h2>

    <!-- Tombol Tambah Data Baru -->
    <a href="?page=makananAdd" class="btn-add">[+] Tambah Data Baru</a>

    <!-- Tabel Data -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Makanan</th>
                <th>Daerah Makanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "includes/config.php";
            $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
            $sql = mysqli_query($conn, $query);
            $nomor = 1;
            while ($data = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $data["nama_makanan"] ?></td>
                    <td><?= $data["daerah_makanan"] ?></td>
                    <td>
                        <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>" class="btn-action">Edit</a> | 
                        <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" class="btn-action" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Total Data -->
    <p class="total">Total: <?= mysqli_num_rows($sql) ?></p>
</body>

</html>
