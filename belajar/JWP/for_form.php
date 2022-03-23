<html>
	<body>
		<h2>Input Data Keluarga</h2>
		<form action='proses2.php' method='post'>
			<table>
				<tr>
					<td>Kepala Keluarga</td>
					<td>:</td>
					<td><input name='kepalakeluarga' type='text' size='40' required /></td>
				</tr>
				<tr>
					<td>Istri</td>
					<td>:</td>
					<td><input name='istri' type='text' size='40' required /></td>
				</tr>
				<?php
					for ($i=0;$i <= 4 ;$i++){
				?>
				<tr>
					<td>Anak ke <?php echo $i+1; ?></td>
					<td>:</td>
					<td><input name='anak[]' type='text' size='40'required /></td>
				</tr>
				<?php } ?>
				<tr>
					<td></td>
					<td></td>
					<td><input type='submit' name='kirim' value ='kirim' required /></td>
				</tr>
			</table>
	</body>
</html>