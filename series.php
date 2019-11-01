<?php
/*
Template Name: Series
*/
get_header(); ?>
<div class="cont_marg">
    <div class="pad_sd">
		<?php if (have_posts()) : ?>
			<?php 
				global $query_string; parse_str( $query_string, $my_query_array ); 
				$paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1; 
				query_posts("category_name=series&showposts=-1&paged=$paged&orderby=meta_value_num&meta_key=post_views_count"); 
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
				            <a href="<?php the_permalink(); ?>" class="absolute-capa no-text effect"><?php the_title(); ?></a>
				            <?php the_post_thumbnail(array(158,226)); ?>
				            <div class="flutuador" style="background:none;">
				                <div class="anolanc"><?php echo $my_meta['ano']; ?></div>
				    		</div>
				        </div>
				        <div class="views"><?php echo getPostViews(get_the_ID()); ?> visitas</div>
				    </li><!-- #post-<?php the_ID(); ?> -->
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
    </div><!-- .pad_sd -->
</div><!-- .cont_marg -->
<?php get_footer(); ?>