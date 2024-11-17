/*
Create a form that takes a user's name and email. Use the $_POST super global to display the entered data.
*/
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
    </head>
    <body>
        <form  method="post" >
            <h2>
                User Details
            </h2>
            Name : <input type ="text" name ="name" required>
            Email : <input type = "email" name ="email" required >
            <input type ="submit" name ="submit">
        </form>
    </body>
    </html>
    
    
    <?php
if (isset($_POST['submit'])) 
{

    $name = ($_POST['name']);
    $email = ($_POST['email']);

    echo "<h2>Your Submitted Information</h2>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
} 

?>


