<?php
include 'global.php';
if($user_id){
	if (empty($_GET['arquivo'])) {
	    echo 'Arquivo não definido';
	    exit;
	}

	$ap = DATA_FOLDER;
	$arquivo = $ap . '/' . $_GET['arquivo'];

	if (false === is_file($arquivo)) {
	    echo 'Arquivo não inacessivel ou invalido:', $arquivo;
	    exit;
	}

	$isso = array('\\','/');
	$psso = array('','');
	$arc_file = str_replace($isso, $psso, $_GET['arquivo']);
	echo '<div id="header"><div class="logo">EC/EDIT</div><div class="nam-hed">Você está editado: <b>'.$arc_file.'</b><a class="logout" href="./lmeta.php">SAIR</a></div></div>';

	if (isset($_POST['my-xml-editor'])) {
	    file_put_contents($arquivo, $_POST['my-xml-editor'], LOCK_EX);
	}
	?>
	<div>
		<form action="emeta.php?arquivo=<?php echo $_GET['arquivo']; ?>" method="POST" class="edit-c">
			<div id="content">
			    <textarea name="my-xml-editor" data-editor="xml" height="calc(100vh - 55px)" class="edit-code"><?php
			          echo htmlspecialchars(file_get_contents($arquivo));
			    ?></textarea><br>
		    </div>
		    <div id="sidebar">
		    	<div class="mb_5">
					<button type="submit" class="but_edit">Salvar</button>
				</div>
				<a class="mord_red" href="meta.php?pasta=<?php echo dirname($_GET['arquivo']); ?>">Voltar para navegação</a>
			</div>
		</form>
	</div>
	<hr>
	<style type="text/css">
		.ace-tm .ace_print_margin {
		    width: 0px !important;
		}
	</style>
<?php
} else {
    header('Location: ./index.php?error=null_log');
}
?>