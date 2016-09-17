<!-- sidebar -->
<aside id="slide-out" class="side-nav" role="complementary">
    <br>
    <i id="close-sidebar-right" class="material-icons small pointer black-text">close</i>
    <br>
    <br>
    <?php get_search_form() ?>
    <br>
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
</aside>
<!-- /sidebar -->