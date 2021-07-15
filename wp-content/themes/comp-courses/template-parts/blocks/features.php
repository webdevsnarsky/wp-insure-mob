<section class="features">
  <div class="container">
    <div class="features__inner">
      <h2 class="features__title title"><?php the_field('features_title') ?></h2>
      <div class="features__items">
        <div class="features__row row">
          <?php if (have_rows('features')) : ?>
            <?php while (have_rows('features')) : the_row(); ?>
              <div class="features__item">
                <?php
                $image = get_sub_field('feature_img');
                if (!empty($image)) : ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="features__item-image" loading="lazy-loading"/>
                <?php endif; ?>
                <h3 class="features__item-title"><?php the_sub_field('feature_title'); ?></h3>
                <p class="features__item-descr"><?php the_sub_field('feature_descr'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

  </div>
</section>