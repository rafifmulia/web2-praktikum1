<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Nilai Siswa</title>
  <link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
</head>

<body>

  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-info text-white">
            <h3 class="card-title">Form Nilai Siswa</h3>
          </div>
          <div class="card-body">
            <form action="array_siswa.php" method="post">
              <div class="row">
                <div class="col-5 text-right">
                  <div class="form-group">
                    <label class="font-weight-bold">Nama Lengkap : </label>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Mata Kuliah : </label>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Nilai UTS : </label>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Nilai UAS : </label>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Nilai Tugas/Praktikum : </label>
                  </div>
                </div>
                <div class="col-7 text-left">
                  <div class="form-group">
                    <input type="text" name="nama" class="form-control-sm" size="30">
                  </div>
                  <div class="form-group">
                    <select name="matul" class="form-control-sm">
                      <option value="DDP">Dasar-Dasar Pemrograman</option>
                      <option value="BDI">Basis Data I</option>
                      <option value="WEB1">Pemrograman Web</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" name="nilai_uts" class="form-control-sm" size="6">
                  </div>
                  <div class="form-group">
                    <input type="text" name="nilai_uas" class="form-control-sm" size="6">
                  </div>
                  <div class="form-group">
                    <input type="text" name="nilai_tugas" class="form-control-sm" size="6">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>