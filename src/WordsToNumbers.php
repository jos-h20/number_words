<?php
class WordsToNumbers
{
  function makeWords($input_number)
  {
    $single_digit_array = array("one" => "1", "two" => 2, "three" => 3);

    $number = str_split($input_number);

    return array_search($number, $single_digit_array);

  }
}

?>
