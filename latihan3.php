<?php

$angka = [15, 20, 25, 30, 35,];
$angka2 = [40, 45, 50, 55, 57];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($angka as $a) { ?>
        <div><?php echo $a; ?></div>
    <?php } ?>

    <?php foreach ($angka2 as $b) { ?>
        <div><?php echo $b; ?></div>
    <?php } ?>
</body>
</html>