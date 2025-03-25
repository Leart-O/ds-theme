<?php
    /* Template Name: Movies */
?>

<?php
get_header();

$args = array(
    'post_type' => 'movie',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$movies_query = new WP_Query($args);

if ($movies_query->have_posts()) : ?>
    <div class="movies-list">
        <?php while ($movies_query->have_posts()) : $movies_query->the_post(); ?>
            <div class="movie-item">
                <h2><?php the_title(); ?></h2>
                <div class="movie-content">
                    <?php the_content(); ?>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="movie-thumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php else : ?>
    <p>No movies found.</p>
<?php endif;

wp_reset_postdata();
get_footer();
?>