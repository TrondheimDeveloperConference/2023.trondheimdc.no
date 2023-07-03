<?php if (!empty(get_field("link")["url"])) { ?>
    <div class="block button">
        <a href="<?= get_field("link")["url"] ?>"><?= get_field("link")["title"] ?></a>
    </div>
<?php } ?>