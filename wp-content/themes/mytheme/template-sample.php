<?php
    /**
    * Template Name:Sample page
    *
    */
?>


    <?php get_header();?>
    <h2><?php the_title('BEGIN ',' END'); ?></h2>
    
    <?php the_post_thumbnail('medium');?>
    <?php get_footer(); ?>
?>