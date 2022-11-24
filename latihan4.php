
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>B</h2>
    
<?php  

    // for ($x = 0; $x <= 5; $x++) {
    //     echo "*";
    // }

?> 

<?php

for ($i=0; $i < 5 ; $i++) {
for ($j=5; $j > $i; $j--) {
echo " ";
}
for ($k=0; $k < $i; $k++) {
echo "*";
}
for ($l=0; $l <= $i ; $l++) {
echo "*";
}
echo "<br>";
}

?>


</body>
</html>