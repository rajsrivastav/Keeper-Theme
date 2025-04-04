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
<?php 
    get_footer();  
?>