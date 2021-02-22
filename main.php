<?php get_header(); ?>
<main class="main">
    <div class="main-posts-container">

        <div class="post-content">
            <h1>
                <?php the_title(); ?>
            </h1>

            <p class="date">
                <?php echo get_the_date(); ?>
            </p>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile;
            endif; ?>
            
        </div>

        <?php comments_template(); ?>
    </div>
    
    <div class="sidebar">
        <?php get_template_part('template-parts/xs') ?>
        <?php get_template_part('template-parts/sidebar/main') ?>
    </div>

</main>

<?php get_footer(); ?>