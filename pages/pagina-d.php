Essa é a pagina-d.php
<p>Ela recebeu como $_GET: <?= $get->b ?></p>
<br />
<?php
if (isset($get->b)) {
    include (__DIR__ . DIRECTORY_SEPARATOR . 'pagina-e.php');
}

