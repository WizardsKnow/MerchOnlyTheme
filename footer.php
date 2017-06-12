		</div>
	</main>
	<footer class="footer">
		<ul class="social">
			<?php while ( have_rows('links', 'option') ) : the_row(); ?>
				<a href="<?php the_sub_field('link'); ?>" class="fa fa-<?php the_sub_field('icon'); ?> social__icon"></a>
			<?php endwhile; ?>
		</ul>
		<?php wp_footer(); ?>
	</footer>
</body>
</html>