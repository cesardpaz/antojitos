<?php
/* TODO: Show for categories */
?>

<section class="mt-10">
    <h3 class="sep text-2xl border-b mb-5 pb-2 relative text-title">Otras recetas</h3>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-8 mt-4">
        <?php
        $args = array(
            'post_type'           => 'post',
            'posts_per_page'      => 3,
            'post_status'         => 'publish',
            'no_found_rows'       => true,
            'ignore_sticky_posts' => true,
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
                get_template_part( 'public/partials/templates/loop', 'sidebar', ['date' => false] );
            endwhile;
        endif; wp_reset_query();
        ?>
    </div>
</section>