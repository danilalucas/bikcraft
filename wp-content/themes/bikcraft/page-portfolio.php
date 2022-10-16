<?php
/**
 * Template name: Página - Portfolio
 * Template for displaying the portfolio page.
 *
 * @package WordPress
 */

get_header();
the_post();
?>

	<section class="introducao-interna" style="background: url(<?php echo get_field('banner_portfolio'); ?>) no-repeat center; background-size: cover;">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>
	</section>

	<section class="container animar-interno">
		<ul class="rslides">
			<?php 
				$citation_one_portfolio = get_field('citation_one_portfolio');
				if (!empty($citation_one_portfolio)){
			?>
					<li>
						<blockquote class="quote_clientes">
							<p><?php echo $citation_one_portfolio['text_citation_portfolio']; ?></p>
							<cite><?php echo $citation_one_portfolio['author_citation_portfolio']; ?></cite>
						</blockquote>
					</li>
			<?php 
				}
				$citation_two_portfolio = get_field('citation_two_portfolio');
				if (!empty($citation_two_portfolio)){
			?>
					<li>
						<blockquote class="quote_clientes">
							<p><?php echo $citation_two_portfolio['text_citation_portfolio']; ?></p>
							<cite><?php echo $citation_two_portfolio['author_citation_portfolio']; ?></cite>
						</blockquote>
					</li>
			<?php 
				}
				$citation_three_portfolio = get_field('citation_three_portfolio');
				if (!empty($citation_three_portfolio)){
			?>
					<li>
						<blockquote class="quote_clientes">
							<p><?php echo $citation_three_portfolio['text_citation_portfolio']; ?></p>
							<cite><?php echo $citation_three_portfolio['author_citation_portfolio']; ?></cite>
						</blockquote>
					</li>
			<?php
				}
			?>
		</ul>
	</section>

	<section class="portfolio">
		<div class="container">
			<ul class="portfolio_lista rslides_portfolio">
				<?php
					$slide_one_portfolio = get_field('slide_one_portfolio');
					if (!empty($slide_one_portfolio)){
				?>
						<li>
							<div class="grid-8"><img src="<?php echo $slide_one_portfolio['image_one_portfolio']; ?>"></div>
							<div class="grid-8"><img src="<?php echo $slide_one_portfolio['image_two_portfolio']; ?>"></div>
							<div class="grid-16"><img src="<?php echo $slide_one_portfolio['image_three_portfolio']; ?>"></div>
						</li>
				<?php
					}
					$slide_two_portfolio = get_field('slide_two_portfolio');
					if (!empty($slide_two_portfolio)){
				?>
						<li>
							<div class="grid-8"><img src="<?php echo $slide_two_portfolio['image_one_portfolio']; ?>"></div>
							<div class="grid-8"><img src="<?php echo $slide_two_portfolio['image_two_portfolio']; ?>"></div>
							<div class="grid-16"><img src="<?php echo $slide_two_portfolio['image_three_portfolio']; ?>"></div>
						</li>
				<?php
					}
				?>
			</ul>
		</div>
	</section>

<?php get_footer(); ?>