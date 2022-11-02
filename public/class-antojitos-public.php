<?php 
class ANTOJITOS_Public {
    private $theme_name;
    private $version;

    public function __construct( $theme_name, $version ) {
        $this->theme_name = $theme_name;
        $this->version    = $version;
    }

    public function enqueue_styles() {
        wp_enqueue_style( 'antojitos_public_css', ANTOJITOS_DIR_URI . 'public/css/antojitos_public.css', array(), filemtime(ANTOJITOS_DIR_PATH . 'public/css/antojitos_public.css'), 'all' );
    }
    
    public function enqueue_scripts() {
        wp_enqueue_script( 'antojitos_public_js', ANTOJITOS_DIR_URI . 'public/js/antojitos_public.js', [], filemtime(ANTOJITOS_DIR_PATH . 'public/js/antojitos_public.js'), true );
    }
}