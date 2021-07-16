<section class="start">
  <div class="container">
    <div class="start__inner">
      <h2 class="start__title title"><?php the_field('start_title') ?></h2>
      <p class="start__subtitle"><?php the_field('start_subtitle') ?></p>
      <!-- <div class="start__results" style="--col-count:<?php the_field('start_count_col') ?>"> -->
      <?php $count = count(get_field('start_piramid')); ?>
      <div class="start__results" style="--col-count:<?php echo $count ?>">
        <?php if (have_rows('start_piramid')) : ?>
          <?php while (have_rows('start_piramid')) : the_row(); ?>
            <div class="col">
              <div class="start__parent" data-percent="<?php the_sub_field('start_percent_col'); ?>%" style="--percent: <?php the_sub_field('start_percent_col'); ?>%"></div>
              <p class="start__text"><?php the_sub_field('start_descr_col'); ?></p>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>