<?php

//   Template Name: Homepage

get_header();
?>
<?php 
    get_template_part('template-parts/banner'); 

?>
<section class="home-video">
    <video loop autoplay muted src="<?php the_field('home_video'); ?>" width="100%"></video>
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
                <h4 class="sections-content w-75 pb-5">As a 360-degree agency, we provide a variety of services. Our devoted team is made up of experts in a variety of disciplines, including digital advertising, design, copywriting, web design, and more. Please feel free to contact us if there is anything we can do to assist you as you peruse the services we offer below.</h4>
                <div class="service-types d-flex justify-content-between align-items-center py-5">
                    <div class="services-wraper d-flex gap-5 align-items-start">
                        <label class="custom-label" for="service-types">01</label>
                        <h2 class="service-name">Marketing and Communication Plan</h2>
                    </div>
                    <span class="services-icon"></span>
                </div>
                <div class="service-types d-flex justify-content-between align-items-center py-5">
                    <div class="services-wraper d-flex gap-5 align-items-start">
                        <label class="custom-label" for="service-types">02</label>
                        <h2 class="service-name">BRANDING</h2>
                    </div>
                    <span class="services-icon"></span>
                </div>
                <div class="service-types d-flex justify-content-between align-items-center py-5">
                    <div class="services-wraper d-flex gap-5 align-items-start">
                        <label class="custom-label" for="service-types">03</label>
                        <h2 class="service-name">DIGITAL CAMPAIGNS</h2>
                    </div>
                    <span class="services-icon"></span>
                </div>
                <div class="service-types d-flex justify-content-between align-items-center py-5">
                    <div class="services-wraper d-flex gap-5 align-items-start">
                        <label class="custom-label" for="service-types">04</label>
                        <h2 class="service-name">PROGRAMMATIC ADVERTISING</h2>
                    </div>
                    <span class="services-icon"></span>
                </div>
                <div class="service-types d-flex justify-content-between align-items-center py-5">
                    <div class="services-wraper d-flex gap-5 align-items-start">
                        <label class="custom-label" for="service-types">05</label>
                        <h2 class="service-name">MARKETING AS A SERVICE</h2>
                    </div>
                    <span class="services-icon"></span>
                </div>
                <a href="#" class="custom-btn mt-5">VIEW ALL SERVICE</a>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-us section-padding">
    <div class="container">
    <label class="custom-label mb-5" for="why-choose-us">WHY CHOOSE US</label>
        <div class="row">
            <div class="col-6">
                <h2 class="sections-heading">We deliver for you whatever you need</h2>
                <a href="#" class="custom-btn text-white btn-background">LET’S WORK TOGETHER</a>
            </div>
            <div class="col-6">
                <p class="sections-content">More than 30 campaign managers and specialists on the Keeper team will plan and design a powerful campaign specifically for you. Our expertise is in developing competitive advantages. We have faith in capability. To help you differentiate your business from the competition, we employ cutting-edge strategies, digital tools, design, and creative thinking.</p>
                <p class="sections-content">We do more than just build websites and Facebook pages and buy advertising space; we are a communication agency. We introduce your name, item, or service to the consumer. To help your business succeed, we work in branding, digital marketing, art direction, and printing.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <h3 class="ratting">10+</h3>
                <p class="sections-content">Years of Experience</p>
            </div>
            <div class="col-3">
                <h3 class="ratting">150+</h3>
                <p class="sections-content">Satisfied Customers</p>
            </div>
            <div class="col-3">
                <h3 class="ratting">10+</h3>
                <p class="sections-content">Awards Won</p>
            </div>
            <div class="col-3">
                <h3 class="ratting">200+</h3>
                <p class="sections-content">Completed Projects</p>
            </div>
        </div>
    </div>
</section>

<?php 
    get_footer();  
?>