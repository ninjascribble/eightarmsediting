<?php 
/*
 	*Theme Name	: BusiProf
  	
   * @file           footer.php
   * @package        Busiprof
   * @author         Priyanshu Mittal
   * @copyright      2013 Webriti
   * @license        license.txt
   * @filesource     wp-content/themes/Busiprof/footer.php
  */
?>
<div class="widget_section">
  <div class="container">
    <div class="row-fluid">
      <?php if ( is_active_sidebar( 'footer-widget-area' ))
        {  
        	dynamic_sidebar('footer-widget-area' );   
        } ?>
    </div>
  </div>
</div>
<!--closing of the footer widgets area-->
<?php $current_options = get_option('busiprof_theme_options' );?>
<?php if($current_options['busiprof_custom_css']!='') { ?>
<style>  
<?php echo htmlspecialchars_decode($current_options['busiprof_custom_css']); ?>
</style>
<?php } ?>
<div class="footer-section">
  <div class="container">
    <div class="row">
      <div class="span8">
        <?php _e(' Powered by ', 'busi_prof'); ?>
        <a href="http://wordpress.org"><?php _e('WordPress', 'busi_prof'); ?></a>
        <?php esc_html_e($current_options['busiprof_copy_rights_text'],'busi_prof'); ?><?php if($current_options['footer_designedby'] != '' ) { ?>&nbsp;<a target="_blank" rel="nofollow" href="<?php echo esc_url($current_options['footer_url']); ?>"><?php esc_html_e($current_options['footer_designedby'],'busi_prof'); ?></a><?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- closing of the footer -->
<?php wp_footer(); ?> 
</body>
</html>