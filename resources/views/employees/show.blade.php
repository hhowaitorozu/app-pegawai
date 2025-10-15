<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
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

        h1 {
            color: var(--primary);
            text-align: center;
            margin-top: 1.5rem;
        }

        .container {
            max-width: 700px;
            margin: 2rem auto;
            background-color: white;
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th, td {
            text-align: left;
            padding: 0.75rem;
            border-bottom: 1px solid var(--border);
        }

        th {
            width: 35%;
            background-color: #f0f4f8;
            color: var(--primary);
            font-weight: 600;
        }

        td {
            background-color: #fff;
        }

        .status {
            font-weight: 500;
        }

        .status.aktif {
            color: green;
        }

        .status.nonaktif {
            color: #999;
        }

        a {
            display: inline-block;
            margin-top: 1rem;
            text-decoration: none;
            background-color: var(--primary);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: var(--radius);
            transition: 0.2s ease;
        }

        a:hover {
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

    <div class="container">
        <h1>Detail Pegawai</h1>
        <table>
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
                <td>
                    <span class="status {{ $employees->status == 'aktif' ? 'aktif' : 'nonaktif' }}">
                        {{ ucfirst($employees->status) }}
                    </span>
                </td>
            </tr>
        </table>

        <a href="{{ route('employees.index') }}">← Kembali ke Daftar</a>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} App Pegawai</p>
    </footer>
</body>
</html>
