<?php 
$template = array(
	array( 'core/heading' , array (
        'level' => '2',
        'content' => 'Add your blocks here'
    )),
    
);

$allowed_inner_blocks = ['core/heading', 'core/paragraph', 'core/list', 'core/list-item', 'core/image', 'core/columns', 'core/column', 'core/spacer'];


?>

<?php if (!is_admin()) { ?>
            </div>
        </div>
    </div>
<?php } ?>


<div class="block full-width-innerblock" style="background-image: url('<?= get_field("image")["sizes"]["large"] ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <InnerBlocks template="<?= esc_attr( wp_json_encode($template)) ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_inner_blocks)); ?>"/>
            </div>
        </div>
    </div>
</div>

<?php if (!is_admin()) { ?>
    <div class="container main">
        <div class="row">
            <div class="col-12">
<?php } ?> 