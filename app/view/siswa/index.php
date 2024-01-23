<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa PPLG</title>
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/bootstrap.css">
</head>
<body>
    <h1>Daftar Siswa</h1>

    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?= $data['nama'] ?></td>
        </tr>
    </table>
</body>
</html>