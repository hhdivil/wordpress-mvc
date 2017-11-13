<?php

/**
 * Plugin Name: Wordpress MVC
 * Description: An MVC Framework for Wordpress
 */

define('MVC_PLUGIN_DIR', __DIR__);
define('MVC_LIB_DIR', MVC_PLUGIN_DIR . '/lib');

require_once(MVC_PLUGIN_DIR . '/autoload.php');

function mvc_shortcode ($atts)
{
	$controller = $atts['controller'];
    $action = (array_key_exists('action', $atts)) ? $atts['action'] : 'index';

    $c = new $controller();
    $v = $c->$action();
    $v->render();
}
add_shortcode('wpmvc', 'mvc_shortcode');
