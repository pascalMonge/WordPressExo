<!Doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ; ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    
    <?php wp_head(); ?>
</head>
<body <?php body_class()?>>
<header class="masthead">
    <h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name'); ?></a></h1>
    <h2><?php bloginfo( 'description'); ?></h2>
</header>
