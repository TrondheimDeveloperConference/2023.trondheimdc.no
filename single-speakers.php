<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_header(); ?>

</div>
    </div>
</div>


<div class="page-top" style="background-image: url('<?= get_field("page-top-background", "option")["sizes"]["large"] ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 image-left" style="background-image: url('<?= get_field("speaker-top", "option")["sizes"]["large"] ?>');"></div>
            <div class="col-12 col-md-6 image-right" style="background-image: url('<?= get_field("header-image-right", "options")["sizes"]["large"] ?>');"></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">

<div class="single-speaker">
    <div class="row">
        <div class="col-12 col-md-5"></div>
        <div class="col-12 col-md-7">
            <?php if (!empty(get_field("intro"))) { ?>
                <h1><?= get_field("intro") ?></h1>
            <?php } ?>
            <div class="add-talk">
                <button data-id="<?= $post->ID?>">Add talk to my list</button>
            </div>
            
            <?php the_content(); ?>
        </div>

        <?php if (!empty(get_field("intended_audience"))) { ?>
            <div class="col-12 col-md-5">
                Intended audience
            </div>
            <div class="col-12 col-md-7">
                <?= get_field("intended_audience") ?>
            </div>
        <?php } ?>

        <?php $categories = get_the_terms( $post->ID, 'speakers-category' );
            
        if (!empty($categories)) { ?>
            <div class="col-12 col-md-5">
                Key topics
            </div>
            <div class="col-12 col-md-7 key-topics">
                <?php foreach ($categories as $category) { ?>
                    <a href="<?php bloginfo("url"); ?>/speakers?cat=<?= $category->slug ?>"><?= $category->name ?></a>
                <?php } ?>
            </div>
        <?php } ?>

        <?php if (!empty(get_field("intended_audience"))) { ?>
            <div class="col-12 col-md-5">
                Language
            </div>
            <div class="col-12 col-md-7 language">
                <p class="<?= get_field("language") ?>"><?= get_field("language") ?></p>
            </div>
        <?php } ?>

     
            <div class="col-12 col-md-5">
                    Social Media
                </div>
            <div class="col-12 col-md-7 social-media">
                <?php if (!empty(get_field("facebook"))) { ?>
                    <a class="facebook" href="<?= get_field("facebook")["url"] ?>"></a>
                <?php } ?>
                <?php if (!empty(get_field("linkedin"))) { ?>
                    <a class="linkedin" href="<?= get_field("linkedin")["url"] ?>"></a>
                <?php } ?>
                <?php if (!empty(get_field("youtube"))) { ?>
                    <a class="youtube" href="<?= get_field("youtube")["url"] ?>"></a>
                <?php } ?>
                <?php if (!empty(get_field("twitter"))) { ?>
                    <a class="twitter" href="<?= get_field("twitter")["url"] ?>"></a>
                <?php } ?>
            </div>
      

        <div class="col-12 col-md-5">
            About speaker
        </div>
        <div class="col-12 col-md-7 about">
            <?php if (!empty(get_field("image"))) { ?>
                <div class="speaker-image" style="background-image: url('<?= get_field("image")["sizes"]["large"] ?>');"></div>
            <?php } ?>
            <?php if (empty(get_field("image"))) { ?>
                <div class="speaker-image default"></div>
            <?php } ?>

            <div class="row">
                <div class="col-12 title">
                    <?= the_title(); ?>
                </div>
            </div>

            <?php if (!empty(get_field("firm"))) { ?>
                <?= get_field("firm") ?>
            <?php } ?>
            
            <?php if (!empty(get_field("about"))) { ?>
                <div class="about-text">
                    <?= get_field("about") ?>
                </div>
            <?php } ?>
            
            
        </div>
        
    </div>
</div>



<?php get_footer(); ?>
<?php endwhile; endif; ?>
