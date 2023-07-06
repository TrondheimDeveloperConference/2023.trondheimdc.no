<?php
$logos = get_field("logos");

if (!is_countable($logos) || count($logos) == 0) {
    return;
}
?>

<div class="block list-logos">
    <div class="row">
        <?php foreach ($logos as $logo) { ?>
            <?php if (!empty($logo["link"])) { ?>
                <div class="col-4 col-md-2 single-logo">
                    <a href="<?= $logo["link"]["url"] ?>" style="background-image: url('<?= $logo["image"]["sizes"]["large"] ?>');"></a>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>

