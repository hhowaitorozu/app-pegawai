<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Departemen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 40px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        form {
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px 5px;
            vertical-align: top;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        small {
            color: #666;
        }

        .info-box {
            background: #f1f1f1;
            padding: 12px 15px;
            border-radius: 6px;
            font-size: 14px;
            color: #333;
            margin-top: 5px;
        }

        .btn-container {
            text-align: right;
            margin-top: 20px;
        }

        button,
        .btn-back {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            text-decoration: none;
        }

        button:hover,
        .btn-back:hover {
            background: #0056b3;
        }

        .btn-back {
            background: #6c757d;
            margin-right: 8px;
        }

        .text-danger {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Edit Departemen</h2>

    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td><label for="nama_departemen">Nama Departemen <span class="text-danger">*</span></label></td>
                <td>
                    <input type="text"
                        id="nama_departemen"
                        name="nama_departemen"
                        value="{{ old('nama_departemen', $department->nama_departemen) }}"
                        placeholder="Masukkan nama departemen"
                        required
                        autofocus
                        maxlength="100">
                    @error('nama_departemen')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                    <small>Maksimal 100 karakter</small>
                </td>
            </tr>

            <tr>
                <td>Informasi Tambahan</td>
                <td>
                    <div class="info-box">
                        <strong>Dibuat pada:</strong> {{ $department->created_at->format('d/m/Y H:i:s') }}<br>
                        <strong>Diperbarui pada:</strong> {{ $department->updated_at->format('d/m/Y H:i:s') }}
                    </div>
                </td>
            </tr>
        </table>

        <div class="btn-container">
            <a href="{{ route('departments.index') }}" class="btn-back">Kembali</a>
            <button type="submit">Update</button>
        </div>
    </form>
</body>

</html>
