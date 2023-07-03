<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_header(); ?>

<?php /* Mal for undersider */ ?>

</div>
    </div>
</div>

<div class="page-top" style="background-image: url('<?= get_field("page-top-background", "option")["sizes"]["large"] ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 image-left" style="background-image: url('<?= get_field("image-left")["sizes"]["large"] ?>');"></div>
            <div class="col-12 col-md-6 image-right" style="background-image: url('<?= get_field("header-image-right", "options")["sizes"]["large"] ?>');"></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">

<?php the_content(); ?>

<?php get_footer(); ?>
<?php endwhile; endif; ?>