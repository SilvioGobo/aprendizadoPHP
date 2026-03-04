<?php 

    // array = "varible" whitch can hold more thab one value at time

    //$food_1 = "apple";
    //$food_2 = "orange";
    //$food_3 = "banana";
    //$food_4 = "coconut";
    $foods = array("apple", "orange", "banana", "coconut");
    //echo $foods[0] . "<br>";
    //echo $foods[1] . "<br>";
    //echo $foods[2] . "<br>";
    //echo $foods[3] . "<br>";

    // change the element 
    //$foods[0] = "pineapple";

    //add element to array 
    //array_push($foods, "pineapple", "kiwi");

    //remove the last element 
    //array_pop($foods);

    //remove the first element
    //array_shift($foods);

    //reverse array
    //$foods = array_reverse($foods);

    //count the elements
    //echo count($foods);
    
    
    foreach($foods as $food){
        echo $food . "<br>";
      
    }
?>