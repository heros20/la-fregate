<?php
/**
 * Register a custom post type called "desserts".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_desserts_init() {
    $labels = array(
        'name'                  => _x( 'dessert', 'Post type general name', 'blank_1' ),
        'singular_name'         => _x( 'dessert', 'Post type singular name', 'blank_1' ),
        'menu_name'             => _x( 'desserts', 'Admin dessert text', 'blank_1' ),
        'name_admin_bar'        => _x( 'dessert', 'Add New on Toolbar', 'blank_1' ),
        'add_new'               => __( 'Ajouter un nouveau dessert', 'blank_1' ),
        'add_new_item'          => __( 'Ajouter un nouveau dessert', 'blank_1' ),
        'new_item'              => __( 'Nouveau dessert', 'blank_1' ),
        'edit_item'             => __( 'Modifer un dessert', 'blank_1' ),
        'view_item'             => __( 'afficher le dessert', 'blank_1' ),
        'all_items'             => __( 'Tout les desserts', 'blank_1' ),
        'search_items'          => __( 'Rechercher un dessert', 'blank_1' ),
        'parent_item_colon'     => __( 'Parent dessert:', 'blank_1' ),
        'not_found'             => __( 'No dessert found.', 'blank_1' ),
        'not_found_in_trash'    => __( 'No dessert found in Trash.', 'blank_1' ),
        'featured_image'        => _x( 'image de couverture du dessert', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'set_featured_image'    => _x( 'Définir l\'image de couverture', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'remove_featured_image' => _x( 'Supprimer l\'image de couverture', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'use_featured_image'    => _x( 'Utiliser comme image de couverture', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'archives'              => _x( 'Archives de desserts', 'The post type archive label used in nav desserts. Default “Post Archives”. Added in 4.4', 'blank_1' ),
        'insert_into_item'      => _x( 'Insérer dans le dessert', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'blank_1' ),
        'uploaded_to_this_item' => _x( 'Téléchargé dans ce dessert', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'blank_1' ),
        'filter_items_list'     => _x( 'Filtrer la liste des desserts', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'blank_1' ),
        'items_list_navigation' => _x( 'Naviguer dans la liste des desserts', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'blank_1' ),
        'items_list'            => _x( 'Liste des desserts', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'blank_1' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'dessert' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'          => 'dashicons-book'
    );
 
    register_post_type( 'desserts', $args );
}
 
add_action( 'init', 'wpdocs_codex_desserts_init' );