<?php
/*Use a switch case to display the category
(Starter/Main Course/Dessert) and dish based on user selection. */

$category = "main course";  


switch (strtolower($category)) 
{
    case 'starter':
        echo "For Starter, we recommend: Spring Rolls.";
        break;
    case 'main course':
        echo "For Main Course, we recommend: Grilled Chicken with Rice.";
        break;
    case 'dessert':
        echo "For Dessert, we recommend: Chocolate Lava Cake.";
        break;
    default:
        echo "Invalid category selected. Please choose: Starter, Main Course, or Dessert.";
        break;
}


?>