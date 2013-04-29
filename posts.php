<?php theme_include('header'); ?>

<section class="grid 1of1 content">

	<?php if(has_posts()): ?>
		<ul class="items">
			<?php posts(); ?>
			<li>
				<article class="latest-article-preview">
					<h1>
						<!--<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">--><?php echo article_title(); ?><!--</a>-->
					</h1>

					<p class="content">
						<?php echo strip_tags(substr(article_markdown(), 0, 400)); ?>&hellip;
					</p>

					<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>" class="buttonlink">Read More</a>

					<footer>
						<small>
							Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
						</small>
					</footer>
				</article>
			</li>

			<hr />

			<?php $i = 0; while(posts()): ?>
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
				<?php echo posts_prev(); ?>
				<?php echo posts_next(); ?>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>