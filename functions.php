<?php 
global $wpdb;

define( 'ANTOJITOS_VERSION',  '1.0.0'  );

$antojitos_path = ( substr( get_template_directory(),     -1 ) === '/' ) ? get_template_directory()     : get_template_directory()     . '/';
$antojitos_uri  = ( substr( get_template_directory_uri(), -1 ) === '/' ) ? get_template_directory_uri() : get_template_directory_uri() . '/';

define( 'ANTOJITOS_DIR_PATH', $antojitos_path );
define( 'ANTOJITOS_DIR_URI',  $antojitos_uri  );

require_once ANTOJITOS_DIR_PATH . 'includes/class-antojitos-master.php';

function run_antojitos_master() {
    $antojitos_master = new ANTOJITOS_Master;
    $antojitos_master->run();
}

run_antojitos_master();

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}

/* TODO: pagination */