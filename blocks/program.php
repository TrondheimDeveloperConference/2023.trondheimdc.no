<?php 
$rows = get_field("program-row");

if (!is_countable($rows) || count($rows) == 0) {
    return;
}
?>





<div class="block program">

    <p><?= get_field("text-before-button") ?><span class="button"><?= get_field("button-text") ?></span></p>

    <div class="row halls">
        <div class="col-2"></div>
        <div class="col-2 hall">
            SAL COSMOS 2
        </div>
        <div class="col-2 hall">
            SAL COSMOS 1A
        </div>
        <div class="col-2 hall">
            SAL COSMOS 1B
        </div>
        <div class="col-2 hall">
            SAL COSMOS 3A
        </div>
        <div class="col-2 hall">
            SAL COSMOS 3B
        </div>
    </div>

    <div class="row">

        
        <?php foreach ($rows as $row) { ?>
            <div class="program-row col-12">
                <div class="row">

                    <?php 
                    $timeRange = $row["time"];
                                
                    $timeParts = explode('-', $timeRange);
                    ?>
                    
                    <?php if ($row["type"] == "spesific-speaker") { ?>
                        
                        <div class="col-12 col-lg-2 time">
                            <?php if (count($timeParts) === 2) {
                                $startTime = $timeParts[0];
                                $endTime = $timeParts[1]; ?>

                                <p class="start-time"><?= $startTime ?></p>
                                <div class="line"></div>
                                <p class="endtime"><?= $endTime ?></p>
                            <?php  } ?>
                        </div>
                        <div class="col-12 col-lg-2 card <?= (empty(get_field("intro", $row["sal-cosmos-2"]->ID))) ? "mobile-hide" : "" ?>" data-id=<?= $row["sal-cosmos-2"]->ID ?>>
                            <?php if (!empty($row["sal-cosmos-2"])) { ?>
                                <span class="hall">SAL COSMOS 2</span>
                                <span class="checkbox">Going?</span>
                                <a href="<?= get_permalink($row["sal-cosmos-2"]->ID) ?>">
                                    <p class="intro"><?= get_field("intro", $row["sal-cosmos-2"]->ID)  ?></p>
                                    <p class="name"><?= get_the_title($row["sal-cosmos-2"]->ID)  ?></p>
                                </a>
                               
                            <?php } ?>
                        </div>
                        <div class="col-12 col-lg-2 card <?= (empty(get_field("intro", $row["sal-cosmos-1a"]->ID))) ? "mobile-hide" : "" ?>" data-id=<?= $row["sal-cosmos-1a"]->ID ?>>
                        <?php if (!empty($row["sal-cosmos-1a"])) { ?>
                                <span class="hall">SAL COSMOS 1A</span>
                                <span class="checkbox">Going?</span>
                                <a href="<?= get_permalink($row["sal-cosmos-1a"]->ID) ?>">
                                    <p class="intro"><?= get_field("intro", $row["sal-cosmos-1a"]->ID)  ?></p>
                                    <p class="name"><?= get_the_title($row["sal-cosmos-1a"]->ID)  ?></p>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="col-12 col-lg-2 card <?= (empty(get_field("intro", $row["sal-cosmos-1b"]->ID))) ? "mobile-hide" : "" ?>" data-id=<?= $row["sal-cosmos-1b"]->ID ?>>
                        <?php if (!empty($row["sal-cosmos-1b"])) { ?>
                                <span class="hall">SAL COSMOS 1B</span>
                                <span class="checkbox">Going?</span>
                                <a href="<?= get_permalink($row["sal-cosmos-1b"]->ID) ?>">
                                    <p class="intro"><?= get_field("intro", $row["sal-cosmos-1b"]->ID)  ?></p>
                                    <p class="name"><?= get_the_title($row["sal-cosmos-1b"]->ID)  ?></p>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="col-12 col-lg-2 card <?= (empty(get_field("intro", $row["sal-cosmos-3a"]->ID))) ? "mobile-hide" : "" ?>" data-id=<?= $row["sal-cosmos-3a"]->ID ?>>
                        <?php if (!empty($row["sal-cosmos-3a"])) { ?>
                                <span class="hall">SAL COSMOS 3A</span>
                                <span class="checkbox">Going?</span>
                                <a href="<?= get_permalink($row["sal-cosmos-3a"]->ID) ?>">
                                    <p class="intro"><?= get_field("intro", $row["sal-cosmos-3a"]->ID)  ?></p>
                                    <p class="name"><?= get_the_title($row["sal-cosmos-3a"]->ID)  ?></p>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="col-12 col-lg-2 card <?= (empty(get_field("intro", $row["sal-cosmos-3b"]->ID))) ? "mobile-hide" : "" ?>" data-id=<?= $row["sal-cosmos-3b"]->ID ?>>
                            <?php if (!empty($row["sal-cosmos-3b"])) { ?>
                                <span class="hall">SAL COSMOS 3B</span>
                                <span class="checkbox">Going?</span>
                                <a href="<?= get_permalink($row["sal-cosmos-3b"]->ID) ?>">
                                    <p class="intro"><?= get_field("intro", $row["sal-cosmos-3b"]->ID)  ?></p>
                                    <p class="name"><?= get_the_title($row["sal-cosmos-3b"]->ID)  ?></p>
                                </a>
                            <?php } ?>
                        </div>
                    
                    <?php } ?>

                    <?php if ($row["type"] == "whole-row") { ?>
                        <div class="col-2"></div>

                        <div class="col-12 col-lg-10 whole-card">
                            <?php  if (count($timeParts) === 2) { 
                                
                                $startTime = $timeParts[0];
                                $endTime = $timeParts[1]; ?>
                            
                                <div class="row">
                                    <div class="col-2 col-lg-1 start-time"><?= $startTime ?></div>
                                    <div class="col-8 col-lg-10 text"><span><?= $row["free-text"] ?></span></div>
                                    <div class="col-2 col-lg-1 endtime"><?= $endTime ?></div>
                                </div>
                            
                            <?php } ?>   
                            
                    
                        </div>
                    <?php } ?>
                </div>
            </div>
            
            
            
        <?php } ?>
    </div>

</div>