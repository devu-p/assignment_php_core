<?php
/*Write a PHP script that demonstrates the use of single-line //,
multi-line /* */  //,and inline #  comments */

// This is a single-line comment
echo "Single-line comments use double slashes // <br>";

/*
 This is a multi-line comment
 It can span multiple lines.
 Useful for longer explanations or disabling large blocks of code.
*/
echo "Multi-line comments use /* */ "."<br>";

# This is an inline comment using the hash symbol
echo "Inline comments can use the hash symbol # "."<br>";

/* This function returns the square of a number */
function square($num) {
    // Calculate the square
    return $num * $num; // Inline comment to explain the return value
}

# Calling the function
echo "The square of 4 is: " . square(4) . ""."<br>"; // Output the result


?>