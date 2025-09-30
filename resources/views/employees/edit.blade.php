<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Input Pegawai</title>
</head>

<body>
    <h2 class="mb-4">Edit Data Pegawai</h2>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $employee->nama_lengkap) }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" id="email" name="email" value="{{ old('email', $employee->email) }}"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ old('nomor_telepon)', $employee->nomor_telepon) }}"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir)', $employee->tanggal_lahir) }}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea id="alamat" name="alamat" value="{{ old('alamat', $employee->alamat) }}"></textarea></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td><input type="date" id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk', $employee->tanggal_lahir) }}"></td>
            </tr>
            <tr>
                <td><label for="status">Status:</label></td>
                <td>
                    <select name="status">
                        <option value="aktif" {{ old('status', $employee->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="nonaktif" {{ old('status', $employee->status) == 'tidak aktif' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>