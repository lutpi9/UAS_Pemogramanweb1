<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Minuman</title>
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

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #d63384; /* Pink border */
        }

        th {
            background-color: #f8d7da; /* Soft pink */
            color: #842029; /* Dark pink text */
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
    <h2>Data Minuman</h2>

    <!-- Tombol Tambah Data Baru -->
    <a href="?page=minumanAdd" class="btn-add">[+] Tambah Data Baru</a>

    <!-- Tabel Data -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Minuman</th>
                <th>Daerah Minuman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "includes/config.php";
            $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
            $sql = mysqli_query($conn, $query);
            $nomor = 1;
            if (mysqli_num_rows($sql) == 0) { ?>
                <tr>
                    <td colspan="4" style="text-align: center;"><i>No data</i></td>
                </tr>
            <?php
            } else {
                while ($data = mysqli_fetch_array($sql)) {
            ?>
                    <tr>
                        <td><?= $nomor++; ?></td>
                        <td><?= $data["nama_minuman"] ?></td>
                        <td><?= $data["daerah_minuman"] ?></td>
                        <td>
                            <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>" class="btn-action">Edit</a> | 
                            <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" class="btn-action" onclick="return confirm('Yakin ingin menghapus data ini ?');">Hapus</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>

    <!-- Total Data -->
    <p class="total">Total: <?= mysqli_num_rows($sql) ?></p>
</body>

</html>
