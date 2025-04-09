<footer>
    <div class="container">
        <div class="footer-row-1 row">
            <div class="col-8 p-0">
                <h2 class="footer-heading">
                <?php the_field('footer_heading', 'option') ?>
                    <span class="swiper m-0 p-0 footer-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><?php the_field('swiper_text_1', 'option') ?></div>
                            <div class="swiper-slide"><?php the_field('swiper_text_2', 'option') ?></div>
                            <div class="swiper-slide"><?php the_field('swiper_text_3', 'option') ?></div>
                        </div>
                    </span> 
                    <?php the_field('heading_after_swiper', 'option') ?>
                </h2>
            </div>
            <div class="col-4 p-0 text-center">
                <a href="#" class="custom-circle"><img class="img-rotate position-absolute" src="<?php echo get_template_directory_uri() ?>/assets/images/get-in-touch.png" alt="get-in-touch">
                <svg class="Icon_icon__5jphK" style="fill: var( --primary-color);" width="64" height="64" viewBox="0 0 24 24"><path d="M4.594 3.51a11.38 11.38 0 0 0 3.333 2.315c1.231.559 2.537.88 3.844.944s2.587-.129 3.769-.57 2.242-1.119 3.121-1.997l.031.031h0l1.061 1.061h0l.031.031c-.878.878-1.557 1.939-1.997 3.121s-.634 2.463-.57 3.769.385 2.612.945 3.844a11.38 11.38 0 0 0 2.315 3.333l-1.084 1.084c-4.003-4.003-4.196-9.122-1.631-13.19L5.611 19.436 4.55 18.376 16.701 6.225C12.632 8.791 7.513 8.597 3.51 4.594L4.594 3.51z"></path></svg>
                </a>
            </div>
        </div>
        <div class="footer-row-2 row py-5">
            <div class="col-6 p-0">
                <div class="footer-menus">
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
            <div class="col-6 p-0 text-end">
                <div class="social-links">
                    <a class="text-decoration-none text-white" href="<?php the_field('facebook', 'option') ?>">Facebook</a>
                    <a class="text-decoration-none text-white" href="<?php the_field('twiter', 'option') ?>">Twiter</a>
                    <a class="text-decoration-none text-white" href="<?php the_field('instagram', 'option') ?>">Instagram</a>
                    <a class="text-decoration-none text-white" href="<?php the_field('linkedin', 'option') ?>">Linkedin</a>
                </div>
            </div>
        </div>
        <div class="footer-row-3 py-5 p-0 m-0">
            <p><?php the_field('footer_text', 'option') ?></p>
            <a href="#" class="text-decoration-none footer-page"><?php the_field('footer_link_1', 'option') ?></a>
            <a class="text-decoration-none" href="#"><?php the_field('footer_link_2', 'option') ?></a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>