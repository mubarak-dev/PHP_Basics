<?php 

/** variable, anonimous & arrow function */

// variable function
function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
};

$x = 'sum';

if(is_callable($x)){
    echo $x(1,2,3,4,);
}else{
    echo 'NOT CALLABLE';
};


//Anonimous function
$sum = function (int|float ...$numbers): int|float {
    return array_sum($numbers);
};

echo $sum(1,2,3,4);

// Array map

$array= [1,2,3,4,];

$array1 = array_map(function($element){
    return $element + 2;
}, $array);

echo '<pre>';
print_r($array);

print_r($array1);
'</pre>';

/*
we can define anonimous function first then
then put it inside the variable $x and map it
like array_map($x, $array);. then echo it.
*/

//Arrow  functions.

$array = [1,2,3,4,];

$array3 = array_map(fn($map) => $map + 2, $array);

echo '<pre>';
print_r($array3);
'</pre>';


// you cannot have multiline in Arrow functions


















