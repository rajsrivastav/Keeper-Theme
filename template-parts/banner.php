<section class="banner">
    <div class="container">
        <div class="banner-row-1 row">
            <div class="col-8">
                <h1 class="banner-heading">
                <?php the_field('banner_heading') ?>
                    <span class="swiper banner-swiper m-0 p-0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><?php the_field('banner_swiper_1') ?></div>
                            <div class="swiper-slide"><?php the_field('banner_swiper_2') ?></div>
                            <div class="swiper-slide"><?php the_field('banner_swiper_3') ?></div>
                            <div class="swiper-slide"><?php the_field('banner_swiper_4') ?></div>
                        </div>
                    </span> 
                </h1>
            </div>
            <div class="col-4 d-flex align-items-end justify-content-center">
                <a href="#" class="custom-circle"><img class="img-rotate position-absolute" src="<?php echo get_template_directory_uri() ?>/assets/images/get-in-touch.png" alt="get-in-touch">
                    <svg class="Icon_icon__5jphK" style="fill: var( --primary-color);" width="64" height="64" viewBox="0 0 24 24"><path d="M4.594 3.51a11.38 11.38 0 0 0 3.333 2.315c1.231.559 2.537.88 3.844.944s2.587-.129 3.769-.57 2.242-1.119 3.121-1.997l.031.031h0l1.061 1.061h0l.031.031c-.878.878-1.557 1.939-1.997 3.121s-.634 2.463-.57 3.769.385 2.612.945 3.844a11.38 11.38 0 0 0 2.315 3.333l-1.084 1.084c-4.003-4.003-4.196-9.122-1.631-13.19L5.611 19.436 4.55 18.376 16.701 6.225C12.632 8.791 7.513 8.597 3.51 4.594L4.594 3.51z"></path></svg>
                </a>
            </div>
        </div>
        <div class="banner-row-2 row">
            <div class="col-8">
                <p class="fs-2">We are a team of branding experts, marketing strategists, digital traders, designers, and growth programmers. We use the strength of human psychology and our understanding of digital landscapes to help businesses attract customers.</p>
            </div>
            <div class="col-4 text-center align-self-center">
                <button class="banner-btn ">DISCOVER MORE <span class="btn-mouse"><span class="btn-mouse-line"></span></span></button>
            </div>
        </div>
    </div>
</section>