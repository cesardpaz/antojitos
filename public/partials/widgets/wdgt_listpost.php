<?php 
add_action( 'widgets_init', function(){
    register_widget( 'wdgt_listpost' );
});

class wdgt_listpost extends WP_Widget {

    public function __construct() {
        $widget_ops = array(
            'classname' => 'wdgt_listpost',
            'description' => 'Show list post',
        );
        parent::__construct( 'wdgt_listpost', 'Antojitos: List post', $widget_ops );
    }

    public function widget( $argus, $instance ) {
 
        echo $argus['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $argus['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $argus['after_title'];
        }
        $args = array(
            'post_type'           => 'post',
            'posts_per_page'      => 3,
            'post_status'         => 'publish',
            'no_found_rows'       => true,
            'ignore_sticky_posts' => true,
        );
        $list_query = new WP_Query( $args );
        if ( $list_query->have_posts() ) :
            echo '<div class="gap-x-4 gap-y-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1">';
                while ( $list_query->have_posts() ) : $list_query->the_post();
                    get_template_part( 'public/partials/templates/loop', 'sidebar' );
                endwhile;
            echo '</div>';
        endif; wp_reset_query();
        echo $argus['after_widget'];
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