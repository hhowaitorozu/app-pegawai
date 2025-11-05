<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Departemen</title>
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
            max-width: 900px;
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

        .btn-add {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-add:hover {
            background: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background: #e9ecef;
            color: #333;
            border-bottom: 2px solid #dee2e6;
        }

        tr:nth-child(even) {
            background: #f8f9fa;
        }

        tr:hover {
            background: #f1f1f1;
        }

        .btn-action {
            display: inline-block;
            border: none;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 13px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 4px;
        }

        .btn-info {
            background: #17a2b8;
            color: #fff;
        }

        .btn-warning {
            background: #ffc107;
            color: #333;
        }

        .btn-danger {
            background: #dc3545;
            color: #fff;
        }

        .btn-info:hover { background: #117a8b; }
        .btn-warning:hover { background: #e0a800; }
        .btn-danger:hover { background: #bd2130; }

        .no-data {
            text-align: center;
            padding: 15px;
            color: #666;
        }

        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .alert {
            background: #d1e7dd;
            border-left: 5px solid #0f5132;
            color: #0f5132;
            padding: 10px 12px;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        button {
            cursor: pointer;
        }
    </style>
</head>

<body>
    @extends('master')
    @section('title', 'Daftar Departemen')
    @section('content')

    <div class="container">
        <div class="header">
            <h1>Daftar Departemen</h1>
            <a href="{{ route('departments.create') }}" class="btn-add">+ Tambah Departemen</a>
        </div>

        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th style="width:5%">No</th>
                    <th>Nama Departemen</th>
                    <th>Dibuat Pada</th>
                    <th style="width:18%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($departments as $key => $dept)
                <tr>
                    <td>{{ $departments->firstItem() + $key }}</td>
                    <td>{{ $dept->nama_departemen }}</td>
                    <td>{{ $dept->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('departments.show', $dept->id) }}" class="btn-action btn-info">Detail</a>
                        <a href="{{ route('departments.edit', $dept->id) }}" class="btn-action btn-warning">Edit</a>
                        <form action="{{ route('departments.destroy', $dept->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus departemen ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="no-data">Tidak ada data departemen</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pagination">
            {{ $departments->links() }}
        </div>
    </div>

    @endsection
</body>
</html>
