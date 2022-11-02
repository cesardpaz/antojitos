<?php
$post_id = get_the_ID();
$data    = new ANTOJITOS_Data_Post;
$date = isset($args['date']) ? $args['date'] : true;

$categories = $data->categories($post_id);
foreach ($categories as $key => $cat) {
    $cat_html[] = '<a class="text-red text-xs" href="'.$cat['url'].'">'.$cat['name'].'</a>';
}

?>
<article class="last:mb-0">
    <a href="<?php the_permalink(); ?>">
        <figure>
            <?php the_post_thumbnail( 'thumbnail', array('loading' => 'lazy') ); ?>
        </figure>
    </a>
    <div>
        <?php echo $categories ? '<div>'.implode(', ', $cat_html).'</div>' : null;  ?>
        <a href="<?php the_permalink(); ?>">
            <h2 class="text-xl text-title"><?php the_title(); ?></h2>
        </a>
        <?php if($date){ ?>
            <span class="text-xs flex items-center mt-2">
                <svg class="ic mr-2" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-clock"/></svg> <?php echo get_the_date(); ?>
            </span>
        <?php } ?>
    </div>
</article>