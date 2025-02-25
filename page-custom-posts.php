<?php
/*
Template Name: Custom Posts Page
*/

get_header(); ?>

<h1>Custom Posts Page</h1>

<?php
// Custom query to fetch posts
$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 10, // Number of posts to display
));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <small><?php the_time('Y/m/d'); ?> in <?php the_category(', '); ?></small>
        <p><?php the_excerpt(); ?></p>
    <?php endwhile;
    wp_reset_postdata();
else :
    echo '<p>No posts found</p>';
endif;
?>

<?php get_footer(); ?>