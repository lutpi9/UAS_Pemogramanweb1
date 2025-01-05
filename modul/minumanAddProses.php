<?php
// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['submit'])) {
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // validasi field nama minuman
    if (empty($nama_minuman) || strlen($nama_minuman) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=minumanAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($nama_minuman))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=minumanAdd'</script>";
    // validasi field daerah minuman
    } elseif (empty($daerah_minuman) || strlen($daerah_minuman) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=minumanAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($daerah_minuman))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=minumanAdd'</script>";
    } else {
        // validasi duplikasi data
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_minuman from tbl_minuman where nama_minuman='$nama_minuman'"));
        if ($cek > 0) {
            echo "<script>window.alert('Data sudah tersedia');window.location='?page=minumanAdd'</script>";
        } else {
            // Prepared Statement for inserting data
            $stmt = $conn->prepare("INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUES (?, ?)");
            $stmt->bind_param("ss", $nama_minuman, $daerah_minuman);

            // Execute query
            if ($stmt->execute()) {
                echo "<script>window.alert('Data berhasil ditambah!'); window.location='?page=minuman';</script>";
            } else {
                echo "<script>window.alert('Gagal menambah data: " . $stmt->error . "'); window.location='?page=minuman';</script>";
            }

            // Close the statement
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minuman Add</title>
    <style>
        body {
            background-color: #f9c8d2; /* Soft pink color */
        }
    </style>
</head>
<body>
    <!-- Your form and other content go here -->
    <form method="POST">
        <label for="nama_minuman">Nama Minuman:</label>
        <input type="text" id="nama_minuman" name="nama_minuman" required><br><br>

        <label for="daerah_minuman">Daerah Minuman:</label>
        <input type="text" id="daerah_minuman" name="daerah_minuman" required><br><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>
