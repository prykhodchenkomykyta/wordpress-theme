<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">

        <div class="header">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Test Page" />
        </div>

        <div class="mobile-menu" onclick="toggleMenu()"><img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="This is">Menu</div>

        <div id="toggleMyMenu" style="display: none;">

            <?php
                wp_nav_menu( array ('theme_location' =>
                'my-custom-menu', 'container_class' =>
                'custom-menu-class'));
            ?>

        </div>

        <div class="slogan">Everything a writer needs.</div>
        
        <div class="container">