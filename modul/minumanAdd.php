<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Minuman</title>
    <style>
        body {
            background-color: #fffaf3; /* Soft pink color */
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
        input[type="submit"], input[type="reset"], input[type="button"] {
            padding: 10px 15px;
            cursor: pointer;
            background-color: #ff69b4;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover {
            background-color: #ff1493;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th colspan="3"><u>Tambah Data Daftar Minuman</u></th>
        </tr>
        <form method="post" action="?page=minumanAddProses">
            <tr>
                <td style="width: 8em;">Nama Minuman</td>
                <td>:</td>
                <td><input type="text" name="nama_minuman" style="width: 20em;"></td>
            </tr>
            
            <tr>
                <td style="width: 8em;">Jenis Minuman</td>
                <td>:</td>
                <td><input type="text" name="daerah_minuman" style="width: 20em;"></td>
            </tr>
            <tr style="margin-top: 1em;">
                <td></td>
                <td></td>
                <td colspan="3" style="padding: 0.5em;">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                    <input type="button" value="Cancel" onClick="document.location='?page=minuman'">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>
