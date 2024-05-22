<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forum</title>
    <link rel="stylesheet" href="ff.css">
</head>
<body>
<h1>Pendaftaran</h1>

<form action="" method = "post">
    <table>
        <tr>
            <td width = "130">ID</td>
            <td><input type="number" name = "ID"></td>
        </tr>
        <tr>
            <td>Nama User</td>
            <td><input type="text" name = "Namauser"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name = "Email"></td>
            </tr>
            <tr><td>Email</td>
                <td><input type="text" name = "Password"></td>
            </tr> 
        <tr>
            <td></td>
            <td><input type="submit" value = "Simpan" name = "proses"></td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
    include "koneksi.php";

    if (isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into forum set
    ID ='$_POST[ID]',
    Namauser ='$_POST[Namauser]',
    Email='$_POST[Email]',
    Password='$_POST[Password]'");

        echo "Data barang baru telah tersimpan";
}

?>

