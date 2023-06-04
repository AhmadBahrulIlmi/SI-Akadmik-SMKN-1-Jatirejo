<!DOCTYPE html>
<html>
<head>
    <title>Data Admin</title>
    <style>
      @page {
            size: landscape;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        thead {
            background-color: #f5f5f5;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #eaeaea;
        }
    </style>
</head>
<body>
    <h1>Data Admin</h1>
    <table>
        <thead>
          <tr>
            <th>Id Admin</th>
            <th>Nama Lengkap</th>
            <th>No Telp</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tb_admin as $data)
          <tr>
            <td>{{ $data->id_admin }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->no_telp }}</td>
            <td>{{ $data->alamat }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
</body>
</html>

