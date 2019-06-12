<?php
  /**
   * Register Team Post Type
   */
  function team_post_type() {

    $labels = array(
      'name'                  => _x( 'Команда', 'Post Type General Name', 'ecology' ),
      'singular_name'         => _x( 'Команда', 'Post Type Singular Name', 'ecology' ),
      'menu_name'             => __( 'Команда', 'ecology' ),
      'name_admin_bar'        => __( 'Команда', 'ecology' ),
    );
    $args = array(
      'label'                 => __( 'Команда', 'ecology' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail' ),
      'hierarchical'          => false,
      'public'                => false,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-groups',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'team', $args );

  }
  add_action( 'init', 'team_post_type', 0 );