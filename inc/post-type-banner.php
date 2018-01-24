<?php
function post_type_banner() {
	$labels = array(
		'name'                => _x( 'Banner', 'Post Type General Name', 'edgardraoul' ),
		'singular_name'       => _x( 'Banner', 'Post Type Singular Name', 'edgardraoul' ),
		'menu_name'           => __( 'Banner', 'edgardraoul' ),
		'name_admin_bar'      => __( 'Banner', 'edgardraoul' ),
		'parent_item_colon'   => __( 'Parent banner:', 'edgardraoul' ),
		'all_items'           => __( 'banner', 'edgardraoul' ),
		'add_new_item'        => __( 'Adicionar Novo', 'edgardraoul' ),
		'add_new'             => __( 'Adicionar Novo', 'edgardraoul' ),
		'new_item'            => __( 'Nova banner', 'edgardraoul' ),
		'edit_item'           => __( 'Editar banner', 'edgardraoul' ),
		'update_item'         => __( 'Atualizar banner', 'edgardraoul' ),
		'view_item'           => __( 'Visualizar banner', 'edgardraoul' ),
		'search_items'        => __( 'Buscar banner', 'edgardraoul' ),
		'not_found'           => __( 'Not found', 'edgardraoul' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'edgardraoul' ),
	);
	$args = array(
		'label'               => __( 'Banner', 'edgardraoul' ),
		'description'         => __( 'Banner', 'edgardraoul' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', 'editor' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'banner', $args );
}
// Hook into the 'init' action
add_action( 'init', 'post_type_banner', 0 );