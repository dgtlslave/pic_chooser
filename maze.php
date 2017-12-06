<?php

// function nbMonths($startPriceOld,
//                   $startPriceNew,
//                   $savingPerMonth,
//                   $percentLossByMonth) {
//     // your code
// }

$old = 2000;
$new = 8000;
$save = 1000;
$lossByMonth = 1.5;
$lossByTwoMonth = 0.5;

$monthCounter = 0;
$finalPrice = 0;

while ($new >= ($finalPrice + $old)) {

  if ($monthCounter % 2 == 0) {

  echo $old = $old - ($old * $lossByMonth/100) - ($old * $lossByTwoMonth/100).'</br>';
    $new = $new - ($new * $lossByMonth/100) - ($old * $lossByTwoMonth/100);

  echo $finalPrice += $save.'</br>';

  }
  // else {
  // echo $old = $old - ($old * $lossByMonth/100).'</br>';
  //   $new = $new - ($new * $lossByMonth/100).'</br>';
  //
  // echo $finalPrice += $save.'</br>';
  //
  // }

  $monthCounter++;

}



?>
