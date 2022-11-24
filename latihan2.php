<?php

// $grade = 80;
// $nilai = 89;

        // if($grade <= 80) {
        //     echo "$grade - $nilai";
        // }else{
        //     echo "kurang";
        // }

        // if($nilai >= 80) {
        //     echo " = baik ";
        // }else{
        //     echo " = kurang ";
        // }
    
  $grade = "80";

  if ($grade >= 89 ) {
    $nilai = "sangat baik";
  } elseif ($grade >= 79 ) {
    $nilai = "baik";
  } elseif ($grade >= 69 ) {
    $nilai = "cukup";
  } elseif ($grade >= 59 ) {
    $nilai = "kurang";
  } elseif ($grade >= 0 ) {
    $nilai = "sangat kurang";
  } else {
    echo "nilai kosong";
  }

  echo ("nilai anda ".$nilai)

?>