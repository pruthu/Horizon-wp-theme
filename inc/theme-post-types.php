<?php
function convax_post_types() {
	register_post_type( 'portfolio_item',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Project' ),
				'add_new' => __( 'Add New Project' ),
				'add_new_item' => __( 'Add New Project' ),
				'edit' => __( 'Edit Project' ),
				'edit_item' => __( 'Edit Project' ),
			),
			'description' => __( 'Portfolio Items.' ),
			'public' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'rewrite' => array( 'slug' => 'item', 'with_front' => false ),
			'has_archive' => true
		)
	);
	register_taxonomy( 'portfolio_category', array( 'portfolio_item' ),
	 
	array( 'hierarchical' => true, 'label' => "Categories","singular_label" => "Category" ) );
	
	
	register_post_type( 'faq',
		array(
			'labels' => array(
				'name' => __( 'FAQ' ),
				'singular_name' => __( 'FAQ' ),
				'add_new' => __( 'Add New FAQ' ),
				'add_new_item' => __( 'Add New FAQ' ),
				'edit' => __( 'Edit FAQ' ),
				'edit_item' => __( 'Edit FAQ' ),
			),
			'description' => __( 'FAQ Items.' ),
			'public' => true,
			'supports' => array( 'title', 'editor' ),
		)
	);
	register_taxonomy( 'slide_category', array( 'slide' ), array( 'label' => "Categories", "singular_label" => "Category" ) );
}
?>