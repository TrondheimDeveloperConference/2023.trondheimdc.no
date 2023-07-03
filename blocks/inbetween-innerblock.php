<?php

$template = array(
	array( 'core/paragraph' , array (
        'content' => 'Add your blocks here'
    )),
    
);

$allowed_inner_blocks = ['core/heading', 'core/paragraph', 'core/list', 'core/image', 'core/columns', 'core/column', 'core/spacer', 'acf/cards-inbetween'];

?>

<?php if (!is_admin()) { ?>
            </div>
        </div>
    </div>
<?php } ?>

<div class="block inbetween-innerblock <?= get_field("bakgrunn") ?>">
    <InnerBlocks template="<?= esc_attr( wp_json_encode($template)) ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_inner_blocks)); ?>"/>
</div>

<?php if (!is_admin()) { ?>
    <div class="container main">
        <div class="row">
            <div class="col-12">
<?php } ?> 
