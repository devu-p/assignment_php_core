<?php
/*

Write a PHP program to determine if a number is even or odd using if conditions

*/

?>
<?php
 
function check($number)
{
    if($number % 2 == 0)
    {
        echo "Even"; 
    }
    else
    {
        echo "Odd";
    }
}

check(10)

?>
