<?php
function boombit_custom_widget_init() {

// Register custom Footer Sidebars 
$sidebars = array(
    'sidebar-1' => esc_html__( 'Widget 1', 'boombit' ),
    'sidebar-2' => esc_html__( 'Widget 2', 'boombit' ),
    'sidebar-3' => esc_html__( ' Widget 3', 'boombit' ),
);

// Loop through each sidebar and register
foreach ( $sidebars as $sidebar_id => $sidebar_name ) {
    register_sidebar( array(
        'name'          => $sidebar_name,
        'id'            => $sidebar_id,
        'description'   => sprintf( esc_html__( 'Widget area for %s', 'boombit' ), $sidebar_name ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
}

add_action( 'widgets_init', 'boombit_custom_widget_init' );

?>