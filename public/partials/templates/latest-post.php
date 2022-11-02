<?php
$args = array(
    'post_type'           => 'post',
    'posts_per_page'      => 10,
    'post_status'         => 'publish',
    'no_found_rows'       => true,
    'ignore_sticky_posts' => true,
);
$the_query = new WP_Query( $args ); ?>

<h3 class="sep text-2xl border-b mb-5 pb-2 relative text-title">Popular Recipes</h3>
<div class="grid sm:grid-cols-2 gap-7">
    <?php
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
            get_template_part( 'public/partials/templates/loop', 'main' );
       endwhile;
    endif; wp_reset_query();
    ?>
</div>