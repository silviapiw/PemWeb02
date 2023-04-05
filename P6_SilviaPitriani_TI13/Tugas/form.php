<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
	
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <a href="form.php" class="btn btn-sm btn-outline-success">Home</a>
  </form>
</nav>

	<form method="post" action="index.php">
  <div class="form-group ml-5 mr-5">
    <label for="nomor">Nomor</label>
    <input type="text" class="form-control" id="nomor" name="nomor">
  </div>
  <div class="form-group ml-5 mr-5">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="form-group ml-5 mr-5">
    <label for="kota">Kota</label>
    <input type="text" class="form-control" id="kota" name="kota">
  </div>
  <div class="form-group ml-5 mr-5">
    <label for="kontak">Kontak</label>
    <input type="text" class="form-control" id="kontak" name="kontak">
  </div>
  <button type="submit" name="submit" class="btn btn-info ml-5">Submit</button>
</form>
</body>
</html>