<!DOCTYPE html>
<html lang="de-CH" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <p><a href="<?php echo home_url('/'); ?>">
            <h1><?php bloginfo('name'); ?></h1>
        </a>

            <?php
            // Hier wird die Tagline (Untertitel) abgerufen
            $tagline = get_bloginfo('description');

            // Falls die Tagline vorhanden ist, wird sie in einem <h2>-Element angezeigt
            if (!empty($tagline)) {
                echo '<h2>' . esc_html($tagline) . '</h2>';
            }
            ?>
        
    </p>
    <nav class="menu-items">
        <?php wp_nav_menu(array('theme_location' => 'hauptnavigation')); ?>
    </nav>
    <div class="burger-menu">
        <div class="burger-line"></div>
        <div class="burger-line"></div>
        <div class="burger-line"></div>
    </div>
</header>
<main>
