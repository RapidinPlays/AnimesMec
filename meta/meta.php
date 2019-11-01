<?php
include 'global.php';
if($user_id){
    echo    '<div id="header">
                <div class="_gsv">
                    <div class="logo">EC/EDIT</div>';
                    if(isset($_GET['pasta']) && $_GET['pasta'] != ''){
                        echo '<a class="line_55 mord_red" href="meta.php">Voltar a raiz</a>';
                    }
    echo            '<a class="logout" href="./lmeta.php">SAIR</a>
                </div>
            </div>';
    $ap = DATA_FOLDER;
    $dir = '/';

    if (empty($_GET['pasta']) === false) {
       $dir = '/' . trim($_GET['pasta'], '/');
    }

    if (isset($_GET['deletar']) && file_exists($ap . $dir)) {
        echo '<a href="dmeta.php?arquivo=', $ap . $dir,'">Quer realmente deletar o arquivo "', $ap , $dir, '"?</a><hr>';
    }

    if (is_dir($ap . $dir)) {
        $dh = opendir($ap . $dir);
        if ($dh) {
            echo '<div class="bord-list">';
            echo '<ul class="list-file">';

            while (($file = readdir($dh)) !== false) {
                if ($file === '.' || $file === '..') {
                   continue;
                }

                $acessivel = false;
                $atual = $ap . $dir . '/' . $file;

                if (is_dir($atual)) {
                     echo '<li> <a href="meta.php?pasta=', $dir, '/', $file, '" class="past">', $file,'</a>';
                     $acessivel = true;
                } else if (is_file($atual)) {
                     echo '<li>', $file,' <a class="_5dsd" href="emeta.php?arquivo=', $dir, '/', $file, '">[Editar]</a>';
                     $acessivel = true;
                }

                if ($acessivel) {
                    echo ' <a class="_5dsd c_42" href="dmeta.php?arquivo=', $dir, '/', $file, '&amp;deletar=1">[Deletar]</a> </li>';
                }
            }

            echo '</ul>';
            echo '</div>';
            closedir($dh);
        }
    }
    ?>
<?php
} else {
    header('Location: ./index.php?error=null_log');
}
?>