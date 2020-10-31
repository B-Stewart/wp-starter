<?php
$column_1 = get_field('column_1', 'options');
$column_2 = get_field('column_2', 'options');
$shortcode = get_field('form_shortcode', 'options');
?>

<div id="contact" class="bg-neutral py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4"><?=$column_1?></div>
      <div class="col-md-3">
        <?=$column_2?>
      </div>
      <div class="col-md-5">
        <?php if(!empty($shortcode)): ?>
          <?= do_shortcode($shortcode); ?>  
        <?php endif;?>
      </div>
    </div>
  </div>
</div>