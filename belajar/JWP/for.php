<?php 
for($x=1;$x<=10;$x++){
	echo $x;
	//membuat perulangan yang menampilkan angka satu sampai sepuluh sesuai dengan aturan yang sudah di buat pada kondisi di atas.
}

echo "<br>";
for($kata=1;$kata<=20;$kata++){	
	echo "Belajar pemrograman PHP di bpptik kominfo"."<br/>";
}


echo "<table border=\"1\">";
 
//Generate table data showing the numbers 1-7 multiplied by each other, 
//starting with the rows. 
for ($row=1; $row<=7; $row++){
  echo "<tr>\n";
  //Generate each entry in the row to create the columns.
  for ($col=1; $col<=7; $col++){
    //First, do the math.
    $x=$col * $row;
    //Then send the value to the table with the table data tags.   
    echo "<td>$x</td>\n";
  }
  echo "</tr>";
}
echo "</table>";


?>