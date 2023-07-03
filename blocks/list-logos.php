<?php
$logos = get_field("logos");

if (!is_countable($logos) || count($logos) == 0) {
    return;
}
?>

<div class="block list-logos">
    <div class="row">
        <?php foreach ($logos as $logo) { ?>
            <div class="col-2 single-logo">
                <a href="<?= $logo["link"]["url"] ?>" style="background-image: url('<?= $logo["image"]["sizes"]["large"] ?>');"></a> 
            </div>
               
        <?php } ?>
    </div>
</div>