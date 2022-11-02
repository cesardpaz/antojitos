<?php 
class ANTOJITOS_Menus {

    public function create_menu() {
        register_nav_menus
        (
            array(
                'header' => 'Header',
            )
        );
    }
}			  