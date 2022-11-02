<?php 
class ANTOJITOS_Theme_Support {

    public function add_support(){
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background');
    }

    public function remove_elements_wordpress(){

        remove_action( 'wp_head', 'feed_links', 2 );
        remove_action('wp_head', 'feed_links_extra', 3 ); 
        remove_filter('the_content', 'wptexturize');
        remove_filter('the_title', 'wptexturize');
        remove_filter('single_post_title', 'wptexturize');
        remove_filter('comment_text', 'wptexturize');
        remove_filter('the_excerpt', 'wptexturize');
        remove_filter('content_save_pre', 'wp_filter_post_kses');
        remove_filter('content_filtered_save_pre', 'wp_filter_post_kses'); 
        add_filter( 'emoji_svg_url', '__return_false' );
        remove_action( 'wp_head', 'wp_resource_hints' );
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'start_post_rel_link');
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'adjacent_posts_rel_link');
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'wp_head', 'print_emoji_detection_script');
        //add_filter('show_admin_bar','__return_false');
        add_filter('the_generator', '__return_false');
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
        remove_action('wp_head', 'wp_shortlink_wp_head');
        remove_action( 'wp_head', 'dns-prefetch' );
        remove_action( 'wp_head', 'rest_output_link_wp_head' );
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

        remove_action( 'admin_print_styles', 'print_emoji_styles' );
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
        remove_action('wp_head', 'wp_oembed_add_host_js');
    }

    public function remove_gutemberg(){
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-block-style' );
    }

}