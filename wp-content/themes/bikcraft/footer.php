<?php $url = get_template_directory_uri(); ?>
        
        <footer>
			<div class="footer">
				<div class="container">

					<div class="grid-8 footer_historia">
						<h3>Nossa História</h3>
						<p>Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Eramos apaixonados por pedalar e também por fazer as coisas com as nossas próprias mãos. Assim surgiu um sonho na garagem da nossa casa.</p>
					</div>

					<div class="grid-4 footer_contato">
						<h3>Contato</h3>
						<ul>
							<li>- 21 9999-9999</li>
							<li>- contato@bikcraft.com</li>
							<li>- Botafago - RJ</li>
						</ul>
					</div>

					<div class="grid-4 footer_redes">
						<h3>Contato</h3>
						<ul>
							<li><a href="http://facebook.com" target="_blank"><img src="<?= $url . '/assets/img/redes-sociais/facebook.png' ?>" alt="Facebook Bikcraft"></a></li>
							<li><a href="http://instagram.com" target="_blank"><img src="<?= $url . '/assets/img/redes-sociais/instagram.png' ?>" alt="Instagram Bikcraft"></a></li>
							<li><a href="http://twitter.com" target="_blank"><img src="<?= $url . '/assets/img/redes-sociais/twitter.png' ?>" alt="Twitter Bikcraft"></a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="copy">
				<div class="container">
					<p class="grid-16">Bikcraft 2017 - Alguns direitos reservados.</p>
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