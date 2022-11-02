<?php
$post_id    = get_the_ID();
$data       = new ANTOJITOS_Data_Post;
$categories = $data->categories($post_id);
foreach ($categories as $key => $cat) {
    $cat_html[] = '<a class="text-red text-sm" href="'.$cat['url'].'">'.$cat['name'].'</a>';
}
?>
<article>
    <a class="" href="<?php the_permalink(); ?>">
        <figure>
            <?php the_post_thumbnail( 'thumbnail', array('loading' => 'lazy') ) ?>
        </figure>
    </a>
    <?php echo $categories ? '<div class="flex justify-center mt-2">'.implode(', ', $cat_html).'</div>' : null; ?>
    <a href="<?php the_permalink(); ?>"><h2 class="text-center mt-2 text-xl text-title"><?php the_title(); ?></h2></a>
    <div class="mt-2">
        <p class="text-center"><?php echo excerpt(30); ?></p>
    </div>
    <div class="mt-3 flex justify-center">
        <div class="bg-graysl py-2 px-3 flex">
            <div class="text-sm text-grays mr-4"><svg class="ic text-red" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-user"/></svg> <span class="pl-1">Admin</span></div>
            <div class="text-sm text-grays mr-4"><svg class="ic text-red" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-clock"/></svg> <span class="pl-1">55 Min.</span></div>
            <div class="text-sm text-grays"><svg class="ic text-red fill-red" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-heart"/></svg> <span class="pl-1">4 Like</span></div>
        </div>
    </div>
</article>