<script src="<?php bloginfo('template_url'); ?>/js/SC_01APP.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/SC_JSAPP.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css">
<script type="text/javascript">
	var _0x5a6a=["\x75\x73\x65\x72\x41\x67\x65\x6E\x74","\x74\x65\x73\x74","\x3C\x21\x2D\x2D\x20\x4D\x4F\x56\x45\x4C\x20\x2D\x2D\x3E","\x68\x74\x6D\x6C","\x2E\x63\x6F\x75\x6E\x74","\x3C\x73\x63\x72\x69\x70\x74\x20\x74\x79\x70\x65\x3D\x27\x74\x65\x78\x74\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74\x27\x20\x73\x72\x63\x3D\x27\x68\x74\x74\x70\x3A\x2F\x2F\x70\x6C\x31\x34\x31\x30\x36\x38\x2E\x70\x75\x68\x74\x6D\x6C\x2E\x63\x6F\x6D\x2F\x31\x64\x2F\x38\x66\x2F\x31\x35\x2F\x31\x64\x38\x66\x31\x35\x30\x31\x30\x37\x34\x35\x38\x32\x33\x32\x63\x38\x61\x38\x37\x33\x34\x65\x38\x30\x61\x31\x64\x66\x36\x36\x2E\x6A\x73\x27\x3E\x3C\x2F\x73\x63\x72\x69\x70\x74\x3E","\x72\x65\x61\x64\x79"];$(document)[_0x5a6a[6]](function(){if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i[_0x5a6a[1]](navigator[_0x5a6a[0]])){$(_0x5a6a[4])[_0x5a6a[3]](_0x5a6a[2])}else {$(_0x5a6a[4])[_0x5a6a[3]](_0x5a6a[5])}});
</script>
<script type="text/javascript">   
	<!-- Disable   
	function disableselect(e){   
	return false   
	}   

	function reEnable(){   
	return true   
	}   

	//if IE4+   
	document.onselectstart=new Function ("return false")   
	document.oncontextmenu=new Function ("return false")   
	//if NS6   
	if (window.sidebar){   
	document.onmousedown=disableselect   
	document.onclick=reEnable   
	}   
	//-->   
</script>  
<body>
<?php
/*
Template Name: BoxPlay
*/
	$ac = trim(strip_tags($_GET['tp']));
	if (isset($ac) && $ac == 'f') {
		$f_aud = $_GET['aud'];
		switch($f_aud) {
			case '1':
				$resut_aud = '<div class="aud_bx"><h4>Dublado:</h4></div>';
				break;
			case '2':
				$resut_aud = '<div class="aud_bx"><h4>Legendado:</h4></div>';
				break;
			default:
				break;
		}

		if($_GET['p1'] != ''){
			$f_l1n = $_GET['p1'];
		} else {
			$f_l1n = 'Player 1';
		}

		if($_GET['p2'] != ''){
			$f_l2n = $_GET['p2'];
		} else {
			$f_l2n = 'Player 2';
		}

		if($_GET['p3'] != ''){
			$f_l3n = $_GET['p3'];
		} else {
			$f_l3n = 'Player 3';
		}

		$p_l1 = $_GET['v1'];
		$p_l2 = $_GET['v2'];
		$p_l3 = $_GET['v3'];

		print 	'<div id="player_in">
					<div class="gg_f3">SELECIONE UM DOS PLAYER</div>';
					print $resut_aud;
		print		'<div class="list_play">
						<ul>';
						if(isset($p_l1) && $p_l1 != ''){
							print '<li onclick="opb(\''.$p_l1.'\')"><a href="'.$p_l1.'">'.$f_l1n.'</a></li>';
						}
						if(isset($p_l2) && $p_l2 != ''){
							print '<li onclick="opb(\''.$p_l2.'\')"><a href="'.$p_l2.'">'.$f_l2n.'</a></li>';
						}
						if(isset($p_l3) && $p_l3 != ''){
							print '<li onclick="opb(\''.$p_l3.'\')"><a href="'.$p_l3.'">'.$f_l3n.'</a></li>';
						}
		print			'</ul>
					</div>
				</div>';
	}

	if (isset($ac) && $ac == 's') {
		print 	'<div id="player_in">
					<div class="gg_f3">SELECIONE UM DOS PLAYER</div>';
		print		'<div class="list_play">
						<ul>
							<li><a href="'.$_GET['key'].'">PLAYER 1</a></li>
						</ul>
					</div>
				</div>';
	}
?>
<div class="count"></div>
</body>