1. Explain the concept of variables in PHP and their scope.

Variable in PHP:

A variable in PHP is a symbol or a name that holds a value. It begins with a dollar sign ($) followed by a valid variable name. PHP variables are loosely typed, meaning they do not require explicit declaration of the type (such as int, string, etc.). PHP automatically assigns a type to the variable based on the value assigned to it.

Variable Scope in PHP
In PHP, the scope of a variable refers to the context in which a variable is accessible or visible. Variables in PHP can be classified into different types based on their scope:

a. Global Scope
A variable declared outside of any function or class has global scope. It is accessible from anywhere in the script, but it is not directly accessible inside functions unless you use a special keyword.

b. Local Scope
A variable declared inside a function or method has local scope. It is only accessible within that function and cannot be accessed outside of it.

c. Function Parameter Scope
Parameters passed to a function also have local scope within that function. These parameters are only accessible during the execution of that function.

d. Static Variables
A static variable retains its value between function calls. It is declared inside a function but persists even after the function execution is complete. 

e. Superglobals
PHP has a number of predefined global arrays called superglobals that are always accessible, regardless of scope. 