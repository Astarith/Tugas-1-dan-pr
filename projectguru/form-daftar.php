<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Tokyo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Cisarua</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="form-daftar.php">Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Mata Pelajaran Siswa SMK Negeri 1 Cisarua</h2><br>
<form action="proses-pendaftaran.php" method="POST">
<div class="mb-3">
  <label for="nama" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama" placeholder="Masukan Nama Lengkap Anda" />
</div>
<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
  <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
  <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" name="alamat" rows="3"></textarea>
</div>
<div class="mb-3">
    <label for="no_telepon" class="form-label">No Telepon: </label>
    <input type="text" class ="form-control" name="no_telepon"/>
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email: </label>
    <input type="email" class ="form-control" name="email" placeholder="Masukan Email Anda" />
<div class="mb-3">
  <br>
<div class="mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Mapel Yang di Ampu
        </button>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">


                    <div class="modal-header">
                        <h4 class="modal-title">Mapel</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>


                    <div class="modal-body">
                    <select name="mapel" class="form-control">
                     <option>Pemrograman Web</option>
                     <option>Bahasa Inggris</option>
                     <option>Matematika</option>
                     <option>Agama</option>
                     <option>Bahasa Indonesia</option>
                     <option>PPKN</option>
                     <option>PJOK</option>
                     <option>Sejarah</option>
                     <option>Bahasa Jepang</option>
                     <option>Sejarah</option>
            </select>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Simpan</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
   <input type="submit" class="btn btn-success" value="Daftar" name="daftar" />
</div>
    </form>
</div>
    </body>
   <footer style="color:blue;"><center> Copyright &copy; 2024 by Ervan<center> </footer>
</html>