<?php
/**
 * 
 * partial temoplate for the page.php template
 * 
 * @package gamingz
 * @since 1.0.0
 * 
 */
?>

<!-- displays the page/post ID of the page -->
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
    <!-- entry header -->
    <header>
        <!-- get the title page and display it -->
        <?php the_title('<h1 class="entry-title">', '</h1>') ?>
    </header>

    <!-- if you have an image it will display using WPs largest default thumbnail sizing (settings in the admin - you can see the sizes) -->
    <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

    <div class="entry-content">
        <!-- display page or post content -->
        <?php
            the_content(); // displays all the content within the editor in pages in the dashboard
            the_ID(); // displays the id of the page or post
            the_date(); // displays the date
        ?>
        <!-- other things you could put in here would be: pagination (more used for blog posts), custom posts, anything you need for site. -->
    </div>

    <footer class="entry-footer">
        <!-- add a link to edit your content -->
        <?php edit_post_link( __('Edit', 'thenamehere'), '<span class="edit-link">', '</span>'); ?>
    </footer>
</article>