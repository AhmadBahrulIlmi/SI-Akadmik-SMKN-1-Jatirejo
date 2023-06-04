<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai</title>
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
    <h1>Data Nilai Siswa</h1>
    <table>
        <thead>
          <tr>
            <th>Semester</th>
            <th>Nama Siswa</th>
            <th>Mata Pelajaran</th>
            <th>Tugas 1</th>
            <th>Tugas 2</th>
            <th>Tugas 3</th>
            <th>UTS</th>
            <th>UAS</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tb_nilai as $data)
          <tr>
              <th scope="data">{{ $data->semester }}</th>
              <td>{{ $data->tb_siswa->nama}}</td>
              <td>{{ $data->tb_datamapel->nama_mapel}}</td>
              <td>{{ $data->tugas1}}</td>
              <td>{{ $data->tugas2 }}</td>
              <td>{{ $data->tugas3 }}</td>
              <td>{{ $data->uts }}</td>
              <td>{{ $data->uas }}</td>
          <tr>
          @endforeach
        </tbody>
    </table>
</body>
</html>
