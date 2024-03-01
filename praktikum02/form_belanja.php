<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Form</title>
</head>

<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <form method="POST" action="form_belanja.php">
          <h2>Belanja Online</h2>
          <hr>
          <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label>
            <div class="col-8">
              <input id="customer" name="customer" placeholder="Nama customer" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Pilih Produk</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                <label for="produk_1" class="custom-control-label">Kulkas</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin">
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
            <div class="col-8">
              <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="proses" type="submit" class="btn btn-success">Kirim</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <div class="list-group">
          <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
            Daftar Harga
          </button>
          <button type="button" class="list-group-item list-group-item-action">TV : 4.200.000</button>
          <button type="button" class="list-group-item list-group-item-action">Kulkas : 3.100.000</button>
          <button type="button" class="list-group-item list-group-item-action">Mesin Cuci : 3.800.000</button>
          <button type="button" class="list-group-item list-group-item-action active" aria-current="true">Harga Dapat Berubah Setiap Saat</button>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <?php
        $proses = $_POST["proses"];
        $nama_customer = $_POST["customer"];
        $pilih_produk = $_POST["produk"];
        $jumlah_produk = $_POST["jumlah"];

        $pilih_produk;
        if ($pilih_produk == "tv") {
          $pilih_produk = "TV";
        } elseif ($pilih_produk == "kulkas") {
          $pilih_produk = "Kulkas";
        } elseif ($pilih_produk == "mesin") {
          $pilih_produk = "MESIN CUCI";
        } else $pilih_produk = "Tidak Ada";


        $total_belanja;
        if ($pilih_produk == "TV") {
          $total_belanja = 4200000 * $jumlah_produk;
        } elseif ($pilih_produk == "Kulkas") {
          $total_belanja = 3100000 * $jumlah_produk;
        } elseif ($pilih_produk == "MESIN CUCI") {
          $total_belanja = 3800000 * $jumlah_produk;
        } else {
          $total_belanja = "-";
        }
        ?>

        <h5><u>Struk Belanja</u></h5>
        <?= "Nama Customer : " . $nama_customer; ?>
        <br>
        <?= "Produk Pilihan : " . $pilih_produk; ?>
        <br>
        <?= "Jumlah Beli : " . $jumlah_produk; ?>
        <br>
        <?= "Total Belanja : Rp. " . number_format($total_belanja, 0, ".", "."); ?>
      </div>
    </div>
  </div>

</body>

</html>