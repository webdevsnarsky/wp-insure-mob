<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

  // Check function exists.
  if (function_exists('acf_register_block_type')) {

    // register a testimonial block.
    acf_register_block_type(array(
      'name'              => 'promo',
      'title'             => __('promo/ секция промо'),
      'description'       => __('promo'),
      'render_template'   => 'template-parts/blocks/promo.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array('promo', 'промо'),
    ));

    acf_register_block_type(array(
      'name'              => 'about',
      'title'             => __('about/ секция о компании'),
      'description'       => __('about'),
      'render_template'   => 'template-parts/blocks/about.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array('about', 'о компании'),
    ));
    acf_register_block_type(array(
      'name'              => 'start',
      'title'             => __('start/ секция о быстром старте'),
      'description'       => __('start'),
      'render_template'   => 'template-parts/blocks/start.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array('start', 'о быстром старте'),
    ));
    acf_register_block_type(array(
      'name'              => 'features',
      'title'             => __('features/ секция о преимуществах'),
      'description'       => __('features'),
      'render_template'   => 'template-parts/blocks/features.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array('features', 'о преимуществах'),
    ));
    acf_register_block_type(array(
      'name'              => 'partners',
      'title'             => __('partners/ секция о партнерах'),
      'description'       => __('partners'),
      'render_template'   => 'template-parts/blocks/partners.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array('partners', 'о партнерах'),
    ));
    acf_register_block_type(array(
      'name'              => 'programm',
      'title'             => __('programm/ секция о программе курса'),
      'description'       => __('programm'),
      'render_template'   => 'template-parts/blocks/programm.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array('programm', 'о программе курса'),
    ));
    acf_register_block_type(array(
      'name'              => 'teachers',
      'title'             => __('teachers/ секция о преподавателях'),
      'description'       => __('teachers'),
      'render_template'   => 'template-parts/blocks/teachers.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array('teachers', 'о преподавателях'),
    ));
  }
}
