<?php
// Generate random number between 1 and 100
$randomNumber = rand(1, 100);

// Create a message box with a fun message
$message = "<div style='background-color: #f7c6c5; border: 1px solid #e66465; padding: 20px; text-align: center; font-family: Arial, sans-serif; font-size: 24px; font-weight: bold; color: #e66465;'>You're a lucky one! Your random number is <span style='color: #000;'>$randomNumber</span>!</div>";

// Display the message box
echo $message;
?>
