<?php
require_once('data.php');

class BMI_Calculator {
    public $nama;
    public $jenisKelamin;
    public $umur;
    public $beratBadan;
    public $tinggiBadan;
    public $bmi;
    public $keterangan;

    public function __construct($nama, $jenisKelamin, $umur, $beratBadan, $tinggiBadan) {
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
        $this->umur = $umur;
        $this->beratBadan = $beratBadan;
        $this->tinggiBadan = $tinggiBadan;
    }

    public function calculateBMI() {
        $tinggiBadanMeter = $this->tinggiBadan / 100;
        $this->bmi = $this->beratBadan / ($tinggiBadanMeter * $tinggiBadanMeter);
        return $this->bmi;
    }

    public function evaluateBMI() {
        if ($this->bmi < 18.5) {
            $this->keterangan = "Kekurangan berat badan";
        } elseif ($this->bmi >= 18.5 && $this->bmi <= 24.9) {
            $this->keterangan = "Ideal";
        } elseif ($this->bmi >= 25 && $this->bmi <= 29.9) {
            $this->keterangan = "Kelebihan berat badan";
        } else {
            $this->keterangan = "Obesitas";
        }
        return $this->keterangan;
    }

    public function getBMI() {
        return $this->bmi;
    }

    public function getKeterangan() {
        return $this->keterangan;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getJenisKelamin() {
        return $this->jenisKelamin;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function getBeratBadan() {
        return $this->beratBadan;
    }

    public function getTinggiBadan() {
        return $this->tinggiBadan;
    }
}

if (isset($_POST['submit'])) {
    $calculator = new BMI_Calculator($_POST['nama'], $_POST['jeniskelamin'], $_POST['umur'], $_POST['beratbadan'], $_POST['tinggibadan']);
    $bmi = $calculator->calculateBMI();
    $keterangan = $calculator->evaluateBMI();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cek BMI</title>

    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">

        <!-- form cek bmi-->
        <div class="form bg-dark text-white">
            <form method="POST">
                <h5 class="card-header bg-primary">Form Cek BMI</h5>
                <div class="card_form p-3">

                    <!-- nama -->
                    <div class="form-group row">
                        <label for="nama" class="col-3 col-form-label">Nama</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nama" name="nama" placeholder="Nama" type="text" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- berat badan -->
                    <div class="form-group row">
                        <label for="beratbadan" class="col-3 col-form-label">Berat Badan</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-anchor"></i>
                                    </div>
                                </div>
                                <input id="beratbadan" name="beratbadan" placeholder="Berat Badan" type="number" class="form-control" required="required">
                                <div class="input-group-append">
                                    <div class="input-group-text">kg</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tinggi badan -->
                    <div class="form-group row">
                        <label for="tinggibadan" class="col-3 col-form-label">Tinggi badan</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-blind"></i>
                                    </div>
                                </div>
                                <input id="tinggibadan" name="tinggibadan" placeholder="Tinggi Badan" type="number" class="form-control" required="required">
                                <div class="input-group-append">
                                    <div class="input-group-text">cm</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- umur -->
                    <div class="form-group row">
                        <label for="umur" class="col-3 col-form-label">Umur</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-bell"></i>
                                    </div>
                                </div>
                                <input id="umur" name="umur" placeholder="Umur" type="number" class="form-control" required="required">
                                <div class="input-group-append">
                                    <div class="input-group-text">Tahun</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- jenis kelamin -->
                    <div class="form-group row">
                        <label class="col-3">Jenis kelamin</label>
                        <div class="col-9">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jeniskelamin" id="jeniskelamin" type="radio" class="custom-control-input" value="Laki - Laki" required="required">
                                <label for="jeniskelamin" class="custom-control-label">Laki-laki</label>
                            </div>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jeniskelamin" id="jeniskelamin_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                                <label for="jeniskelamin_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="form-group row">
                        <div class="offset-3 col-9">
                            <button name="submit" type="submit" class="btn btn-primary">BMI</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- hasil evaluasi bmi -->
        <div class="hasil">
            <h5 class="card-header bg-primary">Hasil Evaluasi BMI</h5>
            <div class="card_hasil p-3 bg-dark text-white">
                <?php if (isset($bmi)) { ?>
                    <table class="table table-striped table-hover">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= $calculator->nama ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?= $calculator->jenisKelamin ?></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>:</td>
                            <td><?= $calculator->umur ?></td>
                        </tr>
                        <tr>
                            <td>Berat Badan</td>
                            <td>:</td>
                            <td><?= $calculator->beratBadan ?></td>
                        </tr>
                        <tr>
                            <td>Tinggi Badan</td>
                            <td>:</td>
                            <td><?= $calculator->tinggiBadan ?></td>
                        </tr>
                        <tr>
                            <td>BMI</td>
                            <td>:</td>
                            <td><?= round($bmi, 1) ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td><?= $keterangan ?></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>

        <!-- data bmi -->
        <div class="data">
            <h5 class="card-header bg-primary">Data BMI</h5>
            <div class="card_data bg-dark text-white">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>BMI</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $row) {
                            echo '<tr>',
                                '<td>' . $row['nama'] . '</td>',
                                '<td>' . $row['jenisKelamin'] . '</td>',
                                '<td>' . $row['umur'] . '</td>',
                                '<td>' . $row['beratBadan'] . '</td>',
                                '<td>' . $row['tinggiBadan'] . '</td>',
                                '<td>' . $row['bmi'] . '</td>',
                                '<td>' . $row['keterangan'] . '</td>',
                                '</tr>';
                        }
                        ?>
                        <?php if (isset($bmi)) { ?>
                            <tr>
                                <td><?= $calculator->nama ?></td>
                                <td><?= $calculator->jenisKelamin ?></td>
                                <td><?= $calculator->umur ?></td>
                                <td><?= $calculator->beratBadan ?></td>
                                <td><?= $calculator->tinggiBadan ?></td>
                                <td><?= round($bmi, 1) ?></td>
                                <td><?= $keterangan ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>
