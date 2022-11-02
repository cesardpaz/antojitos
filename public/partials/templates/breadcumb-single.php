<?php
$categories = $args['cat'];
?>

<div class="flex justify-center mt-3 text-white items-center text-sm">
    <a href="<?php echo esc_url( home_url() ); ?>">Home</a>
    <svg class="ic text-white ml-2 mr-2 text-xs" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-angle-left"/></svg>
    <?php if($categories){ ?>
        <a href="<?php echo $categories[0]['url']; ?>"><?php echo $categories[0]['name']; ?></a>
        <svg class="ic text-white ml-2 mr-2 text-xs" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-angle-left"/></svg>
    <?php } ?>
    <span class="text-graysl"><?php the_title(); ?></span>
</div>