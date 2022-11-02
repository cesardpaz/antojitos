<?php
$post_id    = get_the_ID();
$data       = new ANTOJITOS_Data_Post;

$categories = $data->categories($post_id);
foreach ($categories as $key => $cat) {
    $cat_html[] = '<a class="text-red" href="'.$cat['url'].'">'.$cat['name'].'</a>';
}
?>

<li class="splide__slide">
    <a href="<?php the_permalink(); ?>">
        <figure class="lg:h-36a h-80">
            <?php the_post_thumbnail( 'full', array('loading' => 'lazy', 'class' => 'object-cover w-full h-full') ); ?>
        </figure>
    </a>
    <div class="absolute bottom-0 left-2/4 lg:w-500 w-80 mx-auto -translate-x-2/4 bg-white px-6 py-4">
        <?php echo $categories ? '<div class="text-center">'.implode(', ', $cat_html).'</div>' : null;  ?>
        <a href=""><h2 class="text-2xl lg:text-3xl text-title mt-2 text-center font-bold">
            <?php the_title(); ?>
        </h2></a>
    </div>
</li>