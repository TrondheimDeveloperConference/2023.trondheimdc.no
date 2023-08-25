<?php

$speakers = get_posts([
    "post_type" => "speakers",
    "posts_per_page" => -1,
    "orderby" => "menu_order",
    "order" => "ASC"
]);

if (!is_countable($speakers) || count($speakers) == 0) {
    return;
}
?>


<div class="block list-speakers">
    <div class="row">
        <?php foreach ($speakers as $speaker) {
            $categories = get_the_terms($speaker->ID, 'speakers-category');
            $filterValues = array();

            if (!empty($categories)) {
                foreach ($categories as $category) {
                    $filterValues[] = $category->slug;
                }
            }

            $filterData = implode(' ', $filterValues);
        ?>
            <a data-filter="<?= $filterData ?>" href="<?= get_permalink($speaker->ID) ?>">
                <div class="row">
                    <div class="col-12 col-md-4 speaker-image-container">
                        <?php if (!empty(get_field("image", $speaker->ID))) { ?>
                            <div class="speaker-image" style="background-image: url('<?= get_field("image", $speaker->ID)["sizes"]["large"] ?>');"></div>
                        <?php } ?>

                        <?php if (empty(get_field("image", $speaker->ID))) { ?>
                            <div class="speaker-image default"></div>
                        <?php } ?>

                    </div>
                    <div class="col-12 col-md-8 speaker-info">
                        <h3><?= get_field("intro", $speaker->ID) ?></h3>
                        <p class="name-title"><?= get_the_title($speaker->ID) ?> <?= (!empty(get_field("firm", $speaker->ID)) ?  ' - ' . get_field("firm", $speaker->ID) . ' ' : "")  ?></p>
                        <p class="language <?= get_field("language", $speaker->ID) ?>"><?= get_field("language", $speaker->ID) ?></p>

                        <?php if (!empty($categories)) { ?>
                            <ul>
                                <?php foreach ($categories as $category) { ?>
                                    <li><?= $category->name ?></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
</div>