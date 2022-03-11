<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Form Belanja Online</title>
</head>

<body>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-7">
        <h2>Belanja Online</h2>
        <hr>

        <form action="Form_belanja.php" method="POST">
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Customer</label>
            <div class="col-md-8">
              <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4 col-form-label">Pilih Produk</label>
            <div class="col-8">
              <div class="custom-controls-stacked">
                <div class="custom-control custom-radio">
                  <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Televisi">
                  <label for="produk_0" class="custom-control-label">Televisi</label>
                </div>
              </div>
              <div class="custom-controls-stacked">
                <div class="custom-control custom-radio">
                  <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                  <label for="produk_1" class="custom-control-label">Kulkas</label>
                </div>
              </div>
              <div class="custom-controls-stacked">
                <div class="custom-control custom-radio">
                  <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                  <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                </div>
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
              <input type="submit" value="Proses" name="proses">
            </div>
          </div>
        </form>
      </div>


      <div class="col-5">
          <table class="table table-bordered" >
            <thead>
              <tr class="table-primary">
                <th colspan="2">
                  Daftar Harga
                </th>
            </thead>
            <tbody>
              <tr>
                <td>
                  Televisi
                </td>
                <td>Rp.4.200.000</td>
              </tr>
              <tr>
                <td>
                  Kulkas 
                </td>
                <td>Rp.3.100.000</td>
              </tr>
              <tr>
                <td>
                  Mesin Cuci 
                </td>
                <td>Rp.3.800.000</td>
              </tr>
              <tr class="table-primary">
                <td colspan="2">Harga dapat berubah setiap saat</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>

  <hr>

  <?php
  
  $nama =isset($_POST['nama']) ? $_POST['nama'] :'';
  $produk = isset($_POST['produk']) ? $_POST['produk'] :'';
  $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] :'';
  $proses = isset($_POST['proses']) ? $_POST['proses'] :'';
  $total = isset($_POST['total']) ? $_POST['total'] :'';
  


  if ($produk == "Televisi") {
    $total = intval($jumlah) * 4200000;
  } elseif ($produk == "Kulkas") {
    $total = intval($jumlah) * 3100000;
  } elseif ($produk == "Mesin Cuci") {
    $total = intval($jumlah) * 3800000;
  }


  echo '<br/>Nama Customer : ' . $nama;
  echo '<br/>Produk : ' . $produk;
  echo '<br/>Jumlah: ' . $jumlah;
  echo '<br/> Total : ' . $total;
  
  ?>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>