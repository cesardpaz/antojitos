<?php 
class ANTOJITOS_Data_Post {

    public function categories($post_id){
        $categories = get_the_terms( $post_id, 'category' );
        $cats       = false;
        if ( $categories && ! is_wp_error( $categories ) ) :
            $cats = [];
            foreach ( $categories as $cat ) {
                $url  = get_term_link( $cat );
                $name = $cat->name;
                $cats[] = [
                    'url'  => $url,
                    'name' => $name,
                ];
            }
        endif;
        return $cats;
    }
}	