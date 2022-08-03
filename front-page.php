<?php
/**
 * 
 * default homepage template
 * 
 * @package gamingz
 * @since 1.0.0
 * 
 */

    get_header();
?>

<?php if(have_posts()) : ?>
    <!-- start the loop -->
    <?php while (have_posts()) : the_post(); ?>
        <?php
            get_template_part('template-parts/content', 'home');
        ?>
    <?php endwhile; ?>
    <!-- end while loop -->
    <?php else : ?>
    <!-- send to search page / some other general page with search -->
        <?php 
            get_template_part('template-parts/content', 'none'); 
        ?>
<?php endif; ?>

<?php
    get_footer();
?>