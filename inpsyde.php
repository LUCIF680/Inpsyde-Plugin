<?php
/**
 * @package Inpsyde
 * @version 1.0.0
 */
/*
Plugin Name: Inpsyde
Description: Nice working with you
Author: Pratik Mazumdar
Version: 1.0.0
*/

add_action( 'init', function(){
    add_rewrite_rule( 'users.php$', 'index.php?api=$matches[1]', 'top' );
});

add_filter( 'query_vars', 'query_vars' );
function query_vars( $query_vars ){
    $query_vars[] = 'api';
    return $query_vars;
}

add_action( 'parse_request', function(&$wp){
    if ( array_key_exists( 'api', $wp->query_vars ) ) {
        include 'users.php';
        exit();
    }	
    return;
});