<?php
    function unit_test($msg,$var){
        $backtrace = debug_backtrace(0)[0];
        is_callable($var) and $var = $var(); 
        global $e;
        $e = $e || !$var;
       if (!$var){
           echo $msg.', Line no: '.$backtrace['line'];
       }
    }
    register_shutdown_function(function(){
        global $e;
        $e and die(1);
    });
