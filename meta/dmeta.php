<?php
include 'global.php';
if($user_id){
if (empty($_GET['arquivo'])) {
    echo 'Arquivo não definido';
    exit;
}

  $ap = DATA_FOLDER;
  $arquivo = $ap . '/' . $_GET['arquivo'];

  $isso = array('\\','/');
  $psso = array('','');
  $arc_file = str_replace($isso, $psso, $_GET['arquivo']);
  echo '<div id="header"><div class="_gsv"><div class="logo">EC/EDIT</div><div class="nam-hed">';

  if (is_dir($arquivo)) {
      //Deleta pasta recursivamente, pois não é possivel deletar pastas que não estão vazias
      function recursive_rmdir($path) {
          if (is_dir($path) && ($dh = opendir($path))) {
              while (($file = readdir($dh)) !== false) {
                  if ($file === '.' || $file === '..') {
                     continue;
                  }

                  $atual = $path . '/' . $file;

                  if (is_dir($atual)) {
                      recursive_rmdir($atual);
                  } else if (is_file($atual)) {
                      unlink($atual);
                  } else {
                      echo $atual, ' é inacessivel<br>';
                  }
              }
              closedir($dh);
              rmdir($path);
          } else if (is_file($path)) {
              unlink($path);
          }
      }

      recursive_rmdir($arquivo);
  } else if (is_file($arquivo)) {
     if (unlink($arquivo)) {
         echo 'Arquivo <b>"'.$arc_file.'"</b> deletado com sucesso';
     } else {
         echo 'Falha ao deletar o arquivo <b>"'.$arc_file.'"</b>';
     }
  } else {
         echo 'Arquivo <b>"'.$arc_file.'"</b> inacessivel';
  }
  echo '<a class="logout" href="./lmeta.php">SAIR</a></div></div></div>';
  ?>
  <div class="ptald">
    <a class="mord_red" href="meta.php?pasta=<?php echo dirname($_GET['arquivo']); ?>">Voltar para navegação</a>
  </div>
<?php
} else {
  header('Location: ./index.php?error=null_log');
}
?>