Explain what PHP expressions are and give examples of arithmetic and logical
operations

ans:
In PHP, expressions are combinations of variables, operators, and values that PHP interprets to produce a result. An expression can be as simple as a single value (e.g., a number or a string) or more complex, involving arithmetic, logical, and other operations that PHP can evaluate.

Arithmetic Operators:

+ (Addition) - Adds two numbers.
- (Subtraction) - Subtracts the right operand from the left operand.
* (Multiplication) - Multiplies two numbers.
/ (Division) - Divides the left operand by the right operand.
% (Modulus) - Returns the remainder of the division of two numbers.

<?php
$a = 10;
$b = 5;

// Addition
$result = $a + $b; // $result = 15

// Subtraction
$result = $a - $b; // $result = 5

// Multiplication
$result = $a * $b; // $result = 50

// Division
$result = $a / $b; // $result = 2

// Modulus (remainder of division)
$result = $a % $b; // $result = 0
?>

Logical Operators:

&& (Logical AND) - Returns true if both operands are true.
|| (Logical OR) - Returns true if at least one operand is true.
! (Logical NOT) - Reverses the boolean value of the operand (negates it).
and - Same as && (lower precedence).
or - Same as || (lower precedence).
xor (Logical XOR) - Returns true if exactly one operand is true

<?php
$x = true;
$y = false;

// AND operation
$result = $x && $y; // $result = false

// OR operation
$result = $x || $y; // $result = true

// NOT operation
$result = !$x; // $result = false

// XOR operation
$result = $x xor $y; // $result = true
?>

