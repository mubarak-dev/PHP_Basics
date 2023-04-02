<?php

/** Functions */
declare(strict_types=1);


function example() {
    return 'Assalamu alaikum';
};

$greeting = example();

echo $greeting . ' '. 'warahmatullah';

//Always store functions that returns something inside a variable.
 

// Enforcing strict types.
function strict(): string{
    return 'Assalamu alaikum warahmatullah wa barakatuhu';
};

$strict = strict();
echo $strict;

/** Functions parameters and union of functions */

//this is possible because we declared strict types.
function sum(int|float $x, int|float $y){
    return $x+$y;
};

//positioning parameters
echo sum(y:2, x:3);


//unknown multiple parameters
function multiplication(...$numbers){
    $multiples = 1;

    foreach($numbers as $number){
        $multiples = $multiples * $number;
    }

    return $multiples;
};

 $result = print_r(multiplication(1, 2, 3, 4, 5,));

 Echo $result;

