<?php
/**
 * Created by PhpStorm.
 * User: aleks
 * Date: 11.03.2019
 * Time: 19:50
 */ ?>

    <!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="profile" href="https://gmpg.org/xfn/11"/>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <?php if ( has_custom_logo() ) {
                    the_custom_logo();
                } ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbar"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php if ( has_nav_menu( 'main-menu' ) ) {
                    wp_nav_menu( [
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbar',
                        'menu_class'      => 'navbar-nav',
                        'theme_location'  => 'main-menu'
                    ] );
                } ?>
            </nav>
        </div>
    </header>

<div id="about">
    <?php if ( is_home() ) : ?>
        <div class="container-fluid header">
            <div class="row">
                <div class="col darken-ovr">
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
