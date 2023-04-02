<?php

/** require / require_once / include / include_once */

// require_once => file is reqired only once. no duplication.
// include_once => file is reqired only once. no duplication.

 require 'example.php';
 echo $greeting  .' '. 'mubarak';

 include 'example.php';
 echo $name;

 //converting to string
 ob_start();
 include './partials/navigations.php';
 $string = ob_get_clean();// converted to string

 //replacing the strings.
 $string = str_replace('Contact us', 'Call us', $string );
 
 echo $string;