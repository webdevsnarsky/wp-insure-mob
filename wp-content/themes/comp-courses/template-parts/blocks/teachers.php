<section class="teachers">
  <div class="container">
    <div class="teachers__inner">
      <h2 class="teachers__title title"><?php the_field('teachers_title') ?></h2>
      <div class="teachers__items">
        <div class="row">

          <?php if (have_rows('teachers')) : ?>
            <?php while (have_rows('teachers')) : the_row(); ?>
              <div class="teachers__item">
                <div class="teachers__image-wrap">
                  <?php
                  $image = get_sub_field('teacher_img');
                  if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="teachers__item-image" loading="lazy-loading" />
                  <?php endif; ?>
                </div>
                <h3 class="teachers__item-name"><?php the_sub_field('teacher_name'); ?></h3>
                <p class="teachers__item-spec"><?php the_sub_field('teacher_spec'); ?></p>
                <?php
                $link = get_field('teacher_link');
                if ($link) :
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                ?>
                  <a href="<?php echo esc_url($link_url); ?>" class="teachers__item-button button" target="<?php echo esc_attr($link_target) ?>" ;><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>


          <!-- <div class="teachers__item">
            <div class="teachers__image-wrap">
              <img src="./assets/img/teachers/teacher-1.png" alt="Дмитрий Иванов" class="teachers__item-image">
            </div>
            <h3 class="teachers__item-name">Дмитрий Иванов</h3>
            <p class="teachers__item-spec">Специалист по видеокартам</p>
            <a href="#" class="teachers__item-button button">Биография</a>
          </div>
          <div class="teachers__item">
            <div class="teachers__image-wrap">
              <img src="./assets/img/teachers/teacher-2.png" alt="Дмитрий Иванов" class="teachers__item-image">
            </div>
            <h3 class="teachers__item-name">Дмитрий Иванов</h3>
            <p class="teachers__item-spec">Специалист по видеокартам</p>
            <a href="#" class="teachers__item-button button">Биография</a>
          </div>
          <div class="teachers__item">
            <div class="teachers__image-wrap">
              <img src="./assets/img/teachers/teacher-3.png" alt="Дмитрий Иванов" class="teachers__item-image">
            </div>
            <h3 class="teachers__item-name">Дмитрий Иванов</h3>
            <p class="teachers__item-spec">Специалист по видеокартам</p>
            <a href="#" class="teachers__item-button button">Биография</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>