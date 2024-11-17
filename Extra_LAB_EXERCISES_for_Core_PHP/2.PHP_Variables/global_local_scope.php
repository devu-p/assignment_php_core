<?php
// Declare a global variable
$globalVar = "I am a global variable";

function testVariables() {
    // Declare a local variable
    $localVar = "I am a local variable";
    
    global $globalVar;
    
    // Display the local variable 
    echo "Inside the function:<br>";
    echo "Local Variable: $localVar<br>";
    echo "Global Variable (accessed inside function): $globalVar<br><br>";
}

testVariables();

// Try to access the local variable outside the function 
echo "Outside the function:<br>";
echo "Global Variable: $globalVar<br>";  
// Uncommenting the next line will result in an error:
// echo "Local Variable: $localVar";  // ERROR: Undefined variable $localVar
?>