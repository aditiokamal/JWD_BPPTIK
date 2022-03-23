<html>

<head>
    <title>Luas Segitiga</title>
</head>

<body>
    <h1>LATIHAN</h1>
    <form  method="POST">
        <table>
            <tr>
                <td>Alas</td>
           
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
                <td>tinggi</td>
             
                <td><input type="text" name="tinggi" required ></td>
            </tr>

            <tr>
        
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $alassegitiga   =$_POST['alas'];
            $tinggisegitiga   =$_POST['tinggi'];
            

            // menghitung nilai akhir evaluasi pelatihan
            $luassegitiga = 1/2*$alassegitiga*$tinggisegitiga;
            
           
            echo "Alas Segitiga : $alassegitiga<br />";
            echo "Tinggi Segitiga  : $tinggisegitiga<br />";
            echo "Luas Segitiga : $luassegitiga";
        }
    ?>
</body>

</html>