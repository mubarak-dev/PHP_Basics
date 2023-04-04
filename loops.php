<?php
/** LOOPS */

//While
$i=0;
while ($i <=10){
    echo $i . '<br>';
    $i++;
}

//do-while
do {
    echo $i++;
} while ($i <= 15);

//for
for ($i=0; $i<=15; $i++){
    echo $i;
};

// performance issues
$text= ['a','b','c','d'];
$lenght= count($text);

for($i=0; $i<$lenght; $i++){
    echo $text[$i] . '<br>';
}

//foreach -> (used to iterate over arrays or objects)
$families= ['father', 'mother', 'brothers', 'sisters'];

foreach($families as $member){
    echo $member . '<br>';
}

// iterating through associative arrrays
$user= [
    'name'=> 'mubarak',
    'email'=> 'msanimusa463@gmail.com',
    'skills' => ['HTML', 'PHP', 'CSS'],
];

foreach($user as $key => $value){
    echo $key . ':' . $value . '<br>';// this will give an error because we cant echo arrays.
    // to solve that we need to encode into json or implode.
    // example:
    echo $key . ':' . json_encode($value) . '<br>';
};

//or we can check whether its array.
foreach($user as $key => $value){
    echo $key . ':';

    if (is_array($value)){
        foreach($value as $skill){
            echo $skill . ',';
        }
    }else{
        echo $value;
    }

    echo '<br>';
};



















