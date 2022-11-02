<?php 
add_action( 'widgets_init', function(){
    register_widget( 'wdgt_categories' );
});

class wdgt_categories extends WP_Widget {

    public function __construct() {
        $widget_ops = array(
            'classname'   => 'wdgt_categories',
            'description' => 'Show list of categories',
        );
        parent::__construct( 'wdgt_categories', 'Antojitos: Categories list', $widget_ops );
    }

    public function widget( $argus, $instance ) {
 
        echo $argus['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $argus['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $argus['after_title'];
        } ?>


        <?php

        $categories =  get_terms( array(
            'taxonomy'   => 'category',
            'hide_empty' => true,
        ) );

        if ( ! empty( $categories ) && ! is_wp_error( $categories ) ){
            echo '<div><ul>';
            foreach( $categories as $cat ){
                $id   = $cat->term_id;
                $name = $cat->name;
                $count = $cat->count;
                $url  = get_term_link( $cat );
                echo '<li class="mb-4 last:mb-0"><a class="flex justify-between" href="'.$url.'">'.$name.' <span>('.$count.')</span></a></li>';
            }
            echo '</ul></div>';
        } ?>
        
        <?php echo $argus['after_widget'];
    }


    #Parameters Form of Widget
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : false;
        ?>

        <div class="wdgt-tt">
            <div>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'slug' ); ?></label>
                <div class="fr-input">
                    <span class="dashicons dashicons-edit-large"></span>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
                </div>
                    
            </div>
        </div>

        <?php
    }


    #Save Data
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
        foreach( $new_instance as $key => $value )
        {
            $updated_instance[$key] = sanitize_text_field($value);
        }

        return $updated_instance;
    }
}