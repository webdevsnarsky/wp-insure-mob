<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <h2 class="footer__title title"><?php the_field('footer_title', 'options'); ?></h2>
      <p class="footer__descr"><?php the_field('footer_descr', 'options'); ?></p>
      <!-- <form class="footer__form"> -->
        
        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
      <!-- </form> -->




      <div class="footer__socials-wrap">
        <ul class="footer__socials">
          <?php if (have_rows('socials', 'options')) : ?>
            <?php while (have_rows('socials', 'options')) : the_row(); ?>
              <li class="footer__socials-item">
                <a href="<?php the_sub_field('social_link', 'options'); ?>" class="footer__socials-link" style="background-image: url('<?php the_sub_field('social_icon', 'options'); ?>')"></a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</footer>
<?php
wp_footer();
?>
</body>

</html>