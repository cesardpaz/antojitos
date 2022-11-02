<div class="flex justify-center mt-3 text-white items-center text-sm">
    <a href="<?php echo esc_url( home_url() ); ?>">Home</a>
    <svg class="ic text-white ml-2 mr-2 text-xs" aria-hidden="true"><use xlink:href="<?php echo ANTOJITOS_DIR_URI . 'public'; ?>/img/ic.svg#ic-angle-left"/></svg>
    <span class="text-graysl"><?php echo get_search_query(); ?></span>
</div>