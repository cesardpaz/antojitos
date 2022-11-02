<?php 
class ANTOJITOS_Master {
    protected $charger;
    protected $theme_name;
    protected $version;
    public function __construct() {
        $this->theme_name = 'ANTOJITOS_Theme';
        $this->version = ANTOJITOS_VERSION;
        $this->load_dependencies();
        $this->load_instances();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }
    private function load_dependencies() {

        require_once ANTOJITOS_DIR_PATH . 'includes/class-antojitos-charger.php';        
        require_once ANTOJITOS_DIR_PATH . 'includes/class-antojitos-build-menupage.php';
        require_once ANTOJITOS_DIR_PATH . 'includes/class-antojitos-support.php';
        require_once ANTOJITOS_DIR_PATH . 'includes/class-antojitos-menu.php';
        require_once ANTOJITOS_DIR_PATH . 'admin/class-antojitos-admin.php';
        require_once ANTOJITOS_DIR_PATH . 'public/class-antojitos-public.php';
        require_once ANTOJITOS_DIR_PATH . 'includes/class-antojitos-sidebar.php';
        require_once ANTOJITOS_DIR_PATH . 'includes/data/class-antojitos-data-post.php';

        /* Widgets */
        require_once ANTOJITOS_DIR_PATH . 'public/partials/widgets/wdgt_categories.php';
        require_once ANTOJITOS_DIR_PATH . 'public/partials/widgets/wdgt_listpost.php';

        /* Mbi */
        require_once ANTOJITOS_DIR_PATH . 'helpers/mbi/meta-box/meta-box.php';
        require_once ANTOJITOS_DIR_PATH . 'helpers/mbi/field.php';
       
    }
    private function load_instances() {
        $this->charger           = new ANTOJITOS_Charger;
        $this->antojitos_admin   = new ANTOJITOS_Admin( $this->get_theme_name(), $this->get_version() );
        $this->antojitos_public  = new ANTOJITOS_Public( $this->get_theme_name(), $this->get_version() );
        $this->antojitos_support = new ANTOJITOS_Theme_Support;
        $this->menu              = new ANTOJITOS_Menus;
        $this->sidebar           = new ANTOJITOS_Sidebar;
    }
    private function define_admin_hooks() {
        $this->charger->add_action( 'admin_enqueue_scripts', $this->antojitos_admin, 'enqueue_styles' );
        $this->charger->add_action( 'admin_enqueue_scripts', $this->antojitos_admin, 'enqueue_scripts' );
        $this->charger->add_action( 'wp_enqueue_scripts', $this->antojitos_support, 'remove_gutemberg' );
        $this->charger->add_action( 'init', $this->antojitos_support, 'add_support' );
        $this->charger->add_action( 'init', $this->antojitos_support, 'add_support' );
        $this->charger->add_action( 'init', $this->menu, 'create_menu' );
        $this->charger->add_action( 'init', $this->sidebar, 'create_sidebar' );
    }
    private function define_public_hooks() {
        $this->charger->add_action( 'wp_enqueue_scripts', $this->antojitos_public, 'enqueue_styles' );
        $this->charger->add_action( 'wp_footer', $this->antojitos_public, 'enqueue_scripts' );
    }
    public function run() {
        $this->charger->run();
    }
    public function get_theme_name() {
        return $this->theme_name;
    }
    public function get_charger() {
        return $this->charger;
    }
    public function get_version() {
        return $this->version;
    }
}