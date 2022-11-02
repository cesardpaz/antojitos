<?php get_header(); ?>

    <div class="single-title relative py-16 bg-single">
        <div class="container mx-auto relative z-10">
            <h1 class="text-center text-white text-4xl">Error 404</h1>
            <?php get_template_part( 'public/partials/templates/breadcumb', 'single', ['cat' => false] ); ?>
        </div>
    </div>

    <div class="container mx-auto">
        <figure>
            <img class="mx-auto" src="<?php echo ANTOJITOS_DIR_URI . 'public/img/404.png';  ?>" alt="404">
        </figure>
        <div class="text-center mt-10">
            <h3 class="text-2xl lg:text-4xl">¡Lo siento! No se encontró la página</h3>
        </div>
    </div>

<?php get_footer(); ?>