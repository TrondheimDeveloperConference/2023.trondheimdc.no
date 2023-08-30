<?php
$logos = get_field("partner-logos", "options");

if (!is_countable($logos) || count($logos) == 0) {
    return;
} else {

?>

    <div class="block list-logos">
        <div class="row">
            <?php foreach ($logos as $logo) { ?>
                <?php if (!empty($logo["link"])) { ?>
                    <div class="col-6 col-md-4 col-lg-2 single-logo">
                        <a href="<?= $logo["link"]["url"] ?>" style="background-image: url('<?= $logo["image"]["sizes"]["large"] ?>');"></a>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

<?php } ?>

</div>
</div>
</div>

<footer>
    <div class="darkgreen"></div>
    <div class="lightgreen"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 footer-logo" style="background-image: url('<?= get_field("footer-image", "options")["sizes"]["large"] ?>');"></div>


            <div class="col-12 col-md-4 middle-image" style="background-image: url('<?= get_field("footer-image-middle", "options")["sizes"]["large"] ?>');">
                <?php if (!empty(get_field("link-middle-image", "options"))) { ?>
                    <a href="<?= get_field("link-middle-image", "options")["url"] ?>"></a>
                <?php } ?>
            </div>


            <div class="col-12 col-md-4 socialmedia">
                <?= get_field("footer-text-right", "options") ?>
                <?php if (!empty(get_field("social-media", "options"))) { ?>
                    <?php $socialMedia = get_field("social-media", "options") ?>
                    <ul>
                        <?php foreach ($socialMedia as $sm) { ?>
                            <li style="background-image: url('<?= $sm["image"]["sizes"]["large"] ?>');"><a href="<?= $sm["link"]["url"] ?>"></a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>