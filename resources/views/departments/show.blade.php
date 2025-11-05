<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Departemen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 40px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .btn {
            display: inline-block;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s ease-in-out;
        }

        .btn i {
            margin-right: 5px;
        }

        .btn-warning {
            background: #ffc107;
            color: #333;
        }

        .btn-warning:hover {
            background: #e0a800;
        }

        .btn-secondary {
            background: #6c757d;
            color: #fff;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .btn-danger {
            background: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background: #bd2130;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 10px 6px;
            text-align: left;
        }

        th {
            color: #555;
            width: 30%;
        }

        td {
            color: #222;
        }

        tr:nth-child(even) td {
            background: #f8f9fa;
        }

        hr {
            border: none;
            border-top: 1px solid #dee2e6;
            margin: 20px 0;
        }

        .footer-btns {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
        }

        .footer-btns form {
            display: inline;
        }

        .no-data {
            text-align: center;
            color: #666;
            padding: 15px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 18px;
            }

            .btn {
                font-size: 13px;
                padding: 6px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Detail Departemen</h1>
            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>

        <table>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>: {{ $department->id }}</td>
                </tr>
                <tr>
                    <th>Nama Departemen</th>
                    <td>: <strong>{{ $department->nama_departemen }}</strong></td>
                </tr>
                <tr>
                    <th>Dibuat Pada</th>
                    <td>: {{ $department->created_at->format('d F Y, H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Diperbarui Pada</th>
                    <td>: {{ $department->updated_at->format('d F Y, H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Selisih Waktu</th>
                    <td>: {{ $department->created_at->diffForHumans() }}</td>
                </tr>
            </tbody>
        </table>

        <hr>

        <div class="footer-btns">
            <a href="{{ route('departments.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>

            <div>
                <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('departments.destroy', $department->id) }}" 
                      method="POST" 
                      onsubmit="return confirm('Yakin ingin menghapus departemen ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
