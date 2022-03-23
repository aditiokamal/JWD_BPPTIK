<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    header {
      color: white;
      padding: 20px;
      background-color: #6992f0;
    }

    main {
      background-color: #6ad2de;
    }

    form {
      width: 1000px;
      margin-left: 50px;
    }

    input {
      width: 10px;
    }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <header>
    <h1>Kalkulator Sederhana</h1>
  </header>
  <main>
    <form action="" method="$_GET">
      <div class="form-group row">
        <label for="number1" class="col-sm-2 col-form-label">Angka Pertama</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="number1" id="number1" placeholder="Number">
        </div>
      </div>
      <div class="form-group row">
        <label for="number2" class="col-sm-2 col-form-label">Angka Ke Dua</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="number2" id="number2" placeholder="number">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Hitung</button>
        </div>
      </div>
      <fieldset disabled>
	  <?php if (ISSET($_GET['number1'])){?>
        <div class="form-group row">
          <label for="penjumlahan" class="col-sm-2 col-form-label">Hasil Penjumlahan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penjumlahan" value="<?= penjumlahan($_GET['number1'], $_GET['number2']); ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="pengurangan" class="col-sm-2 col-form-label">Hasil Pengurangan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pengurangan" value="<?= pengurangan($_GET['number1'], $_GET['number2']); ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="perkalian" class="col-sm-2 col-form-label">Hasil Perkalian</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="perkalian" value="<?= perkalian($_GET['number1'], $_GET['number2']); ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="pembagian" class="col-sm-2 col-form-label">Hasil Pembagian</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pembagian" value="<?= pembagian($_GET['number1'], $_GET['number2']); ?>">
          </div>
        </div>
	  <?php }?>
      </fieldset>
    </form>
  </main>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php
function penjumlahan($a, $b)
{
  return $a + $b;
}
function pengurangan($a, $b)
{
  return $a - $b;
}
function perkalian($a, $b)
{
  return $a * $b;
}
function pembagian($a, $b)
{
  return $a / $b;
}
?>