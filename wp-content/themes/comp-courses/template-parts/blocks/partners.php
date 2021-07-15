<section class="partners">
  <div class="container">
    <div class="partners__inner">
      <h2 class="partners__title title"><?php the_field('partners_title') ?></h2>
      <div class="partners__items">
        <?php if (have_rows('partners')) : ?>
          <?php while (have_rows('partners')) : the_row(); ?>
            <div class="partners__item">
              <?php
              $image = get_sub_field('partners_img');
              if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="partners__image" loading="lazy-loading" />
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>