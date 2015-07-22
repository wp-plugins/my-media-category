<?php
/**
 * Plugin Name: My Media Category
 * Plugin URI:  http://www.idreamwebsolutions.com/
 * Text Domain: media_category
 * Description:  You can create Multiple category and post tag and get data from that category(ex. Images,other details)
 * Version:     1.0.0
 * Author:     Ahir Hemant
 * Author URI:  http://www.idreamwebsolutions.com
 * License:     GPLv3
 */


add_action( 'init', 'media_attachment_taxonomies' );
function media_attachment_taxonomies() {

    $taxonomies = array( 'category', 'post_tag' );
    foreach ( $taxonomies as $tax ) {
        register_taxonomy_for_object_type( $tax, 'attachment' ); // add to post type
    }
}