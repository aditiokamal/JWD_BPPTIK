<!DOCTYPE html>
<html lang="en">
<?php

// function matriks(){
	    // $baris=4;    
		// $kolom=4;     
		// for($i=1;$i<=$baris;$i++){         
			// for($j=1;$j<=$kolom;$j++){                     
				// echo "($i,$j)";         
			// }         
			// echo "<br><br>";     
		// }     

// }
// matriks();

// function perulanganfor(){
	// for ($i=0; $i <10; $i++){
	   // for ($j=0; $j <10; $j++)
	   // {
		  // echo $i;
	   // }
	   // echo "<br />";
	// }
// }

// function whiledo(){
	// $x = 1; 
	// while($x < 6) {
		// echo "The number is: $x <br>";
		// $x++;
	// } 
// }

// function dowhile(){
	// $x = 1; 
	// do {
		// echo "The number is: $x <br>";
		// $x++;
	// } while ($x < 6);
// }
// echo "Berikut adalah hasil while do <br>";
// whiledo();
// echo "<br>";
// echo "<br>";
// echo "Berikut adalah hasil do while <br> ";
// dowhile();
// echo "<br>";
// Struktur Program - Percabangan
	// Memanfaatkan Kondisi
	echo "[Struktur Program - Percabangan] <br>";
	echo "[Case: Penilangan Otomatis Restriksi Jalan Ganjil Genap]<br>";
	echo "[No Polisi B 1520 GDS]<br>";

	$tanggalHariIni		=	date("d");
	$tanggalIsGanjil	=	($tanggalHariIni % 2) == 1;
	// Restriksi Jalan Ganjil - Genap
	$noPolisiHasilScan	=	"B 1520 GDS";
	// Sanitasi menjadi hanya nomor
	$noPolisiFiltered	=	filter_var($noPolisiHasilScan, FILTER_SANITIZE_NUMBER_INT);
	$noPolisiIsGanjil	=	($noPolisiFiltered % 2) == 1;

	if($noPolisiIsGanjil == $tanggalIsGanjil) {
		echo "[Hasil: Kendaraan ".$noPolisiHasilScan." diizinkan lewat.]";
	} else {
		echo "[Hasil: Kendaraan ".$noPolisiHasilScan." dilakukan penilangan.]";
	}

	// langkah 1 : ambil tanggal dengan fungsi date('d');
	// langkah 2 : filter plat nomer (ambil nomornya saja)
	// langkah 3 : mod kan dengan 2 hasil filternya 
	// langkah 4 : dengan pakai fungsi if dari hasil langkah 3, untuk mencari apakah kendaraanya di tilang atau tidak

	echo "<br>------------------------------------------<br>";

    echo "<br>[Struktur Program - Pengulangan - FOR]<br>";
	for ($i=1; $i <= 20 ; $i++) { 
		if($i <= 10) {
			echo $i. ", ";
		}else if (($i<=20) && ($i>10)){
			if (20 - $i != 0){
				echo 20 - $i.", ";
			}
		}
	}
	
	echo "<br>------------------------------------------<br>";

	for ($i=1; $i <= 20 ; $i++) { 
		if($i <= 10) {
			echo (11 - $i) . ", ";
		}else if (($i<=20) && ($i>10)){
			if (20 - $i != 0){
				echo $i - 9 .", ";
			}
		}
	}
	echo"<br>";
	echo "<br>------------------------------------------<br>";
	
	for ($i=1; $i < 20 ; $i+=2) { 
		if ($i % 2 == 1 && $i  != 1){
			echo ($i + 1) . ",". $i . "," . ($i - 1) . " | ";
		}else{
			echo $i . " | ";
		}
	}
	
	
	echo"<br>";
	echo "<br>------------------------------------------<br>";
	
	
	$flag=0;
	for ($i=1; $i < 20 ; $i++) { 
		if ($i+2 <= 20){
			if ($flag ==1){
				echo ($i+2). ",";
				$flag=0;
			}else {
				if ($i!=1 ){
					echo $i. ",". ($i-1). " | ";
					$flag=1;
				}else{
					echo $i. " | ";
					$flag=1;
				}
			}
		}else {
			echo $i. ",". ($i-1);
			
		}
	}
	echo "<br>------------------------------------------<br>";
	
	// for( $a=10; $a>0; $a--){
		// for($b=1; $b<=$a; $b++){
			// echo "(".$a.",".$b.")";
		// }for($a1=10; $a1>$a; $a1--){
			// echo"*";
		// }for($a2=11; $a2>$a; $a2--){
			// echo"*";
		// }echo"<br>";
	// }
	
	
	//echo "(".$a.",".$b.")";
	// // Struktur Program - Pengulangan
	// // Mengulang perintah dengan menggunakan FOR
	// echo "[Struktur Program - Pengulangan - FOR]<br>";
	// echo "[Case: Menampilkan angka yang habis bagi 6 diantara angka 100 sampai 6]<br>";

	// for ($i=100; $i >= 6 ; $i--) { 
		// if(($i % 6) == 0) {
			// echo $i . " dibagi " . 6 . " = ".($i/6)."<br>";
		// }
	// }


	// echo "------------------------------------------<br>";


	// // Struktur Program - Pengulangan
	// // Mengulang perintah dengan menggunakan WHILE
	// echo "[Struktur Program - Pengulangan - WHILE]<br>";
	// echo "[Case: Sistem Peringatan Banjir]<br>";

	// $setTinggiAirMaksimum	=	25; // Satuan Meter
	// $tinggiAirSaatIni		=	5;

	// while ($tinggiAirSaatIni < $setTinggiAirMaksimum) {
		// $tinggiAirSaatIni	=	rand(10,40);
		// $statusTinggiAir	=	($tinggiAirSaatIni < $setTinggiAirMaksimum)? "Aman":"Bahaya!";
		// echo "Ketinggian Air saat ini " . $tinggiAirSaatIni . " Meter; dalam status " . $statusTinggiAir . "<br>";
	// }


	// echo "------------------------------------------<br>";


	// // Struktur Program - Pengulangan
	// // Mengulang perintah dengan menggunakan Repeat-Until
	// echo "[Struktur Program - Pengulangan - Repeat-Until]<br>";
	// echo "[Case: Timer Auto Shutdown Motor Ketika Berhenti]";

	// $setSpeed	=	0; // km/h
	// $setTimer	=	10; // detik

	// do {
		// if($setTimer == 0)
		// {
			// echo "Mesin dimatikan ..<br>";
		// } else {
			// echo $setTimer . " detik lagi. <br>";
		// }
		// $setTimer--;
	// } while ($setTimer >= 0);
?>
</html>