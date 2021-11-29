<div class="blog-wrapper col-2-items">
    <?php if (have_posts()): while (have_posts()) :the_post(); ?>
    <div class="single-post col-2-item">
        <h1 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </h1>
        <div class="featured-image">
            <?php the_post_thumbnail('blog-thumbnail');?>
            <span class="image-overlay"></span>
        </div>
        <div class="post-meta">
            <em>Posted On - <?php echo get_the_date(); ?></em>
            <br/>
            <em>Written By - <?php the_author(); ?></em>
        </div>
        <?php the_excerpt(); ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>