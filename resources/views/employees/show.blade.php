<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
</head>

<body>
    <h1>Detail Pegawai</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nama Lengkap</th>
            <td>{{ $employees->nama_lengkap }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $employees->email }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td>{{ $employees->nomor_telepon }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $employees->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $employees->alamat }}</td>
        </tr>
        <tr>
            <th>Tanggal Masuk</th>
            <td>{{ $employees->tanggal_masuk }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $employees->status }}</td>
        </tr>
    </table>
</body>
</html>