<?php get_header(); ?>

<div class="fundo">
	<div>
		<ul id="menu">
            
            <li id="ultimos">
				<a href="<?php echo get_option('home'); ?>/category/ultimos/">
					<span class="mn-c-red nome-categoria-red">Recentes</span>
					<span class="nm-pt numero-post-lancamento"><?php echo mdv_post_count(); ?> Animes</span>
				</a>
			</li>
            <li id="acao">
				<a href="<?php echo get_option('home'); ?>/category/acao/">
					<span class="mn-c-red nome-categoria-red">Ação</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Ação'); ?> Animes</span>
				</a>
			</li>            
            <li id="artes-marciais">
				<a href="<?php echo get_option('home'); ?>/category/artes-marciais/">
					<span class="mn-c-red nome-categoria-red">Artes Marciais</span> 
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Artes Marciais'); ?> Animes</span>
				</a>
			</li>
            <li id="aventura">
				<a href="<?php echo get_option('home'); ?>/category/aventura/">
					<span class="mn-c-red nome-categoria-red">Aventura</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Aventura'); ?> Animes</span>
				</a>
			</li>
            <li id="comedia">
				<a href="<?php echo get_option('home'); ?>/category/comedia/">
					<span class="mn-c-red nome-categoria-red">Comédia</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Comédia'); ?> Animes</span>
				</a>
			</li>
            <li id="romance">
				<a href="<?php echo get_option('home'); ?>/category/romance/">
					<span class="mn-c-red nome-categoria-red">Romance</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Romance'); ?> Animes</span>
				</a>
			</li>
            <li id="jogos">
				<a href="<?php echo get_option('home'); ?>/category/jogos-esportes/">
					<span class="mn-c-red nome-categoria-red">Jogos</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Jogos'); ?> Animes</span>
				</a>
			</li>
            <li id="josei">
				<a href="<?php echo get_option('home'); ?>/category/josei/">
					<span class="mn-c-red nome-categoria-red">Josei</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Josei'); ?> Animes</span>
				</a>
			</li>
            <li id="kodomo">
				<a href="<?php echo get_option('home'); ?>/category/kodomo/">
					<span class="mn-c-red nome-categoria-red">Kodomo</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Kodomo'); ?> Animes</span>
				</a>
			</li>
            <li id="drama">
				<a href="<?php echo get_option('home'); ?>/category/drama/">
					<span class="mn-c-red nome-categoria-red">Drama</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Drama'); ?> Animes</span>
				</a>
			</li>
            <li id="faroeste">
				<a href="<?php echo get_option('home'); ?>/category/faroeste/">
					<span class="mn-c-red nome-categoria-red">Faroeste</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Faroeste'); ?> Animes</span>
				</a>
			</li>
            <li id="parodia">
				<a href="<?php echo get_option('home'); ?>/category/parodiaouanimparo/">
					<span class="mn-c-red nome-categoria-red">Paródia</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Paródia'); ?> Animes</span>
				</a>
			</li>
           
            <li id="guerra">
				<a href="<?php echo get_option('home'); ?>/category/guerra/">
					<span class="mn-c-red nome-categoria-red">Guerra</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Guerra'); ?> Animes</span>
				</a>
			</li>
            <li id="herois">
				<a href="<?php echo get_option('home'); ?>/category/herois/">
					<span class="mn-c-red nome-categoria-red">Heróis</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Heróis'); ?> Animes</span>
				</a>
			</li>
            <li id="infantil">
				<a href="<?php echo get_option('home'); ?>/category/infantil/">
					<span class="mn-c-red nome-categoria-red">Desenhos</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Infantil'); ?> Animes</span>
				</a>
			</li>
            <li id="lutas">
				<a href="<?php echo get_option('home'); ?>/category/lutas/">
					<span class="mn-c-red nome-categoria-red">Lutas</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Lutas'); ?> Animes</span>
				</a>
			</li>
            <li id="musical">
				<a href="<?php echo get_option('home'); ?>/category/musical/">
					<span class="mn-c-red nome-categoria-red">Musical</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Musical'); ?> Animes</span>
				</a>
			</li>
            <li id="ova">
				<a href="<?php echo get_option('home'); ?>/category/ova/">
					<span class="mn-c-red nome-categoria-red">Ovas</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Ova'); ?> Animes</span>
				</a>
			</li>
            <li id="policial">
				<a href="<?php echo get_option('home'); ?>/category/policial/">
					<span class="mn-c-red nome-categoria-red">Policial</span>
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Policial'); ?> Animes</span>
				</a>
			</li>

			<li id="horror">
				<a href="<?php echo get_option('home'); ?>/category/horror/">
					<span class="mn-c-red nome-categoria-red">Horror</span> 
					<span class="nm-pt numero-post-lancamento"><?php echo get_category_id('Horror'); ?> Animes</span>
				</a>
			</li>
        	<div class="clear"></div>
    	</ul>
    </div>
