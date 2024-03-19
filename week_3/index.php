<?php
$prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital",
];
$skills = [
    "HTML" => 10,
    "CSS" => 10,
    "Javascript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50
];
$domisili = [
    "Jakarta",
    "Bogor",
    "Depok",
    "Tangerang",
    "Bekasi",
    "Lainnya"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Process</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#76ABAE" fill-opacity="1" d="M0,128L48,128C96,128,192,128,288,144C384,160,480,192,576,208C672,224,768,224,864,202.7C960,181,1056,139,1152,106.7C1248,75,1344,53,1392,42.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <div class="container p-4">

        <h2>Biodata Mahasiswa</h2>
        <br><br>
        <?php
        if (isset($_POST['nim'])) {

            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $telepon = $_POST['telepon'];
            $jeniskelamin = $_POST['jeniskelamin'];
            $programStudi = $_POST['programStudi'];
            $myskills = $_POST['skills'];
            $domisili = $_POST['domisili'];
        ?>
            <table class="table">
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?= $nim ?></td>
                </tr>
                <tr>
                    <td>Nama lengkap</td>
                    <td>:</td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td><?= $telepon ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $jeniskelamin ?></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td><?= $programStudi ?></td>
                </tr>
                <tr>
                    <td>Skill</td>
                    <td>:</td>
                    <td>
                        <?php
                        $point = 0;
                        if (isset($_POST['skills'])) {
                            foreach ($_POST['skills'] as $skill) {
                                foreach ($skills as $key => $value) {
                                    if ($skill == $key) {
                                        $point += $value;
                                        echo $skill, ",";
                                    }
                                }
                            }
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>Point Skill</td>
                    <td>:</td>
                    <td><?= $point ?></td>
                </tr>
                <tr>
                    <td>domisili</td>
                    <td>:</td>
                    <td><?= $domisili ?></td>
                </tr>

            </table>
        <?php } else { ?>
            <form method="post">
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="nim" name="nim" placeholder="masukan nim" type="number" class="form-control" required="required" autofocus>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">nama lengkap</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control" required="required">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <input id="email" name="email" placeholder="masukan email" type="email" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telepon" class="col-4 col-form-label">No Telepon</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-phone-square"></i>
                                </div>
                            </div>
                            <input id="telepon" name="telepon" placeholder="masukan nomor" type="number" class="form-control" required="required">
                        </div>
                    </div>
                </div>



                <div class="form-group row">
                    <label for="jeniskelamin" class="col-4 col-form-label">jenis kelamin</label>
                    <div class="col-8">
                        <input id="lakiLaki" name="jeniskelamin" placeholder="masukan jenis kelamin" type="radio" value="laki-laki" required>
                        <label for="lakiLaki">laki-laki</label>
                        <input id="perempuan" name="jeniskelamin" placeholder="masukan jenis kelamin" type="radio" value="laki-laki" required>
                        <label for="perempuan">perempuan</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="programStudi" class="col-4 col-form-label">Program studi</label>
                    <div class="col-8">
                        <select id="programStudi" name="programStudi" class="form-control" required>
                            <option value="">~ pilih prodi ~</option>
                            <?php foreach ($prodi as $prodikey => $prodivalue) { ?>
                                <option value='<?= $prodivalue ?>'><?= $prodivalue ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="skills" class="col-4 col-form-label">Skill programming</label>
                    <div class="col-8">
                        <?php foreach ($skills as $skillkey => $skillvalue) { ?>
                            <input type="checkbox" name="skills[]" id="<?= $skillkey ?>" value="<?= $skillkey ?>">
                            <label for="<?= $skillkey ?>"><?= $skillkey ?></label>
                        <?php } ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="domisili" class="col-4 col-form-label">domisili</label>
                    <div class="col-8">
                        <select id="domisili" name="domisili" class="form-control" required>
                            <option value="">~ pilih domisili ~</option>
                            <?php foreach ($domisili as $domisilikey => $domisilivalue) { ?>
                                <option value='<?= $domisilivalue ?>'><?= $domisilivalue ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#76ABAE" fill-opacity="1" d="M0,128L48,128C96,128,192,128,288,144C384,160,480,192,576,208C672,224,768,224,864,202.7C960,181,1056,139,1152,106.7C1248,75,1344,53,1392,42.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</body>

</html>