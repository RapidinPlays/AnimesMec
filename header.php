<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php
		if (function_exists('is_tag') && is_tag()) {
			echo 'Tag Archive para &quot;'.$tag.'&quot; - ';
		} elseif (is_archive()) {
			wp_title(''); echo ' | Assistir Animes Online – '; bloginfo('name');
		} elseif (is_search()) {
			echo 'Procurar por '.wp_specialchars($s).' - '; bloginfo('name');
		} elseif (!(is_404()) && (is_single()) || (is_page())) {
			echo 'Assistir '; wp_title(''); echo ' Online';
		} elseif (is_404()) {
			echo 'Nada encontrado - '; bloginfo('name');
		} else {
			echo 'Assistir Animes Online – '; bloginfo('name'); echo ' | Animes Online – Live Action Gratis';
		}
	?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>">
	<meta name="google-site-verification" content="RE9PGp7Touq26hlbXiDyN9FZUk2MbOUrJ_AigPHamdE" />
	<meta property="fb:app_id" content="1693633930921868" />
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta property="og:image" content="<?php
			if (is_single()) {
				if (have_posts()) : while (have_posts()) : the_post();
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					echo $feat_image;
				endwhile;
	 			endif;
			} else {
				echo bloginfo('template_url').'/img/hd_icon_325x325.png';
			}
		?>"/>
	<meta property="og:title" content="<?php
			if (is_archive()) {
				wp_title(''); echo ' | Assistir Animes Online – '; bloginfo('name');
			} elseif (is_search()) {
				echo 'Procurar por '.wp_specialchars($s).' - '; bloginfo('name');
			} elseif (!(is_404()) && (is_single()) || (is_page())) {
				echo 'Assistir';wp_title(''); echo ' Online';
			} else {
				echo 'Assistir Animes Online – '; bloginfo('name'); echo ' | Animes Online – Live Action Gratis';
			}
		?>"/>
	<meta property="og:description" content="<?php
			if (is_single()) {
				if (have_posts()) : while (have_posts()) : the_post();
					$mg_post = get_post($post->ID); 
					$CONT = $mg_post->post_content;
					echo strip_tags($CONT);
				endwhile;
	 			endif;
			} else {
				echo 'Assistir animes online, não esquente a cabeça em baixar animes para o seu computador, assista animes online. Assista animes e live action online, animes grátis. Assista animes na internet quantas vezes quiser e na hora que quiser.';
			}
		?>"/>
	<script src="<?php bloginfo('template_url'); ?>/js/SC_01APP.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/SC_JSAPP.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media-query.css">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	
	<?php wp_head(); ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<style type="text/css" media="screen">
		html { margin-top: 0 !important; }
		* html body { margin-top: 0 !important; }
		@media screen and ( max-width: 782px ) {
			html { margin-top: 0 !important; }
			* html body { margin-top: 0 !important; }
		}
	</style>
	<script type="text/javascript">
		$(window).scroll(function () {
		    var headerTop = $("header").offset().top + $("header").outerHeight();

		    if ($(window).scrollTop() > headerTop) {
		        $(".sticky-top-menu").css({"position":"fixed", "box-shadow":"0 1px 1px "});
		        $(".logo_mini").css("display","block");
		        $("form#searchform input#s").addClass("no_bodyC-Form");
		        $("form#searchform input#s").attr("placeholder","Buscar");
		        $("ul#menu").css("margin-top","60px");
		        $("ul.lista-filmes").css("margin-top","60px");
		    } else {
		        $(".sticky-top-menu").removeAttr("style");
		        $(".logo_mini").removeAttr("style");
		        $("form#searchform input#s").removeClass("no_bodyC-Form");
		        $("form#searchform input#s").attr("placeholder","Faça a busca por animes em todo o site");
		        $("ul#menu").removeAttr("style");
		        $("ul.lista-filmes").removeAttr("style");
		    }
		});
	</script>

