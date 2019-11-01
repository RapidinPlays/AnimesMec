<?php 
	get_header(); 
	setPostViews(get_the_ID()); 
?>

<?php the_post(); ?>
<?php $my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>
<div class="img-capa-filme-defauld"></div>
<div class="bg_gf">
	<div id="conteudo-s">
		<?php if(getCat() != 'Séries'){ if($my_meta['qualt'] == 'CAM' || $my_meta['qualt'] == 'TS' || $my_meta['qualt'] == 'HDCam'){ ?>
				<div class="faixa-qld">
					<p>
						<b>AVISO:</b>
						<span>Animes com baixa qualidade de vídeo/áudio. O filme será atualizado assim que uma nova versão for encontrada.</span>
					</p>
				</div>
		<?php }} ?>
		<div class="alct_f">
			<div id="c_left">
				<div class="c_capa">
					<?php the_post_thumbnail(array(158,226)); ?>
				</div>
				<div class="c_lbox">
					<a href="#" class="inline" data-toggle="modal" data-target=".bs-trailer">
						<i class="glyphicon glyphicon-triangle-right yt"></i>
						<span>Assistir Trailer</span>
					</a>
					<table class="tb_filme">
						<tbody>
							<tr>
								<td>
									<a title="Visualizações do filme" id="visitas">
										<i class="glyphicon glyphicon-eye-open view_fm"></i>
										<?php echo getPostViews(get_the_ID()); ?>
									</a>
								</td>
								<td data-toggle="modal" data-target=".bs-error">
									<a class="btn-relatarerro" style="cursor:pointer">Relatar Erro</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div id="center-video">
				<h2 class="titulo1">
					<span>
						<?php the_title(); ?>
						<span class="sgt_res"></span>
					</span>
				</h2>
				<?php if($my_meta['ct'] == 1){ ?>
					<div class="redes">
						<table width="150" align="left">
							<tbody>
								<tr>
									<td width="37" align="left">
										<iframe src="https://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&layout=button&action=like&font=arial" scrolling="no" frameborder="0" allowtransparency="true" style="float:left;width:67px;overflow:hidden;height:20px;"></iframe>
									</td>
									<td width="122" align="left">
										<iframe src="https://www.facebook.com/plugins/share_button.php?href=<?php the_permalink(); ?>&layout=button&font=arial" scrolling="no" frameborder="0" allowtransparency="true" style="float:left;width:102px;overflow:hidden;height:20px;"></iframe>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="deixe-voto">
						<span class="media-estrela"><?php echo $my_meta['imdb']; ?></span>
						<p class="detalhes-imbd">
							<strong class="media">IMDb </strong>
							<strong class="votos">/ VOTOS</strong>
						</p>
					</div>
					<div class="content">
						<div id="scrollbar" class="ct_fm">
							<div class="mCSB_container">
								<?php
									$mg_post = get_post($post->ID); 
									$CONT = $mg_post->post_content;
									echo strip_tags($CONT);
								?>
							</div>
						</div>
					</div>
					<div class="btn-ver">
						<?php 
							if($my_meta['ct'] == 1) {
								print 	'<div class="btn-flm" alt="Peter Pan" onclick="boxp(\''.get_option('home').'/playbox/?tp=f&aud='.$my_meta['aud'].'&v1='.$my_meta['url_1'].'&p1='.$my_meta['ply_1'].'&v2='.$my_meta['url_2'].'&p2='.$my_meta['ply_2'].'&v3='.$my_meta['url_3'].'&p3='.$my_meta['ply_3'].'\')" data-toggle="modal" data-target=".open_box">
											<span>ASSISTIR</span>
										</div>';
							} else {
								print 	'<div class="btn-flm" alt="Peter Pan" onclick="boxp(\''.get_option('home').'/playbox/?tp=s&key='.$my_meta['cts_key'].'\')" data-toggle="modal" data-target=".open_box">
											<span>ASSISTIR</span>
										</div>';
							}
						?>
					</div>
				<?php } else { ?>
					<div id="clos_or">
						<div>
							<?php if(isset($my_meta['s_post'])) { ?>
								<div id="scrollbar" class="clos_me5">
									<div class="_ten">Temporadas:</div>
									<div id="scrollbar" class="lop_bar">
										<?php 
						                    $s_post = $my_meta['s_post'];
						                    for ($i=1; $i<=$s_post; $i++){
						                    	print '<span onclick="activeS(\''.$post->ID.'\',\''.$i.'\')">'.$i.'</span>';
						                    }
										?>
									</div>
								</div>
								<div id="scrollbar" class="clos_or5">
									<span class="m_b10 inf_spost">Escolha umas das temporadas para aparecer os episódios correspondente ao anime.</span>
									<?php for ($i=1; $i<=$s_post; $i++){ ?>
										<div class="noload <?php print 'ac_'.$post->ID.'_'.$i; ?>" style="display:none;">
											<?php 
												if(isset($my_meta[$my_meta['cts_key'].'_'.$i.'_d'])){
													if($my_meta[$my_meta['cts_key'].'_'.$i.'_d'] == 'ok'){
														print '<span class="noaudi dub'.$i.'" onclick="activeT(\'dub\',\''.$i.'\')">Dublado</span>';
														print '<div id="dub'.$i.'" class="megabox" style="display:none;">';
																	$s_pline = $my_meta[$my_meta['cts_key'].'_'.$i];
																	if(!empty($s_pline)) {
																		print '<ul>';
																		for ($e=1; $e<=$s_pline; $e++){
																			$epD = $my_meta[$my_meta['cts_key'].'_'.$i.'_'.$e.'d'];
																			if($epD != ''){
																				print '<li onclick="boxp(\''.get_option('home').'/playbox/?tp=s&key='.$epD.'\')" data-toggle="modal" data-target=".open_box">EP - '.$e.'(D)</li>';
																			}
																		}
																		print '</ul>';
																	}
														print '</div>';
													}
												}
												if(isset($my_meta[$my_meta['cts_key'].'_'.$i.'_l'])){
													if($my_meta[$my_meta['cts_key'].'_'.$i.'_l'] == 'ok'){
														print '<span class="noaudi leg'.$i.'" onclick="activeT(\'leg\',\''.$i.'\')">Legendado</span>';
														print '<div id="leg'.$i.'" class="megabox" style="display:none;">';
																	$s_pline = $my_meta[$my_meta['cts_key'].'_'.$i];
																	if(!empty($s_pline)) {
																		print '<ul>';
																		for ($e=1; $e<=$s_pline; $e++){
																			$epD = $my_meta[$my_meta['cts_key'].'_'.$i.'_'.$e.'l'];
																			if($epD != ''){
																				print '<li onclick="boxp(\''.get_option('home').'/playbox/?tp=s&key='.$epD.'\')" data-toggle="modal" data-target=".open_box">EP - '.$e.'(L)</li>';
																			}
																		}
																		print '</ul>';
																	}
														print '</div>';
													}
												}
											?>
										</div>
									<?php } ?>
								</div>
							<?php } else { ?>
								<div id="scrollbar" class="clos_or5">
									<span class="m_b10">Ainda não ha temporadas registradas para esse anime.</span>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div id="right">
			<div class="s-infos">
				<div class="si-titulo">Informações <?php if($my_meta['ct'] == 1){print 'do Filme';}else{print 'do Anime';} ?></div>
				<ul class="si-itens">
					<li><b>Título Original: </b><?php echo $my_meta['torig']; ?></li>
					<li><b>Ano: </b><?php echo $my_meta['ano']; ?></li>
					<li><b>Diretor: </b><?php echo $my_meta['drt']; ?></li>
					<li><b>Elenco: </b><?php echo $my_meta['elenco']; ?></li>
					<li><b>Duração: </b><?php echo $my_meta['durat']; ?>min</li>
					<li><b>Origem: </b><?php echo $my_meta['orig']; ?></li>
				</ul>
				<div class="i-classif ici-<?php echo $my_meta['classf']; ?>">
					<div class="ic-idade"><?php echo $my_meta['classf']; ?></div>
					<div class="ic-texto"><?php if($my_meta['classf'] == 'l'){ print 'Livre para todas as idades'; } else { print 'Não recomendado para menores de '.$my_meta['classf'].' anos'; } ?></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Facebook Comments MFHD 2.0: <?php the_permalink(); ?> -->
<div id="con_d">
	<div id="conteudo" class="esconder">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=1693633930921868";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-num-posts="4" data-colorscheme="dark" fb-xfbml-state="rendered" order_by="reverse_time"></div>
	</div>
</div>

<!-- TRAILER -->
<div class="modal fade bs-trailer" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-md">
		<div class="modal-content cl_bgmodal">
	        <div class="modal-body">
	        	<div class="relatarErro">
	        		<div class="texto">
	        			<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $my_meta['key']; ?>" frameborder="0" allowfullscreen></iframe>
	        		</div>
	        	</div>
			</div>
		</div>
	</div>
</div>
<!-- OPEN BOX -->
<div class="modal fade open_box" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-md box_gg">
		<div class="modal-content cl_bgmodal">
	        <div class="modal-body">
	        	<div>
	        		<button onclick="boxStop()" type="button" data-dismiss="modal" aria-label="Close" class="close box_cOp"><span aria-hidden="true">×</span></button>
	        	</div>
	        	<div class="onBox"></div>
			</div>
		</div>
	</div>
</div>
<script>
    $(".fb-comments").css('opacity','0.2');
    $(document).ready(function(){
    $(".esconder").hover(function() {
    $(this).find(".fb-comments").stop().animate({ opacity: 1 });
    },function() {
       $(this).find(".fb-comments").stop().animate({ opacity: 0.2 });
    });
    });
</script>
<?php get_footer(); ?>