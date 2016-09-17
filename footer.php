  <footer class="page-footer footer-color" role="contentinfo">
   <div class="container">
        <div class="row">
            <div class="col s12 l4">
                <div class="icon-block">

                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-area-1')) ?>
                
                </div>
            </div>
            <div class="col s12 l4">
                <div class="icon-block">

                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-area-2')) ?>
                    
                </div>
            </div>
            <div class="col s12 l4">
                <div class="icon-block">

                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-area-3')) ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <!-- copyright -->
            <p class="copyright left">
                &copy;
                <?php echo date('Y'); ?>
                
                <?php if( get_theme_mod( 'materialize-starter-wp-theme_copyright_text' ) ): ?>
                
                    <?php echo esc_html( get_theme_mod( 'materialize-starter-wp-theme_copyright_text' ) ); ?>
                
                <?php else: ?>
                
                    <?php bloginfo('name'); ?>
                
                <?php endif; ?>
                
            </p>
            <p class="copyright right">
                Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>&nbsp;
                <em>Theme by </em><a class="amber-text" href="http://webdesignofpassion.de" title="webdesignofpassion.de" alt="webdesignofpassion.de" target="_blank">WebdesignOfPassion</a>                        
            </p>
            <!-- /copyright -->
        </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>