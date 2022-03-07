<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Get</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-left">From Nilai Siswa</h3>
            </div>
            <div class="col-3">
            </div>
            <div class="col-6">
                <form action="" method="GET">
                    <div class="mb-3">
                        <label class="form-label">Nama lengkap</label>
                        <input type="text" class="form-control" name="nama" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mata Kuliah</label>
                        <select class="form-select" name="matkul" id="">
                            <option value="DDP">Dasar-dasar pemograman</option>
                            <option value="BDI">Basis Data I</option>
                            <option value="WEB">Pemrograman Web</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai UTS</label>
                        <input type="text" class="form-control" name="nilai_uts" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai UAS</label>
                        <input type="text" class="form-control" name="nilai_uas" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai Tugas</label>
                        <input type="text" class="form-control" name="nilai_tugas" id="">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Kirim" name="proses">
                </form>
            </div>
        </div>
    </div>
    <?php
$proses = $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

echo 'Proses :'.$proses;
echo '<br/>Nama :'.$nama_siswa;
echo '<br/>Mata Kuliah :'.$mata_kuliah;
echo '<br/>Nilai Uts :'.$nilai_uts;
echo '<br/>Nilai Uas :'.$nilai_uas;
echo '<br/>Nilai Tugas Pratikum :'.$nilai_tugas;


?>
</body>
</html>
