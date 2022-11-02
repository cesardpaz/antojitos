<?php 
add_filter( 'rwmb_meta_boxes', 'mbi_create_field' );
function mbi_create_field( $meta_boxes ) {
    $meta_boxes[] = array(
        'id'         => 'field_antojitos', 
        'title'      => 'Datos Adicionales', 
        'post_types' => array('post'),
        'context'    => 'advanced',
        'priority'   => 'default',
        'autosave'   => false,
        'fields'     => array(
            array(
                'id'   => 'duration',
                'type' => 'text',
                'name' => 'Duración de preparación',
                'size' => 60,
            ),
        ),
    );
    return $meta_boxes;
}