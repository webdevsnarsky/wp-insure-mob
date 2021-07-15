<section class="programm">
  <div class="container">
    <div class="programm__inner">
      <div class="programm__box">
        <h2 class="programm__title title"><?php the_field('prog_title') ?></h2>
        <p class="programm__subtitle"><?php the_field('prog_descr') ?></p>
      </div>
        <div class="programm__items">
          <?php if (have_rows('programm')) : ?>
            <?php while (have_rows('programm')) : the_row(); ?>
              <div class="programm__item-wrap">
                <div class="programm__item">
                  <p class="programm__item-title"><?php the_sub_field('prorgramm_title'); ?></p>
                  <p class="programm__item-descr"><?php the_sub_field('prorgramm_descr'); ?></p>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
    </div>
  </div>
</section>