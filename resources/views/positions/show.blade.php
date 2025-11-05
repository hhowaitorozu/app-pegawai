<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jabatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        th, td {
            text-align: left;
            padding: 10px 8px;
        }

        th {
            width: 35%;
            color: #555;
        }

        td {
            color: #333;
        }

        tr:nth-child(even) {
            background: #f8f9fa;
        }

        hr {
            border: none;
            border-top: 1px solid #dee2e6;
            margin: 25px 0;
        }

        .btn {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-secondary {
            background: #6c757d;
            color: #fff;
        }

        .btn-warning {
            background: #ffc107;
            color: #333;
        }

        .btn-danger {
            background: #dc3545;
            color: #fff;
            border: none;
        }

        .btn-secondary:hover { background: #5a6268; }
        .btn-warning:hover { background: #e0a800; }
        .btn-danger:hover { background: #b02a37; }

        .btn-group {
            display: flex;
            gap: 6px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .alert {
            background: #d1e7dd;
            border-left: 5px solid #0f5132;
            color: #0f5132;
            padding: 10px 12px;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            body {
                margin: 20px;
            }
            .container {
                padding: 20px;
            }
            table th, table td {
                font-size: 14px;
                padding: 8px;
            }
            .btn {
                font-size: 13px;
                padding: 6px 10px;
            }
        }
    </style>
</head>

<body>
    @extends('master')
    @section('title', 'Detail Jabatan')
    @section('content')

    <div class="container">
        <h1>Detail Jabatan</h1>

        <table>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>: {{ $position->id }}</td>
                </tr>
                <tr>
                    <th>Nama Jabatan</th>
                    <td>: <strong>{{ $position->nama_jabatan }}</strong></td>
                </tr>
                <tr>
                    <th>Nama Departemen</th>
                    <td>: <strong>{{ $position->nama_departemen }}</strong></td>
                </tr>
                <tr>
                    <th>Dibuat Pada</th>
                    <td>: {{ $position->created_at->format('d F Y, H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Diperbarui Pada</th>
                    <td>: {{ $position->updated_at->format('d F Y, H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Selisih Waktu</th>
                    <td>: {{ $position->created_at->diffForHumans() }}</td>
                </tr>
            </tbody>
        </table>

        <hr>

        <div class="actions">
            <a href="{{ route('positions.index') }}" class="btn btn-secondary">← Kembali</a>
            <div class="btn-group">
                <a href="{{ route('positions.edit', $position->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('positions.destroy', $position->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus jabatan ini?')" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>

    @endsection
</body>
</html>
