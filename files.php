<?php

/** Working with files */

$dir = scandir(__DIR__);//scanning the whole directory
//var_dump($dir);

// mkdir('testing');
// mkdir('css/style',recursive: true);

// rmdir('testing'); //directory testing will be gone
// rmdir('css/style');// style directory will be gone


//we can check whether the file exist by
if(file_exists('css/style')){
    //clearstatcache(); // to clear cached directory if deleted
    $filesize =  filesize('css/style');
    echo 'the file size is'. $filesize;
}else{
    echo ('file does not exist');
};

//clearstatcache(); // to clear cached directory
if(! file_exists('css')){
    echo 'file not found';
};

$file = fopen('dates.php', 'r');

//read file by line
while(($line = fgets($file)) !== false){
    echo $line . '<br>';
};
//to get csv file we use fgetcsv($file). and it
//will return an array of elements using comma. each cooma represent a single array value.  
fclose($file);

// $content = file_get_contents( 'array.php', offset:3, length:2 );
// echo $content;

// file_put_contents('example.txt', 'assalamu alaikum');
// file_put_contents('example.txt', 'warahmatullah', FILE_APPEND );



// to delete a file 
unlink('example.txt');

//copy a file
//copy('example.txt', 'foo.txt');

/** rename */
//rename('example.txt', 'foo.txt');





