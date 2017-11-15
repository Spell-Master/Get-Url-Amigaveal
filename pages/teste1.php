<?php
if (isset($get->page)) {
    include_once ('pages' . DIRECTORY_SEPARATOR . $get->page . '.php');
} else {
    include_once ('pages' . DIRECTORY_SEPARATOR . 'home.php');
    ?>
    <hr>
    Arquivo teste1.php, se não houver página no get abre a home
    <?php
}

