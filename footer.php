            </div>

            <footer id="bottom">
            	<div class="container">
	                <div class="grid 1of3">
	                	<small>
	                		<p>
		                		&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>.<br />
		                		All rights reserved.
	                		</p>
	                		<p>
		                		Built with <a href="http://melodycss.co" target="_blank">Melody</a><br />
		                		Powered by <a href="http://anchorcms.com" target="_blank">Anchor CMS</a>
	                		</p>
	                	</small>
	                </div>

					<div class="grid 1of3"></div>

					<div class="grid 1of3">
						<small>
			                <ul role="navigation">
			                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
			                    <?php if(twitter_account()): ?>
			                    <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
			                    <?php endif; ?>

			                    <li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin area</a></li>

			                    <li><a href="<?php echo base_url(); ?>" title="Return to my website.">Home</a></li>
			                </ul>
			            </small>
	        		</div>
	        	</div>
            </footer>
        </div>

	    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	    <script>
	    	jQuery(document).ready(function($) {
	    		if($('nav .latest-post').hasClass('current')) {
	    			$('nav .latest-post').siblings('a').removeClass('current');
	    		}

	    		$('a[href="#menu"]').click(function() {
	    			$('a[href="#menu"]').toggleClass('current');
	    			$('.slidey').slideToggle(300);
	    		});

	    		$('section.content ol').not('.items').children('li').wrapInner('<p>');
	    	});
	    </script>
    </body>
</html>