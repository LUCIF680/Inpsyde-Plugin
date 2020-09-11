<?php 
/*For cache purpose*/ 
$tsstring = gmdate('D, d M Y H:i:s ', $timestamp) . 'GMT';
$etag = $language . $timestamp;

$if_modified_since = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false;
$if_none_match = isset($_SERVER['HTTP_IF_NONE_MATCH']) ? $_SERVER['HTTP_IF_NONE_MATCH'] : false;
if ((($if_none_match && $if_none_match == $etag) || (!$if_none_match)) &&
    ($if_modified_since && $if_modified_since == $tsstring))
{
    header('HTTP/1.1 304 Not Modified');
    exit();
}
else
{
    header("Last-Modified: $tsstring");
    header("ETag: \"{$etag}\"");
}

if ($wp->query_vars['api'] == "users")
    $json_response = wp_remote_retrieve_body(wp_safe_remote_get('https://my-json-server.typicode.com/lucif680/Motaku/users' ) );

    if (!empty($json_response)){
        set_query_var('users' ,json_decode($json_response,true));
        set_query_var('url', get_site_url(null, '/wp-content/plugins/Inpsyde/view/', 'http'));
        load_template(dirname(__FILE__).'/view/show_table.php');
    }else
        echo "This page doesnt exists";