</head>
<body <?php body_class(); ?>>
	<nav id="header-geral">
		<header id="header-geral-top">
			<div class="cont_marg">
				<div class="min-auto_440">
					<a href="<?php echo get_option('home'); ?>" class="e_log">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png">
					</a>
				</div>

				<div class="e_desc">
					<?php if ( is_single() ) { ?>
						<?php
							global $post;
							$categoria = get_the_category($post->id);
							//NOME
							$category_name = $categoria[0]->cat_name;
							//LINK
  							$category_link = get_category_link($categoria[0]);
  							//TITLE
  							$mg_post = get_post($post->ID); 
							$post_t = $mg_post->post_title;
						?>
						<div id="crumbs" class="b-crumbs">
							<a class="princ" href="<?php echo get_option('home'); ?>">MegaFilmesHD2.0</a>
							 » 
							<a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a>
							 » 
							<span><?php echo $post_t; ?></span>
						</div>
					<?php } else { print '<span>Assistir Animes Online, Live Action Online, Animes Grátis</span>'; } ?>
				</div>
    </div>
			</div>
			<!--<div class="wp-loginn">
        <a href="/wp-login.php"><img src="https://i.imgur.com/VEfS4qg.png" target="_blank" />
        Login/Registro</a>
    </div> -->
		</header>
		<?php if ( is_single() ) { ?>

		<div id="header-geral-video-desk">
			<div id="header-center-video-desk" class="cont_marg">
				<h1>
					<span class="t_arc"><?php single_post_title(); ?></span>
				</h1>
			</div>
		</div>
		<?php } else { get_search_form(); } ?>
		
    </div>

<!--Background item -->
    <style>
#estilo a img{
width:40px;
height:40px;
display:inline;
margin-right:10px;
margin-top:15px;
border: 2px solid #EEE;
}
#estilo a:hover img{
border: 2px solid #bdebff;
}

</style>
<div id="estilo">
<script src="http://code.jquery.com/jquery-1.6.2.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#bgcolor1").click(function(){
		$("body").css({"background":"url(http://i.imgur.com/G5wKsMT.gif)"});
	});
});
$(document).ready(function(){
	$("#bgcolor2").click(function(){
		$("body").css({"background":"url(https://i.imgur.com/KnSMUju.jpg)"});
	});
});
$(document).ready(function(){
	$("#bgcolor5").click(function(){
		$("body").css({"background":"url(http://i47.tinypic.com/2mzlgya.png)"});
	});
});
$(document).ready(function(){
	$("#bgcolor3").click(function(){
		$("body").css({"background":"url(http://i.imgur.com/nyLwc.png)"});
	});
});
$(document).ready(function(){
	$("#bgcolor4").click(function(){
		$("body").css({"background":"url(http://i.imgur.com/xYiK4t8.png)"});
	});
});
</script>

<center><a href="javascript:void(O)" id="bgcolor1" title="Fundo 1"><img src="http://i.imgur.com/G5wKsMT.gif" /></a>
<a href="javascript:void(O)" id="bgcolor5" title="Fundo 2"><img src="http://i47.tinypic.com/2mzlgya.png" /></a>
<a href="javascript:void(O)" id="bgcolor3" title="Fundo 3"><img src="http://i.imgur.com/nyLwc.png" /></a>
<a href="javascript:void(O)" id="bgcolor4" title="Fundo 4"><img src="http://i.imgur.com/xYiK4t8.png" />
<a href="javascript:void(O)" id="bgcolor2" title="Fundo 5"><img src="https://i.imgur.com/KnSMUju.jpg" /></a></a></center>
</div>
<br/>
<!-- Fim Background item -->

<center><div class="alert alert-success" role="alert" align="center">
  O Site Mega Animes HD é apenas um agregador de links, nenhum arquivo está hospedado sob nosso domínio. <br/> Todos os links contidos no site são encontrados na internet , somos igual o google apenas apontamos os links.
</div></center>

	</nav>
	
	
    