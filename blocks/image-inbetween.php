<?php if (!is_admin()) { ?>
            </div>
        </div>
    </div>
<?php } ?>

<div class="block image-inbetween">
    <div class="image" style="background-image: url('<?= get_field("image")["sizes"]["large"] ?>');"></div>
</div>

<?php if (!is_admin()) { ?>
    <div class="container main">
        <div class="row">
            <div class="col-12">
<?php } ?> 
