<?php

$payment_status = 'paid';

switch($payment_status){
    case 'paid':
        echo 'paid';
        break;
    
    case 'declined':
        echo 'declined';
        break;

    case 'pending':
        echo 'pending';
        break;

    default:
        echo 'unknown payment status';
};