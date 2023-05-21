<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemeriksaan</title>
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
  <h3>Biodata Pasien</h3>

  <form method="post" action="{{ route('pasien/sukses') }}">
  @csrf
  <table>
    <tr>
      <td><label for="nama">Nama</label></td>
      <td>:</td>
      <td><input type="text" id="nama" name="nama" required></td>
    </tr>
    <tr>
    <td><label for="tanggal_pemeriksaan">Tanggal Pemeriksaan</label></td>
      <td>:</td>
      <td><input type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" required></td>
    </tr>
    <tr>
    <td><label for="tanggal_lahir">Tanggal Lahir/Usia</label></td>
      <td>:</td>
      <td><input type="text" id="tanggal_lahir" name="tanggal_lahir" required>
    </td>
    </tr>
    <tr>
            <td><label>Jenis Kelamin</label></td>
            <td>:</td>
            <td>
            <input type="radio" id="jenis_kelamin_wanita" name="jenis_kelamin" value="wanita" required>
            <label for="jenis_kelamin_wanita">Wanita</label> <br>
        
            <input type="radio" id="jenis_kelamin_pria" name="jenis_kelamin" value="pria" required>
            <label for="jenis_kelamin_pria">Pria</label>
            </td>
    </tr>
  </table>
  <input type="submit" name="" id="" value="Daftar">
  </form>
</body>
</html>
