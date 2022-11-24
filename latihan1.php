<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    </style>


</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">

    <?php
        // for( $i = 1; $i <= 3; $i++ ) {
        //     echo "<tr>";
        //     for ( $j = 1; $j <= 5; $j++ ) {
        //         echo "<td>$i,$j</td>";
        //     }
        //     echo "</tr>";
        // }
    ?>

</table>




</body>
</html> -->

<?php

  $merk_motor = "Yamaha mio 2019";

  if ($merk_motor == "Yamaha mio 2019") {
    $harga = "16.000.000";   
  } elseif ($merk_motor == "Yamaha Jupiter MX 2014") {
    $harga = "11.000.000";
  } elseif ($merk_motor == "Honda Vario 125cc 2020") {
    $harga = "18.000.000";
  } elseif ($merk_motor == "Honda Supra 125 2015") {
    $harga = "10.000.000";
  } elseif ($merk_motor == "Honda PCX 150cc 2018") {
    $harga = "23.000.000";
  } else {
    echo "stok barang tidak ada";
  }

  echo ("harga motor ".$merk_motor. " = ". $harga)

?>