</div>
<style>
	#fbox-background {
	    display: none;
	    background: rgba(0,0,0,0.8);
	    width: 100%;
	    height: 100%;
	    position: fixed;
	    top: 0;
	    left: 0;
	    z-index: 99999;
	}

	#fbox-close {
	    width: 100%;
	    height: 100%;
	}

	#fbox-display {
	    background: transparent;
	    border: 1px solid #FFF;
	    padding: 1px;
	    width: 404px;
    	height: 237px;
	    position: absolute;
	    top: 32%;
	    left: 35%;
	}

	#fbox-button {
	    float: right;
	    margin: 3px;
	    cursor: pointer;
	}

	#fbox-button:before {
	    content: "X";
	    padding: 5px 8px;
	    background: #FFF;
	    border-radius: 50%;
	    color: #B60000;
	    font-weight: bold;
	    font-size: 10px;
	    font-family: Tahoma;
	}

	#fbox-link,#fbox-link a.visited,#fbox-link a,#fbox-link a:hover {
	    color: #aaaaaa;
	    font-size: 9px;
	    text-decoration: none;
	    text-align: center;
	    padding: 5px;
	}

	.st_font {
	    background: #B60000;
	    color: #FFF;
	    padding: 5px;
	    font-size: 16px;
	}
</style>
<script type='text/javascript'>
    //<![CDATA[
    jQuery.cookie = function (key, value, options) {
        // key and at least value given, set cookie...
        if (arguments.length > 1 && String(value) !== "[object Object]") {
            options = jQuery.extend({}, options);
            if (value === null || value === undefined) {
                options.expires = -1;
            }
            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }
            value = String(value);
            return (document.cookie = [
                encodeURIComponent(key), '=',
                options.raw ? value : encodeURIComponent(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path ? '; path=' + options.path : '',
                options.domain ? '; domain=' + options.domain : '',
                options.secure ? '; secure' : ''
            ].join(''));
        }

        // key and possibly options given, get cookie...
        options = value || {};
        var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
        return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
    };
    //]]>

</script>
<script type='text/javascript'>
    jQuery(document).ready(function($){
        if($.cookie('popup_facebook_box') != 'yes'){
            $('#fbox-background').delay(5000).fadeIn('medium');
            $('#fbox-button, #fbox-close').click(function(){
                $('#fbox-background').stop().fadeOut('medium');
            });
        }
        $.cookie('popup_facebook_box', 'yes', { path: '/', expires: 1 });
    });
</script>
<div id='fbox-background'>
    <div id='fbox-close'></div>
    <div id='fbox-display'>
        <div class="st_font">
            <span>CURTA NOSSA PÁGINA</span>
            <div id='fbox-button'></div>
        </div>
        <iframe allowtransparency='true' frameborder='0' scrolling='no' src='//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/animatubeblogger&width=402&height=255&colorscheme=light&show_faces=true&show_border=false&stream=false&header=false' style='border: none; overflow: hidden;'></iframe>
    </div>
</div>


<?php get_footer(); ?>

