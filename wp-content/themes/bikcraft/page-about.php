<?php
/**
 * Template name: Página - Sobre
 * Template for displaying the about us page.
 *
 * @package WordPress
 */

get_header();
the_post();
?>

	<section class="introducao-interna" style="background: url(<?php echo get_field('banner_about'); ?>) no-repeat center; background-size: cover;">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>
	</section>

	<section class="missao_sobre container animar-interno">
		<div class="grid-10">
			<h2 class="subtitulo-interno">História, Missão e Visão</h2>
			<?php echo get_field('story_about'); ?>
		</div>
		<div class="grid-6">
			<h2 class="subtitulo-interno">Valores</h2>
			<ul>
				<?php echo get_field('value_about'); ?>
			</ul>
		</div>

		<div class="grid-16 foto-equipe">
			<img src="<?php echo get_field('image_about'); ?>" alt="Equipe Bikcraft">
		</div>

	</section>

	<section class="qualidade container">
		<h2 class="subtitulo">Qualidade</h2>
		<img src="<?php echo get_field('image_quality_about'); ?>" alt="Bikcraft">
		<ul class="qualidade_lista">
			<li class="grid-1-3">
				<h3>Durabilidade</h3>
				<p><?php echo get_field('durability_about'); ?></p>
			</li>
			<li class="grid-1-3">
				<h3>Design</h3>
				<p><?php echo get_field('design_about'); ?></p>
			</li>
			<li class="grid-1-3">
				<h3>Sustentabilidade</h3>
				<p><?php echo get_field('sustainability_about'); ?></p>
			</li>
		</ul>
	</section>

<?php get_footer(); ?>