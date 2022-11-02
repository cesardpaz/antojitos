<?php get_header(); ?>

    <div class="container mx-auto">

        <?php get_template_part( 'public/partials/templates/carousel', 'post' ); ?>

        <div class="mt-10 flex flex-wrap">
            <div class="lg:w-[calc(100%_-_300px)] lg:pr-8">
                <?php get_template_part( 'public/partials/templates/latest', 'post' ); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>