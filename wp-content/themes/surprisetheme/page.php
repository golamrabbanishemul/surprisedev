<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php if(have_posts()):?>
            <?php while ( have_posts() ) : the_post();?>

            <h2><?php the_title();?></h2>
            <?php the_content();?>
            <?php endwhile;?>

            <?php else:?>
            <h2>404 Not Found</h2>
            <?php endif;?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
