add_action('admin_menu','remove_default_post_type');
function remove_default_post_type() {
    remove_menu_page('edit.php');
}

add_action( 'init', 'set_default_post_type', 1 );

function set_default_post_type() {
register_post_type( 
    'post',
        array(
        'labels' => array(
            'name_admin_bar' => _x( 'Post', 'add new on admin bar' ),
        ),
        'public' => true,
        '_builtin' => false,
        '_edit_link' => 'post.php?post=%d',
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array(
            'slug' => '/Akash', 
            'with_front'=> false,
        ),
        'query_var' => false,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
    ) 
 );
}