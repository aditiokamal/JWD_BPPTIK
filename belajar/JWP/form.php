<!DOCTYPE html>
<html>
  <head>
    <title>PHP GET and POST Method Example</title>
    <link rel="stylesheet" href="style.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="metode.js"></script>
  
  </head>	
  <body>
	<div class="container">
		<div class="main">
	      <form  method="get" action="form.php" id="form">
			<h2>FORM HTML DENGAN PHP</h2><hr/>		
			
			<label>Nama :</label>
			<input type="text" name="fnama" id="fnama" />
			
			<label>Alamat :</label>
			<input type="text" name="lalamat" id="lalamat" />
			
			<label>Pilih Metode :</label>
			<span><input type="radio" name="method" value="get" checked> GET &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="method" value="post" > POST </span>	
			
			<input type="submit" name="submit" id="submit" value="Submit">
		  </for>
		<?php include "proses.php";?>
		</div>
   </div>
 
  </body>
</html>