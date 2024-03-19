<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<title>Belanja Online</title>
</head>

<body>
    <div>
        <div class="ml-2 row">
			<div class="col-8">
				<form method="POST">
					<h1>Belanja Online</h1>
					<hr>
					<div class="form-group row">
						<label for="nama" class="col-sm-2 col-form-label">Customer</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="Customer" name="Customer" placeholder="Customer">
						</div>
					</div>
					<div class="form-group row">
						<label for="matkul" class="col-sm-2 col-form-label">Pilih Product</label>
						<div class="col-sm-10">
							<input type="radio" id="TV" name="TV">
                            <label id="TV">TV</label>
                            <input class="ml-4" type="radio" id="Laptop" name="Laptop">
                            <label id="Laptop">Laptop</label>
                            <input class="ml-4" type="radio" id="Jam Tangan" name="Jam Tangan">
                            <label id="Jam Tangan">Jam Tangan</label>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Jumlah</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="Jumlah" placeholder="Jumlah" name="Jumlah">
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-2">
							<div class="col-sm-12">
								<button type="submit" class="btn btn-success" name="kirim">Kirim</button>
							</div>
						</div>
					</div>
				</form>
			</div>
            <div class="col-4">
               <table class="table table-borderless table-bordered">
                    <tr class="bg-dark text-white">
                        <td>List Harga</td>
                    </tr>
                    <tr>
                        <td>TV: 2.000.000</td>
                    </tr>
                    <tr>
                        <td>Laptop: 3.000.000</td>
                    </tr>
                    <tr>
                        <td>Jam Tangan: 1.000.000</td>
                    </tr>
                    <tr class="bg-dark text-white">
                        <td>Harga Dapat Berubah Setiap Saat</td>
                    </tr>
               </table>
            </div>
	    </div>
        <hr>
        <?php
        // harga untuk setiap produk
        $harga_produk = [
            'TV' => 2000000, // Harga TV
            'Laptop' => 3000000, // Harga Laptop
            'Jam Tangan' => 1000000 // Harga Jam Tangan
        ];

        // pengecekan form submit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $customer = $_POST['Customer'];
            $product = isset($_POST['TV']) ? 'TV' : (isset($_POST['Laptop']) ? 'Laptop' : (isset($_POST['Jam Tangan']) ? 'Jam Tangan' : ''));
            $quantity = $_POST['Jumlah'];
        
            // perhitungan
            $total_harga = isset($harga_produk[$product]) ? $harga_produk[$product] * $quantity : 0;
        
            // Display data submit
            echo "<div class='ml-2 row'>";
            echo "<div class='col-8'>";
            echo "<h4>Struk Belanja</h4>";
            echo "<p>Customer: $customer</p>";
            echo "<p>Product: $product</p>";
            echo "<p>Quantity: $quantity</p>";
            echo "<p>Total Harga: Rp " . number_format($total_harga, 0, ',', '.') . "</p>"; // Format harga
            echo "</div>";
            echo "</div>";
        }
    ?>
    </div>

   


    


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>