<?php theme_include('header'); ?>

<section class="grid 1of1 content">
	<p>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</p>

	<hr />

	<?php if(has_search_results()): ?>
		<ul class="items">
				<?php $i = 0; while(search_results()): ?>
				<li>
					<article class="article-preview">
						<div class="grid 2of3 stick-to-grid remove-padding">
							<h3 class="remove-bottom">
								<!--<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">--><?php echo article_title(); ?><!--</a>-->
							</h3>

							<footer>
								<small>
									Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
								</small>
							</footer>
						</div>
						<div class="grid 1of3 stick-to-grid remove-padding center">
							<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>" class="buttonlink">Read this Article</a>
						</div>
					</article>
				</li>
				<?php endwhile; ?>
		</ul>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<?php echo search_prev(); ?>
				<?php echo search_next(); ?>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>