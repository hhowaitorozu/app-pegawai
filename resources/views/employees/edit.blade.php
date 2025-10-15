<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
    <style>
        :root {
            --primary: #2a7de1;
            --background: #f9fafb;
            --text: #333;
            --border: #ddd;
            --radius: 8px;
        }

        body {
            font-family: "Segoe UI", sans-serif;
            background-color: var(--background);
            color: var(--text);
            margin: 0;
            padding: 0;
        }

        header {
            background-color: white;
            border-bottom: 1px solid var(--border);
            padding: 1rem 2rem;
            text-align: center;
        }

        h1, h2 {
            color: var(--primary);
            text-align: center;
            margin-top: 1.5rem;
        }

        form {
            max-width: 600px;
            background-color: white;
            margin: 2rem auto;
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        table {
            width: 100%;
            border-spacing: 0 1rem;
        }

        td:first-child {
            width: 35%;
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        button {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: var(--radius);
            cursor: pointer;
            float: right;
            transition: 0.2s ease;
        }

        button:hover {
            background-color: #1f66b2;
        }

        footer {
            text-align: center;
            padding: 1rem;
            color: #777;
            border-top: 1px solid var(--border);
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>App Pegawai</h1>
    </header>

    <h2>Edit Data Pegawai</h2>

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
                <td><input type="text" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon', $employee->nomor_telepon) }}"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea id="alamat" name="alamat">{{ old('alamat', $employee->alamat) }}</textarea></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td><input type="date" id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status" id="status">
                        <option value="aktif" {{ old('status', $employee->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="nonaktif" {{ old('status', $employee->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
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

    <footer>
        <p>&copy; {{ date('Y') }} App Pegawai</p>
    </footer>
</body>
</html>
