<?php
$inputString = "Hello";
$reversedString = "";
$length = strlen($inputString);
for ($i = $length - 1; $i >= 0; $i--) {
    $reversedString .= $inputString[$i];
}
  echo "Input: \"$inputString\"\n";
  echo "Output: \"$reversedString\"\n";
?>
