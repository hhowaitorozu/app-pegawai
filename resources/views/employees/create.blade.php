<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Pegawai</title>

    <style>
        :root {
            --bg: #ffffff;
            --card: #f7f8fa;
            --text: #1f2937;
            --muted: #6b7280;
            --accent: #0f6f8b;
            --accent-weak: rgba(15, 111, 139, 0.1);
            --border: #e6e9ee;
            --radius: 10px;
            --shadow: 0 6px 18px rgba(31, 41, 55, 0.06);
            --max-width: 800px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI",
                Roboto, "Helvetica Neue", Arial;
            background: var(--bg);
            color: var(--text);
            line-height: 1.5;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 2rem;
        }

        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.6rem;
            color: var(--accent);
        }

        form {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 2rem;
            width: 100%;
            max-width: var(--max-width);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 0.75rem 0.5rem;
            vertical-align: top;
        }

        label {
            font-weight: 500;
            color: var(--muted);
        }

        input,
        select,
        textarea,
        button {
            font: inherit;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 0.6rem 0.75rem;
            width: 100%;
            background: white;
            color: var(--text);
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--accent);
            box-shadow: 0 6px 18px rgba(15, 111, 139, 0.08);
        }

        textarea {
            resize: vertical;
            min-height: 70px;
        }

        button {
            background: var(--accent);
            color: #fff;
            border: none;
            padding: 0.7rem 1.2rem;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.1s ease;
        }

        button:hover {
            background: #0d607a;
            transform: translateY(-1px);
        }

        button:active {
            transform: scale(0.98);
        }

        @media (max-width: 700px) {
            body {
                padding: 1rem;
            }

            form {
                padding: 1.2rem;
            }

            td {
                display: block;
                width: 100%;
            }

            td:first-child {
                margin-top: 1rem;
            }

            table {
                display: block;
            }
        }
    </style>
</head>

<body>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <h1>Form Pegawai</h1>
        <table>
            <tr>
                <td><label for="nama_lengkap">Nama Lengkap</label></td>
                <td><input type="text" id="nama_lengkap" name="nama_lengkap" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="nomor_telepon">Nomor Telepon</label></td>
                <td><input type="text" name="nomor_telepon" id="nomor_telepon" required></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><textarea id="alamat" name="alamat" required></textarea></td>
            </tr>
            <tr>
                <td><label for="tanggal_masuk">Tanggal Masuk</label></td>
                <td><input type="date" id="tanggal_masuk" name="tanggal_masuk" required></td>
            </tr>
            <tr>
                <td><label for="status">Status</label></td>
                <td>
                    <select name="status" id="status" required>
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right; padding-top: 1rem;">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
