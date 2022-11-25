<?php 

$nama = ["M.HIFALLUSSALAM"];
$kelas = ["XII RPL 1"];
$Alamat = ["Samborejo"];

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

    <?php foreach ($nama as $a) { ?>
        <div><?php echo $a;?></div>
    <?php }?>
    <br>
    <?php foreach ($kelas as $b) { ?>
        <div><?php echo $b;?></div>
    <?php }?>
    <br>
    <?php foreach ($Alamat as $b) { ?>
        <div><?php echo $c;?></div>
    <?php }?>
    

</body>
</html>