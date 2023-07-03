<?php 
$cards = get_field("cards");

if (!is_countable($cards) || count($cards) == 0) {
    return;
}
$count = count($cards);


?>


<div class="block cards-inbetween">
    <div class="container">
        <div class="row">
            <?php foreach ($cards as $card) { ?>
                <div class="single-card col-6  col-md-3">
                    <div class="top" style="background-image: url('<?= $card["icon"]["sizes"]["large"] ?>');">
                        <?= $card["title"] ?>
                    </div>
                    <div class="text">
                        <?php $textLine = $card["text-line"] ?>
                        <?php foreach ($textLine as $text) { ?>
                            <p><?= $text["text"] ?></p>    
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>