<?php
get_header();
?>

<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
<?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
  wp_reset_query();
    ?>

<?php
get_footer();
?>