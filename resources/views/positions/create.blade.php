<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jabatan Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        h1, h5 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            font-size: 14px;
            margin-bottom: 10px;
            transition: border-color 0.2s;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        small {
            color: #6c757d;
            font-size: 12px;
        }

        .text-danger {
            color: #dc3545;
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

        .btn-primary {
            background: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .btn-secondary {
            background: #6c757d;
            color: #fff;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 13px;
            margin-top: -6px;
            margin-bottom: 8px;
        }

        .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
        }

        @media (max-width: 768px) {
            body {
                margin: 20px;
            }
            .container {
                padding: 20px;
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
    @section('title', 'Tambah Jabatan Baru')
    @section('content')

    <div class="container">
        <h5>Tambah Jabatan Baru</h5>
        <form action="{{ route('positions.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama_jabatan">Nama Jabatan <span class="text-danger">*</span></label>
                <input type="text" 
                    id="nama_jabatan" 
                    name="nama_jabatan" 
                    value="{{ old('nama_jabatan') }}" 
                    placeholder="Masukkan nama jabatan"
                    required
                    autofocus>
                @error('nama_jabatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <small>Maksimal 100 karakter</small>
            </div>

            <div class="mb-3">
                <label for="nama_departemen">Nama Departemen <span class="text-danger">*</span></label>
                <input type="text" 
                    id="nama_departemen" 
                    name="nama_departemen" 
                    value="{{ old('nama_departemen') }}" 
                    placeholder="Masukkan nama departemen"
                    required>
                @error('nama_departemen')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <small>Masukkan nama departemen yang sesuai</small>
            </div>

            <div class="d-flex">
                <a href="{{ route('positions.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </div>
        </form>
    </div>

    @endsection
</body>
</html>
