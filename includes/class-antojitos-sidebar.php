<?php 
class ANTOJITOS_Sidebar {
    public function create_sidebar() {
        register_sidebar( array(
            'name'          => __( 'Sidebar Principal', 'antojitos' ),
            'id'            => 'sidebar-principal',
            'description'   => __( 'Sidebar principal del theme', 'antojitos' ),
            'before_widget' => '<section id="%1$s" class="%2$s widget mb-10 last:mb-0">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="sep text-2xl border-b mb-5 pb-2 relative text-title">',
            'after_title'   => '</h3>',
        ) );
    }
}		  