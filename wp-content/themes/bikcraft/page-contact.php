<?php
/**
 * Template name: Página - Contato
 * Template for displaying the contact page.
 *
 * @package WordPress
 */

get_header();
the_post();
$url = get_template_directory_uri();
?>

	<section class="introducao-interna" style="background: url(<?php echo get_field('banner_contact'); ?>) no-repeat center; background-size: cover;">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>
	</section>

	<section class="contato container animar-interno">
		<?php echo do_shortcode(get_field('form_contact')); ?>
		<div class="contato_dados grid-8">
		<?php
			$data_contact = get_field('data_contact');
			if (!empty($data_contact)){
		?>
			<h3>Dados</h3>
			<span><?php echo $data_contact['phone']; ?></span>
			<span><?php echo $data_contact['email']; ?></span>
			<span><?php echo $data_contact['address']; ?></span>
			<span><?php echo $data_contact['address_complement']; ?></span>
		<?php
			}
		?>
			<h3>Redes Sociais</h3>
			<ul>
				<li><a href="<?php echo get_option('facebook_social_network_footer'); ?>" target="_blank"><img src="<?= $url . '/assets/img/redes-sociais/facebook.png' ?>" alt="Facebook Bikcraft"></a></li>
				<li><a href="<?php echo get_option('instagram_social_network_footer'); ?>" target="_blank"><img src="<?= $url . '/assets/img/redes-sociais/instagram.png' ?>" alt="Instagram Bikcraft"></a></li>
				<li><a href="<?php echo get_option('twitter_social_network_footer'); ?>" target="_blank"><img src="<?= $url . '/assets/img/redes-sociais/twitter.png' ?>" alt="Twitter Bikcraft"></a></li>
			</ul>
		</div>
	</section>

	<section class="container contato_mapa">
		<a href="<?php echo get_field('link_contact'); ?>" target="_blank" class="grid-16"><img src="<?php echo get_field('image_contact'); ?>" alt="Endereço da Bikcraft"></a>
	</section>

<?php get_footer(); ?>