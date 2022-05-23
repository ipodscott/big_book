<?php get_header('single-elementor_library');?>


<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer('single-elementor_library');?>
