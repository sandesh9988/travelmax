<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>

    <!-- Included via Site Options -->
    <?php
    if (get_field("site_header_code") != "") {
        echo $get_field("site_header_code");
    }
    ?>
    <!-- End Site Options -->

</head>

<body <?php body_class(); ?>>
    <!-- Included via Site Options -->
    <?php
    if (get_field("site_header_code") != "") {
        echo $get_field("site_body_code");
    }
    ?>
    <!-- End Site Options -->
    <header class="header js-header">
        <div class="logo__container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link">
                <figure class="logo__wrap">
                    <img class="header__logo-image" src="<?php echo get_template_directory_uri() ?> /uploads/logo.png" alt="Image of a logo" />
                </figure>
                <meta itemprop="name" content="<?php bloginfo('name'); ?>">
            </a>
        </div>
        <div class="header__nav">
            <?php
            $menuArgs = array(
                'container' => false,
                'menu' => 'Main Navigation',
                'menu_class' => 'primaryNav'
            );
            wp_nav_menu($menuArgs);

            ?>
            <a href="#" class="mobileNav__toggle js-nav-toggle">
                <span class="accessible-text">Click to toggle navigation menu.</span>
                <div class="menuBar__container">
                    <span class="menuBar"></span>
                    <span class="menuBar"></span>
                  
                </div>
            </a>
        </div>
    </header>