<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<h2>Form Olshop</h2>
    <hr>
    <div class="row mx-5">
        <div class="col-12 col-md-8">
            <form action="belanja.php" method="post">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input id="customer" name="customer" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="Produk_0" type="radio" class="custom-control-input" value="TV" required="required">
                            <label for="Produk_0" class="custom-control-label">HP</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="Produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required">
                            <label for="Produk_1" class="custom-control-label">Motor</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="Produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required">
                            <label for="Produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-12 col-md-4">
            <ul class="list-group">
                <li class="list-group-item active">Daftar Harga</li>
                <li class="list-group-item">HP: 12.200.000,00</li>
                <li class="list-group-item">Motor: 30.100.000,00</li>
                <li class="list-group-item">Mesin Cuci: 3.800.000,00</li>
                <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
            </ul>
        </div>
    </div>
<?php
if (isset($_POST['submit'])) {
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    echo "Customer: " . $customer;
    echo "<br>";
    echo "Produk: " . $produk;
    echo "<br>";
    echo "Jumlah: " . $jumlah;
    echo "<br>";

    $total_harga = 0;

    switch ($produk) {
        case "TV":
            $total_harga = 12200000;
            break;
        case "Kulkas":
            $total_harga = 30100000;
            break;
        case "Mesin Cuci":
            $total_harga = 3800000;
            break;
    }

    $total_harga = $total_harga * $jumlah;

    echo "Total Harga: " . number_format($total_harga, 2, ',', '.');
} else {
    echo "<script>alert('Kamu harus isi form terlebih dahulu!')</script>";
}
?>