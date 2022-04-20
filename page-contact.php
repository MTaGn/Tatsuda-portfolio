<?php 
    if(is_page("contact")) {
      remove_filter("the_content", "wpautop");
    } 
?>
<?php get_header(); ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>
            <?php the_content(); ?>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>