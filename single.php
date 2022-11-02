<?php get_header();

    $post_id    = get_the_ID();
    $data       = new ANTOJITOS_Data_Post;
    $categories = $data->categories($post_id);
    foreach ($categories as $key => $cat) {
        $cat_html[] = '<a class="text-sm text-text" href="'.$cat['url'].'">'.$cat['name'].'</a>';
    } ?>

    <div class="single-title relative py-16 bg-single">
        <div class="container mx-auto relative z-10">
            <h1 class="text-center text-white text-4xl"><?php the_title(); ?></h1>
            <?php get_template_part( 'public/partials/templates/breadcumb', 'single', ['cat' => $categories] ); ?>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="mt-10 flex flex-wrap">
            <div class="lg:w-[calc(100%_-_300px)] lg:pr-8">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center">
                        <svg class="mr-1 ic text-red" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-tag"/></svg> <?php echo $categories ? implode(', ', $cat_html) : null; ?>
                    </div>
                    <div class="flex items-center">
                        <svg class="mr-1 ic text-red" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-calendar"/></svg> <span class="text-sm text-text"><?php echo get_the_date(); ?></span>
                    </div>
                </div>

                <figure>
                    <?php the_post_thumbnail( 'full', array('loading' => 'lazy') ); ?>
                </figure>

                <?php get_template_part( 'public/partials/templates/single', 'info' ); ?>
                <div class="mt-4 entry-content">
                    <?php the_content(); ?>
                </div>

                <?php get_template_part( 'public/partials/templates/single', 'details' ); ?>

                <?php get_template_part( 'public/partials/templates/single', 'related' ); ?>

            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>