<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_header(); ?>

<?php /* Mal for blogginnlegg */ ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php get_footer(); ?>
<?php endwhile; endif; ?>
