<aside class="sidebar">
    <ul>
        <?php if ( !function_exists( 'dynamic_sidebar ') || !dynamic_sidebar( 'sidebar-1')) : ?>
<?php endif; ?>
</ul>
</aside>
<?php if (is_active_sidebar( 'sidebar-4 ')): ?>
<aside id="secondary" class="sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-4'); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>