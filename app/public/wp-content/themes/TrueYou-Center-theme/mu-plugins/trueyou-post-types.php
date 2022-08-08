<?php

function university_post_types() {
    register_post_type('event', array(
     'supports'=> array ('title', 'editor', 'excerpt', 'custom-fields'),
     'rewrite'=> array ('slug' => 'events'),
     'has,archive'=> true,
     'labels' => array(
         'name'=> 'Events',
         'add_new_item' => 'Edit Events',
         'all_items' => 'All Events',
         'singular_name' => 'Events'
     ),
     'menu_icon' => 'dashicons-calendar'   
    ));

}

add_action ('init', 'university_post_types');