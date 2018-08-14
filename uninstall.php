<?php

/**
 * @package JanpedPlugin
 */

defined('WP_UNINSTALL_PLUGIN') or die;

$books = get_posts([ 'post_type' => 'book', 'numberposts' => -1 ]);

foreach ($books as $book) {
    wp_delete_post($book->id, true);
}