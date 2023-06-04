<!DOCTYPE html>
<html>
<head>
    <title>Data Guru</title>
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
    <h1>Data Guru</h1>
    <table>
        <thead>
          <tr>
            <th>Id Guru</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tgl Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Email</th>
            <th>Jabatan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tb_guru as $data)
          <tr>
            <td>{{ $data->id_guru }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->jenis_kelamin}}</td>
            <td>{{ $data->tgl_lahir }}</td>
            <td>{{ $data->agama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_tlp }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->jabatan }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
</body>
</html>

