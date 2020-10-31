<?php
/**
 * Block Name: Image Carousel
 *
 */

$align_class = $block['align'] ? 'align' . $block['align'] : '';
$blockid = 'image-carousel-' . $block['id'];

$slides = get_field('slides');
?>

<div id="<?=$blockid?>" class="carousel slide <?=$align_class?>">
  <div class="carousel-inner">
    <?php for($i = 0; count($slides) > $i; $i++): ?>
    <div class="hero overlay-container bg-dark carousel-item <?= $i === 0 ? 'active' : '' ?>" 
      style="background-image:url(<?=$slides[$i]['image']['sizes']['extra_large']?>)">
      <div class="position-relative h2-font-size z-index-10 p-3 d-flex justify-content-center align-items-center text-white h-100">
        <?= $slides[$i]['content'] ?>
      </div>
      <?php if($slides[$i]['overlay']): ?>
      <div class="overlay z-index-5 pointer-events-none"></div>
      <?php endif;?>
    </div>
    <?endfor;?>
  </div>
  <a class="carousel-control-prev z-index-10" href="#<?=$blockid?>" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next z-index-10" href="#<?=$blockid?>" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>