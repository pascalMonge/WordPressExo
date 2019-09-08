<?php
add_theme_support( 'title-tag');
if (function_exists( 'register_sidebar')) register_sidebar( array(
    'id'    => 'sidebar-1',
    'name'  => 'Ma zone de widget',
));
?>