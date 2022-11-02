<?php get_header(); ?>

    <div class="single-title relative py-16 bg-single">
        <div class="container mx-auto relative z-10">
            <h1 class="text-center text-white text-4xl"><?php echo get_search_query(); ?></h1>
            <?php get_template_part( 'public/partials/templates/breadcumb', 'search'); ?>
        </div>
    </div>

    <div class="container mx-auto">

        <div class="mt-10 flex flex-wrap">
            <div class="lg:w-[calc(100%_-_300px)] lg:pr-8">
                <div class="grid sm:grid-cols-2 gap-7">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            get_template_part( 'public/partials/templates/loop', 'main' );
                        endwhile;
                    endif; wp_reset_query(); ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>