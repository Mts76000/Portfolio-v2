<?php

/**
 * @param $var
 * @param $height
 * @param $fixed
 * @return void
 */
function debug($var, $height = 500, $fixed = false)
{
    $backt = debug_backtrace()[0];
    if($fixed) {
        echo '<pre style="position: fixed;top:0;left:0;right:0;height:'.$height.'px;z-index:999999;overflow-y: scroll;font-size:.8em;padding: 10px 10px 10px 220px; font-family: Consolas, Monospace; background-color: #000; color: #fff;">';
    } else {
        echo '<pre style="height:'.$height.'px;z-index:999999;overflow-y: scroll;font-size:.8em;padding: 10px 10px 10px 10px; font-family: Consolas, Monospace; background-color: #000; color: #fff;">';
    }
    echo '<p style="font-size:.85rem;">'.$backt['file'].' - '.$backt['line'].'</p>';
    print_r($var);
    echo '</pre>';
}


/**
 * @param string $file
 * @return string
 */
function asset(string $file): string  {
    return get_template_directory_uri(). '/asset/' .$file;
}


/**
 * @param string $slug
 * @return string
 */
function path(string $slug = '/'): string {
    return  esc_url(home_url($slug));
}


/**
 * @param $meta
 * @param string $key
 * @return string
 */
function web_r($meta, string $key): string {
    if(!empty($meta[$key][0])) {
        return $meta[$key][0];
    }
    return '';
}

/**
 * @param $id_post
 * @param string $size
 * @param string $alt
 * @param string $class
 * @return string
 */
function getImageOneByPostId($id_post, string $size, string $alt = '', string $class = ''): string
{
    $url = get_the_post_thumbnail_url($id_post,$size);
    if(!empty($url)) {
        return '<img src="' . $url . '" alt="' . $alt . '" class="'. $class . '" />';
    }
    return '';
}


/**
 * @param $id_media
 * @param string $size
 * @param string $alt
 * @param string $class
 * @return string
 */
function getImageById($id_media, string $size, string $alt = '', string $class = ''): string
{
    $img = wp_get_attachment_image_src($id_media,$size);
    if(!empty($img[0])) {
        return '<img src="' . $img[0] . '" alt="' . $alt . '" class="'. $class . '" />';
    }
    return '';
}


function return_objet(){
    $obj = get_queried_object();
    return $obj;
}


function verifChamp($id, $champ )
{
    if (!empty(get_post_meta($id)[$champ][0])) {
        return get_post_meta($id)[$champ][0];
    } else {
        return 'Aucune valeur';
    }
}



function showJson($data)
{
    header('Content-type: application/json');
    $json = json_encode($data);
    if($json){
        die($json);
    }
    else {
        die('Error in json encoding');
    }
}

function validText($err, $value, $keyErr, $min, $max)
{
    if (!empty($value)) {
        if (mb_strlen($value) < $min) {
            $err[$keyErr] = 'Please enter at least ' . $min . ' characters';
        } elseif (mb_strlen($value) > $max) {
            $err[$keyErr] = 'Please enter at least ' . $max . ' characters';
        }
    } else {
        $err[$keyErr] = 'Please fill in this field';
    }
    return $err;
}


function validmail($errors,$valeur,$key){
    if(!empty($valeur)) {
        if (!filter_var($valeur, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = 'Please enter a valid email address';
        }
    } else {
        $errors[$key] = 'Please enter a valid email address';
    }
    return $errors;
}

