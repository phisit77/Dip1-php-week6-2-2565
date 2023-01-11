<?php
$role =     'subscribe';
$message ='';

switch($role){
    case 'admin';
    $message = 'Welcome,Admin';
    break;

    case 'admin';
    $message = 'Welcome,Author';
    break;

    case 'admin';
    $message = 'Welcome,Subscribe';
    break;
    default:
    $message = 'sorry';
}
    print($message);
?>