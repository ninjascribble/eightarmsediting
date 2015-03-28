<?php get_header();?>
<?php $current_options=get_option('busiprof_theme_options'); ?>
<?php if($current_options['slider_head_title']!='') {?>
<div class="header_top_slide">
  <div class="container">
    <?php esc_html_e($current_options['slider_head_title']); ?>
  </div>
  <?php } ?>
</div>
<?php if($current_options['slider_image']!='') {?>
<div class="main_slider" style="background-image: url(<?php echo esc_url($current_options['slider_image']); ?>)">
  <?php } ?>
  <div class="row-fluid slider_desc">
    <div class="slide_content">
      <?php if($current_options['caption_head']!='') {?>
      <h2><?php esc_html_e($current_options['caption_head']); ?></h2>
      <?php } else {?>
      <h2><?php _e("Busiprof With Responsive Design",'busi_prof') ?></h2>
      <?php } ?>
      <?php if($current_options['caption_text']!='') {?>
      <p><?php esc_html_e($current_options['caption_text']); ?></p>
      <?php } else { ?>
      <p><?php _e("We are a group of passionate designers and developers who really love to create awesome wordpress themes with amazing support and ....",'busi_prof') ?></p>
      <?php } ?>
    </div>
  </div>
</div>