<?php get_header();

    $post_id    = get_the_ID();
    $categories = false;
    ?>

    <div class="single-title relative py-16 bg-single">
        <div class="container mx-auto relative z-10">
            <h1 class="text-center text-white text-4xl"><?php the_title(); ?></h1>
            <?php get_template_part( 'public/partials/templates/breadcumb', 'single', ['cat' => $categories] ); ?>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="mt-10 flex flex-wrap">
            <div class="lg:w-[calc(100%_-_300px)] lg:pr-8">

                <div class="mt-4 entry-content">
                    <?php the_content(); ?>
                </div>

            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>