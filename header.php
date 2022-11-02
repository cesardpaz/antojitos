<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>    

    <section>
        <div class="header border-b pt-3 pb-4">
            <div class="container mx-auto flex justify-between items-center">
                <div>
                    <a href="<?php echo esc_url( home_url() ); ?>">

                        <?php
                        /* TODO: Falta Añadir Logo de Opciones Theme */
                        ?>
                        <figure>
                            <img class="w-40" src="<?php echo ANTOJITOS_DIR_URI . 'public/img/logo.png' ?>" alt="logo">
                        </figure>
                    </a>
                </div>
                <div>

                    <a href="javascript:void(0)" onclick="window.open ('https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>', 'Facebook', 'toolbar=0, status=0, width=650, height=450');" class="mr-4 hover:text-facebook text-title"><svg class="ic text-2xl" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-facebook"/></svg></a>

                    <a class="hover:text-twitter text-title mr-4" href="javascript:void(0)" onclick="javascript:window.open('https://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&amp;tw_p=tweetbutton&amp;url=<?php the_permalink(); ?>', 'Twitter', 'toolbar=0, status=0, width=650, height=450');"><svg class="ic text-2xl" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-twitter"/></svg></a>

                    <button id="menu-mobile" class="xl:hidden">
                        <svg class="ic text-xl text-red" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public/img/ic.svg#ic-menu'; ?>"/></svg>
                    </button>
                </div>
            </div>
        </div>
        <nav id="nav-menu" class="container mx-auto py-2 hidden xl:flex justify-start xl:justify-between items-center flex-col xl:flex-row">

            <?php
            /* TODO: Falta ajustar cuando hay muchos items en menu mobile y desktop */
            if ( has_nav_menu( 'header' ) ) {
                wp_nav_menu(
                    array(
                        'menu'           => 'MenuHeader',
                        'theme_location' => 'header',
                        'container'      => false,
                        'items_wrap'     => '<ul class="w-full xl:w-auto flex menu-header mb-3 xl:mb-0">%3$s</ul>',
                    )
                );
            } ?>

            <div class="w-full xl:w-80">
                <?php get_search_form(); ?>
            </div>
        </nav>
    </section>