<?php
/**
 * Plugin Name: WP Basic Demo
 * Description: Custom plugin for practice.
 * Version: 1.0
 * Author: Sunmoon Bappy
 */

function wpbd_hello_world() {
    return "Hello World from WP Plugin!";
}
add_shortcode('wpbd_hello', 'wpbd_hello_world');
