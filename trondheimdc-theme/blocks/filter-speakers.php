<?php
   $args = array(
               'taxonomy' => 'speakers-category',
               'orderby' => 'name',
               'order'   => 'ASC'
           );

   $cats = get_categories($args);
?>
      
<div class="block filter-speakers">
    <ul>
        <?php if (!empty($cats)) { ?>
            <?php  foreach($cats as $cat) { ?>
                <li data-filter="<?= $cat->slug ?>" ><?= $cat->name ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
</div>

