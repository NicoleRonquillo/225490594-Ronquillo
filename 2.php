<?php
$correctPassword = "password123";
$userInput = "";
  while ($userInput !== $correctPassword) {
    echo "Please enter the password: ";

  if ($userInput !== $correctPassword) {
        echo "Incorrect password. Please try again.\n"; 
    }
}
echo "Access Granted.\n";
?>
