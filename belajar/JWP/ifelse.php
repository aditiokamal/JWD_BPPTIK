<?php

//Menggunakan Kurung Kurawa (Braces)
if ($nilai > 8)  { 
	echo 'Sangat Baik';
}  else  {
	echo 'Baik';
}

//Menggunakan Colon
if ($nilai > 8):
	echo 'Sangat Baik';
else:
	echo 'Baik';
endif;

//Tanpa Menggunakan Keduanya
if ($nilai > 8)
	echo 'Sangat Baik';
else
	echo 'Baik';

// Menggunakan Elseif
// Dengan Braces
if ($nilai >= 9) {
	echo 'Sangat Baik';
} else if ($nilai < 9 && $nilai >= 7) {
	echo 'Baik';
} else if ($nilai < 7 && $nilai >= 5) {
	echo 'Sedang';
} else {
	echo 'Kurang';
}

// Dengan Colon
if ($nilai >= 9): 
	echo 'Sangat Baik';
elseif ($nilai < 9 && $nilai >= 7):
	echo 'Baik';
elseif ($nilai < 7 && $nilai >= 5):
	echo 'Sedang';
else:
	echo 'Kurang';
endif;

?>