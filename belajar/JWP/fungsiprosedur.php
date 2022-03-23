<?php
function tambahsatu($value)
{
  return $value = $value + 1;
}


function tambahsatuP(&$value){
	$value = $value + 1;
}

$a=5;
echo "Hasil fungsi tambahsatu = ".tambahsatu($a);
echo "<br>";
echo "varibel a masih tetap dengan nilai =".$a."<br>";
echo "kemudian coba di eksekusi dengan prosedur <br>";
echo tambahsatuP($a);
echo "<br>";
echo "variabel a isinya menjadi = ".$a;


?>