<?php

/** Dates */

$current_time = time();

echo $current_time + 5 * 24 * 60 * 60 . '<br>';// getting five days
echo $current_time - 60 * 60 * 24 . '<br>';// getting yesterdays time.

// to get the date and format in the way we want it, we use
// the "php.net/manuals/en/dateandtime.
echo date('m/d/y g:ia') . '<br>';

//we can get the time of five days by doing
echo date('m/d/y g:ia', $current_time + 5 * 24 * 60 * 60);

