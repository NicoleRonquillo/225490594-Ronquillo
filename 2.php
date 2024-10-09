<?php
$correctPassword = "password123";
    
  do  {
    echo "Please enter the password: ";
    $userInput = readline();
    if ($userInput != $correctPassword) {
    echo "Incorrect Password\n";
  } 
}
while ($userInput != $correctPassword);
echo "Access Granted";
?>
