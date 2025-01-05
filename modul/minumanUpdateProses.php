<?php
// Skrip Proses Update
// cek apakah tombol update sudah diklik atau belum?
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // validasi field nama minuman
    if (empty($nama_minuman) || strlen($nama_minuman) == 0) {
        echo "<script>window.alert('Field is required'); window.location='?page=minuman';</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_minuman)) {
        echo "<script>window.alert('Only letters and white space allowed'); window.location='?page=minuman';</script>";
    // validasi field daerah minuman
    } elseif (empty($daerah_minuman) || strlen($daerah_minuman) == 0) {
        echo "<script>window.alert('Field is required'); window.location='?page=minuman';</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_minuman)) {
        echo "<script>window.alert('Only letters and white space allowed'); window.location='?page=minuman';</script>";
    } else {
        // update data
        $query = "UPDATE tbl_minuman SET nama_minuman='$nama_minuman', daerah_minuman='$daerah_minuman' WHERE id_minuman='$id'";
        $sql = mysqli_query($conn, $query);

        // apakah proses update berhasil?
        if ($sql) {
            echo "<script>window.alert('Data berhasil diupdate!'); window.location='?page=minuman';</script>";
        } else {
            echo "<script>window.alert('Gagal update data!'); window.location='?page=minuman';</script>";
        }
    }
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
        }
    </style>
</head>
<body>
    <!-- Your form and other content go here -->
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

        <label for="nama_minuman">Nama Minuman:</label>
        <input type="text" id="nama_minuman" name="nama_minuman" required><br><br>

        <label for="daerah_minuman">Daerah Minuman:</label>
        <input type="text" id="daerah_minuman" name="daerah_minuman" required><br><br>

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
