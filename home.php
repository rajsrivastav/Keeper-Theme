<?php

//   Template Name: Homepage

get_header();
?>
<?php 
    get_template_part('template-parts/banner'); 

?>
<section class="home-video">
    <video loop autoplay muted src="https://ui8-keeper.herokuapp.com/videos/video-1.mp4" width="100%"></video>
</section>
<section class="home-about section-padding pb-5">
    <div class="container">
        <div class="row about-row">
            <div class="col-3">
                <label class="custom-label about-label"  for="about-us">ABOUT US</label>
            </div>
            <div class="col-9">
                <h5 class="about-heading">We have put together a special combination of strategy, marketing, design, and digital expertise.</h5>
                <div class="about-content py-5 d-flex">
                    <p class="home-section-content">Companies and organizations have no choice but to achieve perfection in a world of algorithms, artificial intelligence, and word-of-mouth.</p>
                    <p class="home-section-content">Keeper has assembled a group of strategists, designers, branding experts, business model specialists, and service designers. We assist our clients in excelling in their fields. or even more powerful.</p>
                </div>
                <a href="#" class="custom-btn">LEARN MORE</a>
            </div>
        </div>
    </div>
</section>
<section class="home-services section-padding">
    <div class="container">
        <div class="row services-row">
            <div class="col-12">
                <label class="custom-label services-label mb-5"  for="services">OUR SERVICES</label>
                <h4 class="service-heading w-75 pb-5">As a 360-degree agency, we provide a variety of services. Our devoted team is made up of experts in a variety of disciplines, including digital advertising, design, copywriting, web design, and more. Please feel free to contact us if there is anything we can do to assist you as you peruse the services we offer below.</h4>
                <div class="service-types d-flex justify-content-between align-items-center py-5">
                    <div class="services-wraper d-flex gap-5 align-items-start">
                        <label class="custom-label" for="service-types">01</label>
                        <h2 class="service-name">Marketing and Communication Plan</h2>
                    </div>
                    <span class="services-icon"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    get_footer();  
?>