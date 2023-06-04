<!DOCTYPE html>
<html>
<head>
    <title>Data Jadwal</title>
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
    <h1>Data Jadwal</h1>
    <table>
        <thead>
          <tr>
            <th>Hari</th>
            <th>Jam</th>
            <th>Jurusan</th>
            <th>Mata Pelajaran</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tb_jadwal as $data)
          <tr>
              <td>{{ $data->hari }}</td>
              <td>{{ $data->jam}}</td>
              <td>{{ $data->tb_datajurusan->nama_jurusan}}</td>
              <td>{{ $data->tb_datamapel->nama_mapel}}</td>
          <tr>
          @endforeach
        </tbody>
    </table>
</body>
</html>

