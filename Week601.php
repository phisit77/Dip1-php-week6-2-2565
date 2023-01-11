<?php
    $role = 'subscribe2';
    $messaga = '';

    if('admin' === $role){
        $message = 'Welcome, Addmin';
    }elseif('author' === $role){
        $message = 'Wellcome, Author';
    }elseif('subscribe' === $role){
        $message = 'Wellcome, Subscribe';
    }elseif(''){
        $message = 'Sorry';
    }
    print($message);
?>