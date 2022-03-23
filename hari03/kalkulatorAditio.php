<!DOCTYPE html>
<!--
    Muhammad Aditio Kamal Ibrahim
    aditiokamal@gmail.com
    -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.2">
    <title>
        Tugas 6 - Muhammad Aditio Kamal Ibrahim
    </title>
    <!-- Bootstrap in Here - Use Internet to Access -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <!-- CSS Intern in Here -->
    <style>
        * {
            font-family: sans-serif;
        }

        .jumbotron {
            background-color: #330033;
            border-radius: 0;
            color: white;
        }

        .jumbotron p {
            font-size: 16px;
        }

        .panel-group {
            border: 1px solid #330033;
            border-radius: 5px;
        }

        .panel-heading {
            background-color: #330033;
            padding: 3px;
            font-size: 16px;
            color: white;
        }

        .panel-body {
            padding: 12px;
            text-align: left;
        }
    </style>
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <div class="jumbotron">
        <h1 class="display-4">Kalkulator Sederhana</h1>
        <p>oleh Muhammad Aditio Kamal Ibrahim</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <div class="panel-group">
                            <div class="panel-heading">
                                <label for="bil1">Input bilangan 1 : </label>
                            </div>
                            <div class="panel-body">
                                <input type="text" class="form-control" id="bil1" name="bil1" autocomplete="off" required>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <div class="panel-group">
                                <div class="panel-heading">
                                    <label for="bil1">Input bilangan 2 : </label>
                                </div>
                                <div class="panel-body">
                                    <input type="text" class="form-control" id="bil2" name="bil2" autocomplete="off" required>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-dark" style="background-color: #330033" name="hitung">Hitung</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="panel-group">
                    <div class="panel-heading">
                        Output :
                    </div>
                    <div class="panel-body">
                        <?php
                        //function penjumlahan
                        function penjumlahan($bil1, $bil2)
                        {
                            $tambah = $bil1 + $bil2;
                            return $tambah;
                        }
                        //function pengurangan
                        function pengurangan($bil1, $bil2)
                        {
                            $kurang = $bil1 - $bil2;
                            return $kurang;
                        }
                        //function perkalian
                        function perkalian($bil1, $bil2)
                        {
                            $kali = $bil1 * $bil2;
                            return $kali;
                        }
                        //function pembagian
                        function pembagian($bil1, $bil2)
                        {
                            $bagi = $bil1 / $bil2;
                            return $bagi;
                        }
                        //output setelah tombol hitung diklik
                        if (isset($_POST['hitung'])) {
                            $bil1 = $_POST['bil1'];
                            $bil2 = $_POST['bil2'];
                            echo "Bilangan 1 : $bil1<br>";
                            echo "Bilangan 2 : $bil2<br>";
                            echo "_____________________________<br>";
                            echo "_____________________________<br>";
                            echo "Hasil Penjumlahan adalah : " . penjumlahan($bil1, $bil2) . "<br>";
                            echo "Hasil Pengurangan adalah : " . pengurangan($bil1, $bil2) . "<br>";
                            echo "Hasil Perkalian adalah : " . perkalian($bil1, $bil2) . "<br>";
                            echo "Hasil Pembagian adalah : " . pembagian($bil1, $bil2) . "<br>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>