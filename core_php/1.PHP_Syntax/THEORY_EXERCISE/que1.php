1. Discuss the structure of a PHP script and how to embed PHP in HTML.

ans:

1. Basic Structure of a PHP Script
A typical PHP script begins with the opening PHP tag <?php and ends with the closing tag ?>. Code written between these tags is processed by the PHP interpreter.

<?php
  // PHP code goes here
  echo "Hello, World!"; // Output a string to the browser
?>

Opening Tag: <?php marks the beginning of a PHP block.
Closing Tag: ?> marks the end of the PHP block. In modern PHP (especially in files that only contain PHP), the closing tag is often omitted to avoid accidental output and increase security.

2.Embedding PHP into HTML
PHP is commonly embedded inside an HTML document to produce dynamic content. You can mix HTML and PHP by inserting PHP code into your HTML using the PHP tags.


