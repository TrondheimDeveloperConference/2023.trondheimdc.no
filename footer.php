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
                            <li  style="background-image: url('<?= $sm["image"]["sizes"]["large"] ?>');"><a href="<?= $sm["link"]["url"] ?>"></a></li>
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
