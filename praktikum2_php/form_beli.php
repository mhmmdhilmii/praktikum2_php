<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        form{
            margin:2em;
        }
        input{
            margin:10px;
        }
        table{
            margin-top:2em;
            border:1px;
            border-style: solid;
            width:80%;
        }
        tr{
            border-bottom:1px solid;
        }
        td{
            padding:8px;
        }
        .daftar{
            background-color:#3991d1;
        }
    </style>
    </head>
    <body>
    <div class="row">
        <div class="col-sm-8">
        <h3> Belanja Online </h3><hr>
        <form method="POST">
        <div class="form-group row">
            <label for="costum" class="col-3 col-form-label">Costumer</label> 
            <div class="col-9">
            <input id="costum" name="costum" placeholder="Nama Costumer" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Pilih Produk</label> 
            <div class="col-9">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                <label for="produk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci"> 
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jml" class="col-3 col-form-label">Jumlah</label> 
            <div class="col-9">
            <input id="jml" name="jml" placeholder="Jumlah" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-3 col-9">
            <button name="submit" type="submit" class="btn btn-success">Kirim</button>
            </div>
        </div>
        </form>
        </div>
        <div class="col-sm-4">
            <table>
                <tbody>
                    <tr><td class="daftar">Daftar Harga</td></tr>
                    <tr><td>TV : 4.200.000</td></tr>
                    <tr><td>Kulkas : 3.100.000</td></tr>
                    <tr><td>Mesin Cuci : 3.800.000</td></tr>
                    <tr><td class="daftar">Harga Bisa Berubah Setiap Saat</td></tr>
                </tbody>
            </table>
        </div>
    </div><hr>

    <!--PHP-->
    <?php
        $costumer = isset ($_POST['costum']) ? $_POST['costum'] : '';
        $produks = isset ($_POST['produk']) ? $_POST['produk'] : '';
        $jumlah = isset ($_POST['jml']) ? $_POST['jml'] : '';
        
        if($produks == "tv"){
            $produksi = 4200000;
        }elseif($produks == "kulkas"){
            $produksi = 3100000;
        }elseif($produks == "mesincuci"){
            $produksi = 3800000;
        }
        
            echo 'Nama Customer : '.$costumer;
            echo '<br/>Produk Pilihan : '.$produks;
            echo '<br/>Jumlah Beli : '.$jumlah;
            echo '<br/>Total Belanja : Rp. '.(int)$jumlah*(int)$produksi;
    ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>
</html>
