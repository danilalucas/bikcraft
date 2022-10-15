<?php
/**
 * Template name: Página - Produtos
 * Template for displaying the products page.
 *
 * @package WordPress
 */

get_header();
the_post();
?>

	<section class="introducao-interna" style="background: url(<?php echo get_field('banner_product'); ?>) no-repeat center; background-size: cover;">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>
	</section>

	<?php 
		$product_one = get_field('product_one');
		if (!empty($product_one)){
	?>
			<section class="container produto_item animar-interno">
				<div class="grid-11">
					<img src="<?php echo $product_one['image_one_product']; ?>" alt="Bikcraft Passeio">
					<h2><?php echo $product_one['title_product']; ?></h2>
				</div>
				<div class="grid-5 produto_icone"><img src="<?php echo $product_one['icon_product']; ?>" alt="Icone Passeio"></div>
				<div class="grid-8"><img src="<?php echo $product_one['image_two_product']; ?>" alt="Bikcraft Passeio"></div>
				<div class="grid-8 produto_info">
					<p><?php echo $product_one['text_product']; ?></p>
					<ul>
						<li><?php echo $product_one['benefit_one_product']; ?></li>
						<li><?php echo $product_one['benefit_two_product']; ?></li>
						<li><?php echo $product_one['benefit_three_product']; ?></li>
						<li><?php echo $product_one['benefit_four_product']; ?></li>
					</ul>
				</div>
			</section>
	<?php 
		}
		$product_two = get_field('product_two');
		if (!empty($product_two)){
	?>
			<section class="container produto_item animar-interno">
				<div class="grid-11">
					<img src="<?php echo $product_two['image_one_product']; ?>" alt="Bikcraft Passeio">
					<h2><?php echo $product_two['title_product']; ?></h2>
				</div>
				<div class="grid-5 produto_icone"><img src="<?php echo $product_two['icon_product']; ?>" alt="Icone Passeio"></div>
				<div class="grid-8"><img src="<?php echo $product_two['image_two_product']; ?>" alt="Bikcraft Passeio"></div>
				<div class="grid-8 produto_info">
					<p><?php echo $product_two['text_product']; ?></p>
					<ul>
						<li><?php echo $product_two['benefit_one_product']; ?></li>
						<li><?php echo $product_two['benefit_two_product']; ?></li>
						<li><?php echo $product_two['benefit_three_product']; ?></li>
						<li><?php echo $product_two['benefit_four_product']; ?></li>
					</ul>
				</div>
			</section>
	<?php 
		}
		$product_three = get_field('product_three');
		if (!empty($product_three)){
	?>
			<section class="container produto_item animar-interno">
				<div class="grid-11">
					<img src="<?php echo $product_three['image_one_product']; ?>" alt="Bikcraft Passeio">
					<h2><?php echo $product_three['title_product']; ?></h2>
				</div>
				<div class="grid-5 produto_icone"><img src="<?php echo $product_three['icon_product']; ?>" alt="Icone Passeio"></div>
				<div class="grid-8"><img src="<?php echo $product_three['image_two_product']; ?>" alt="Bikcraft Passeio"></div>
				<div class="grid-8 produto_info">
					<p><?php echo $product_three['text_product']; ?></p>
					<ul>
						<li><?php echo $product_three['benefit_one_product']; ?></li>
						<li><?php echo $product_three['benefit_two_product']; ?></li>
						<li><?php echo $product_three['benefit_three_product']; ?></li>
						<li><?php echo $product_three['benefit_four_product']; ?></li>
					</ul>
				</div>
			</section>
	<?php 
		}
	?>

	<section class="orcamento">
		<div class="container">
			<h2 class="subtitulo">Orçamento</h2>
			<?php echo do_shortcode(get_field('form_budget')); ?>
			<div class="orcamento_dados grid-8">
			<?php
				$data = get_field('data');
				if (!empty($data)){
			?>
					<h3>Dados</h3>
					<span><?php echo $data['phone']; ?></span>
					<span><?php echo $data['email']; ?></span>
			<?php 
				}
				$bikcraft_specifications = get_field('bikcraft_specifications');
				if (!empty($bikcraft_specifications)){
			?>
					<h3>Monte a sua Bikcraft</h3>
					<?php echo $bikcraft_specifications['specifications']; ?>
			<?php
				}
			?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>