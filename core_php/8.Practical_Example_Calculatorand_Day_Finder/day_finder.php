<?php
/*Write a script that finds the current day. If it is Sunday, print "Happy
Sunday." */



  // Get the current day of the week
  $currentDay = date('l');

  // Check if it's Sunday
  if ($currentDay == 'Sunday') 
  {
    echo "Happy Sunday!";
  }
?>

