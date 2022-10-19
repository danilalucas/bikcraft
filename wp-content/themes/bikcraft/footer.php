<?php $url = get_template_directory_uri(); ?>

		<div class="quebra">
			<blockquote class="quote-externo container">
				<p><?php echo get_option('citation_footer'); ?></p>
				<cite><?php echo get_option('author_citation_footer'); ?></cite>
			</blockquote>
		</div>
        
        <footer>
			<div class="footer">
				<div class="container">

					<div class="grid-8 footer_historia">
						<h3>Nossa História</h3>
						<p><?php echo get_option('our_story_footer'); ?></p>
					</div>

					<div class="grid-4 footer_contato">
						<h3>Contato</h3>
						<ul>
							<li>- <?php echo get_option('phone_contact_footer'); ?></li>
							<li>- <?php echo get_option('email_contact_footer'); ?></li>
							<li>- <?php echo get_option('address_contact_footer'); ?></li>
						</ul>
					</div>

					<div class="grid-4 footer_redes">
						<h3>Contato</h3>
						<ul>
							<li><a href="<?php echo get_option('facebook_social_network_footer'); ?>" target="_blank"><img src="<?= $url . '/assets/img/redes-sociais/facebook.png' ?>" alt="Facebook Bikcraft"></a></li>
							<li><a href="<?php echo get_option('instagram_social_network_footer'); ?>" target="_blank"><img src="<?= $url . '/assets/img/redes-sociais/instagram.png' ?>" alt="Instagram Bikcraft"></a></li>
							<li><a href="<?php echo get_option('twitter_social_network_footer'); ?>" target="_blank"><img src="<?= $url . '/assets/img/redes-sociais/twitter.png' ?>" alt="Twitter Bikcraft"></a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="copy">
				<div class="container">
					<p class="grid-16"><?php echo get_option('copyright_footer'); ?></p>
				</div>
			</div>
		</footer>

	<!-- JavaScript -->
	<script src="<?= $url . '/assets/js/libs/jquery-1.11.2.min.js' ?>"></script>
	<script src="<?= $url . '/assets/js/plugins.js' ?>"></script>
	<script src="<?= $url . '/assets/js/main.js' ?>"></script>
	<!-- JavaScript -->

	</body>
    <?php wp_footer(); ?>
</html>