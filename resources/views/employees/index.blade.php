<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
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
            max-width: 1000px;
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
            background-color: #f0f4f8;
            color: var(--primary);
            font-weight: 600;
        }

        tr:hover {
            background-color: #f9fcff;
        }

        a {
            color: var(--primary);
            text-decoration: none;
            margin-right: 8px;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 0.4rem 0.8rem;
            border-radius: var(--radius);
            cursor: pointer;
            transition: 0.2s ease;
        }

        button:hover {
            background-color: #c0392b;
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
    @extends('master')
    @section('title', 'Daftar Pegawai')
    @section('content')

    <div class="container">
        <h1>Daftar Pegawai</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->nama_lengkap }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->nomor_telepon }}</td>
                    <td>{{ $employee->tanggal_lahir }}</td>
                    <td>{{ $employee->alamat }}</td>
                    <td>{{ $employee->tanggal_masuk }}</td>
                    <td>
                        @if($employee->status == 'aktif')
                            <span style="color:green;font-weight:500;">Aktif</span>
                        @else
                            <span style="color:#999;">Nonaktif</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('employees.show', $employee->id) }}">Detail</a>
                        <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} App Pegawai</p>
    </footer>

    @endsection
</body>
</html>
