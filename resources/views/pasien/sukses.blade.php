<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      border-collapse: collapse;
      width: 80%;
    }
    .table2 {
      border-collapse: collapse;
      width: 80%;
    }
    
    .table2 td {
      border: 1px solid black;
      padding: 8px;
    }
    .table2 th {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
    .sm-text {
      font-size: 85%;
    }
    .center {
        text-align: center;
    }
  </style>
</head>
<body>
<h2>Data Pasien</h2>

<table border="1" width="100%"> 
    <tr>
        <th>Nama</th>
        <th>Tanggal Pemeriksaan</th>
        <th>Tanggal Lahir/Usia</th>
        <th>Jenis Kelamin</th>
    </tr>
    <tr>
        <td> <?= $nama; ?>  </td>
        <td> <?= $tanggal_pemeriksaan; ?>  </td>
        <td> <?= $tanggal_lahir; ?>  </td>
        <td> <?= $jenis_kelamin; ?>  </td>
    </tr>
</table>

<h3>Hasil Pemeriksaan Pasien</h3>

  <table class="table2">
    <tr>
      <th>Jenis Tes</th>
      <th>Hasil Pemeriksaan</th>
      <th>Normal</th>
    </tr>
    <tr>
      <td>Tekanan darah</td>
      <td></td>
      <td>120/80 mmHg</td>
    </tr>
    <tr>
      <td>Asam urat</td>
      <td></td>
      <td class="sm-text">Pria: < 7 mg/dl | Wanita: < 6 mg/dl</td>
    </tr>
    <tr>
      <td>Kolesterol total</td>
      <td></td>
      <td>< 200 mg/dl</td>
    </tr>
    <tr>
      <td rowspan="3" class="center">Gula darah</td>
      <td rowspan="3"></td>
      <td>Puasa: 70-110 mg/dl</td>
    </tr>
    <tr>
      <td class="sm-text">2 jam setelah makan: 100-150 mg/dl</td>
    </tr>
    <tr>
      <td>Sewaktu/acak: 70-125 mg/dl</td>
    </tr>
  </table>
</body>
</html>