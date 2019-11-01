<?php
include 'global.php';
$painel_log = $_POST['painel_log'];
if(isset($painel_log)) {
	if($painel_log == '1') {
		$u_s = md5($_POST['u_pass']);

		if($u_s == $_CASH5){
			session_start();
			$_SESSION['user_id']=$u_s;
			
			header('Location: ./meta.php');
		} else {
			$flow_log = '<div>NO LOG EX</div>';
		}
	}
}
?>
<div class="box_fire x-window">
	<form method="post" action="index.php" class="line-form">
		<div class="l-form-item">
			<input type="password" name="u_pass" class="loginFormField x-form-field">
		</div>
		<?php 
			if(isset($_GET['error']) && $_GET['error'] == 'null_log'){
				print '<div class="null_log">NO LOG</div>';
			}
			if(isset($flow_log)){
				print '<div class="null_log">'.$flow_log.'</div>';
			}
		?>
		<input class="but-form" type="submit" value="Sing In">
		<input type="hidden" name="painel_log" value="1">
	</form>
</div>