<?php 
require_once __DIR__.'/test.php';

function wp_safe_remote_get($var){
    return array('a'=>20,'b'=>30,'c'=>40);
}
function wp_remote_retrieve_body($array){
    return json_encode($array);
}
function set_query_var($array_key,$value){
    $GLOBALS[$array_key] = $value;
}
function get_site_url($x,$y,$z){
    return "{$z}/localhost/wordpress{$y}";
}
function load_template($var){
    return true;
}
function check_globals(){
    return array_key_exists('users',$GLOBALS) and array_key_exists('url',$GLOBALS);
}

unit_test('Error Occured',function(){
    $json_response = wp_remote_retrieve_body(wp_safe_remote_get('https://my-json-server.typicode.com/lucif680/Motaku/users' ));
    if (!empty($json_response)){
        set_query_var('users' ,json_decode($json_response,true));
        set_query_var('url', get_site_url(null, '/wp-content/plugins/Inpsyde/view/', 'http'));
        load_template(dirname(__FILE__).'/view/show_table.php');
        return check_globals();
    }
    return false;
});