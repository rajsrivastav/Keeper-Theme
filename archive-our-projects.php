<?php get_header(); ?>

<section class="archive-our-projects">
    <div class="container">
        <h1><?php post_type_archive_title(); ?></h1>

        <?php if (have_posts()) : ?>
            <div class="projects-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div><?php the_excerpt(); ?></div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>No projects found.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
