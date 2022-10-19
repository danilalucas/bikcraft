<?php get_header(); ?>

	<section class="introducao" style="background: url(<?php echo get_field('banner_home'); ?>) no-repeat center; background-size: cover;">
		<div class="container">
			<h1><?php echo get_field('title_banner_home'); ?></h1>
			<blockquote class="quote-externo">
				<p><?php echo get_field('citation_banner_home'); ?></p>
				<cite><?php echo get_field('author_banner_home'); ?></cite>
			</blockquote>
			<a href="<?php echo get_field('link_button_banner_home'); ?>" class="btn"><?php echo get_field('name_button_banner_home'); ?></a>
		</div>
	</section>
	
	<section class="produtos container animar">
		<h2 class="subtitulo"><?php echo get_field('title_session_product_home'); ?></h2>
		<ul class="produtos_lista">
		<?php 
			$product_one_home = get_field('product_one_home');
			if (!empty($product_one_home)){
		?>
				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo $product_one_home['image_product_home']; ?>">
					</div>
					<h3><?php echo $product_one_home['title_product_home']; ?></h3>
					<p><?php echo $product_one_home['description_product_home']; ?></p>
				</li>
		<?php 
			}
			$product_two_home = get_field('product_two_home');
			if (!empty($product_two_home)){
		?>
				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo $product_two_home['image_product_home']; ?>">
					</div>
					<h3><?php echo $product_two_home['title_product_home']; ?></h3>
					<p><?php echo $product_two_home['description_product_home']; ?></p>
				</li>
		<?php 
			}
			$product_three_home = get_field('product_three_home');
			if (!empty($product_three_home)){
		?>
				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo $product_three_home['image_product_home']; ?>">
					</div>
					<h3><?php echo $product_three_home['title_product_home']; ?></h3>
					<p><?php echo $product_three_home['description_product_home']; ?></p>
				</li>
		<?php
			}
		?>
		</ul>

		<div class="call">
			<p>clique aqui e veja os detalhes dos produtos</p>
			<a href="<?php echo get_field('link_button_product_home'); ?>" class="btn btn-preto"><?php echo get_field('name_button_product_home'); ?></a>
		</div>

	</section>
	<!-- Fecha Produtos -->

	<section class="portfolio">
		<div class="container">
			<h2 class="subtitulo"><?php echo get_field('title_session_portfolio_home'); ?></h2>
			<?php
				$slide_one_portfolio = get_field('slide_one_portfolio', 118);
				if (!empty($slide_one_portfolio)){
			?>
					<div class="portfolio_lista">
						<div class="grid-8"><img src="<?php echo $slide_one_portfolio['image_one_portfolio']; ?>"></div>
						<div class="grid-8"><img src="<?php echo $slide_one_portfolio['image_two_portfolio']; ?>"></div>
						<div class="grid-16"><img src="<?php echo $slide_one_portfolio['image_three_portfolio']; ?>"></div>
					</div>
			<?php
				}
			?>
			<div class="call">
				<p>conheça mais o nosso portfólio</p>
				<a href="<?php echo get_field('link_button_portfolio_home'); ?>" class="btn"><?php echo get_field('name_button_portfolio_home'); ?></a>
			</div>
		</div>
	</section>

	<section class="qualidade container">
		<h2 class="subtitulo"><?php echo get_field('title_session_quality_home'); ?></h2>
		<img src="<?php echo get_field('image_quality_about', 15); ?>">
		<ul class="qualidade_lista">
			<li class="grid-1-3">
				<h3>Durabilidade</h3>
				<p><?php echo get_field('durability_about', 15); ?></p>
			</li>
			<li class="grid-1-3">
				<h3>Design</h3>
				<p><?php echo get_field('design_about', 15); ?></p>
			</li>
			<li class="grid-1-3">
				<h3>Sustentabilidade</h3>
				<p><?php echo get_field('sustainability_about', 15); ?></p>
			</li>
		</ul>
		<div class="call">
			<p>conheça mais a nossa história</p>
			<a href="<?php echo get_field('link_button_quality_home'); ?>" class="btn btn-preto"><?php echo get_field('name_button_quality_home'); ?></a>
		</div>
	</section>

<?php get_footer(); ?>