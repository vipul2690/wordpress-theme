<?php
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mytheme' ),
    ) );

//    function prefix_modify_nav_menu_args( $args ) {
//        return array_merge( $args, array(
//            'walker' => WP_Bootstrap_Navwalker(),
//        ) );
//    }
//add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );

?>