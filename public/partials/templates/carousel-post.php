<?php $args = array(
    'post_type'           => 'post',
    'posts_per_page'      => 3,
    'post_status'         => 'publish',
    'no_found_rows'       => true,
    'ignore_sticky_posts' => true,
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
    <div class="splide" role="group" aria-label="Latest articles">
        <div class="splide__track">
            <ul class="splide__list">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                    get_template_part( 'public/partials/templates/loop', 'carousel' );
                endwhile; ?>
            </ul>
        </div>
    </div>
    <?php
endif; wp_reset_query();  ?>