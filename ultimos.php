<?php
/*
Template Name: Novos Filmes
*/
get_header(); ?>
<div class="cont_marg">
    <div class="pad_sd">
		<?php if (have_posts()) : ?>
			<?php 
				global $query_string; parse_str( $query_string, $my_query_array ); 
				$paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1;
				//CAT : DE ACORDO COM O ID DA CATEGORIA SÉRIE 
				query_posts("cat=-2&showposts=20&paged=$paged&orderby=date&order=DESC"); 
			?> 
			<ul class="lista-filmes">
				<?php while ( have_posts() ) : the_post(); ?>
				    <?php $my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>
				    <li id="post-<?php the_ID(); ?>" title="<?php the_title(); ?>">
				        <div class="titulo-box open-sans">
				            <h2 class="titulo-box-link">
				                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				            </h2>
				        </div>
				        <div class="capa">
				            <div class="fluccs">
				                <div class="boxxer"><?php echo $my_meta['durat']; ?>min</div>
				            </div>
				            <a href="<?php the_permalink(); ?>" class="absolute-capa no-text effect"><?php the_title(); ?></a>
				            <?php the_post_thumbnail(array(158,226)); ?>
				            <div class="flutuador" style="background:none;">
				                <div class="audioy"><?php echo $my_meta['qualt']; ?></div>
				                <div class="anolanc"><?php echo $my_meta['ano']; ?></div>
				    		</div>
				        </div>
				        <div class="views"><?php echo getPostViews(get_the_ID()); ?> visitas</div>
				    </li><!-- #post-<?php the_ID(); ?> -->
				<?php endwhile; ?>
			</ul>
			<div class="paginat"><?php pagination_funtion();?></div>
		<?php endif; ?>
    </div><!-- .pad_sd -->
</div><!-- .cont_marg -->
<?php get_footer(); ?>