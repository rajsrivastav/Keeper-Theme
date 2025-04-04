<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="position-fixed header top-0 w-100 z-1">
        <div class="container">
            <div class="row header-row py-5">
                <div class="header-logo col-6 p-0 fw-bold fs-3 align-self-center">
                    <?php bloginfo('name'); ?>
                </div>
                <div class="col-6 p-0 align-self-center">
                    <div class="header-menus">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_menu',
                            'container' => true,
                            'menu_class' => 'list-unstyled p-0',
                            'fallback_cb' => false,
                        ));
                    ?>
                    </div>
                </div>
            </div>
        </div>
</header>