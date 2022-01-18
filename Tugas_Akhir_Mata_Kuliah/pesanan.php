<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_POST['nama']?></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><?php echo $_POST['jenis']?></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td>:</td>
            <td><?php echo $_POST['nomer']?></td>
        </tr>
        <tr>
            <td>Kab/Kota</td>
            <td>:</td>
            <td><?php echo $_POST['kab/kota']?></td>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td><?php echo $_POST['kecamatan']?></td>
        </tr>
        <tr>
            <td>Desa</td>
            <td>:</td>
            <td><?php echo $_POST['desa']?></td>
        </tr>
        <tr>
            <td>Ukuran</td>
            <td>:</td>
            <td><?php echo $_POST['uk']?></td>
        </tr>
    </table>
</body>
</html>