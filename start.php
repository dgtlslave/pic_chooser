<?php


/******* Mexican Wave *********/


$people = ' h e l l ';
$final = [];

if (empty($people)) {
  $final;
} else {

  $temp_arr = str_split($people);
  $turn_counter = 0;
  $temp_result_arr = [];
  $temp_final_arr = [];

  for ($x=0; $x < count($temp_arr); $x++) {

    if ($temp_arr[$x] != ' ') {

      for ($y=0; $y < count($temp_arr); $y++) {

        if ($y == $turn_counter) {
          array_push($temp_result_arr, strtoupper($temp_arr[$y]));
        } else {
          array_push($temp_result_arr, $temp_arr[$y]);
        }
      }

    }

    $turn_counter++;
  }

  $temp_final_arr = array_chunk($temp_result_arr, count($temp_arr));

  for ($y=0; $y < count($temp_final_arr); $y++) {
    array_push($final, implode($temp_final_arr[$y]));
  }

}
echo '<pre>';
var_dump($final);
echo '</pre>';

?>
