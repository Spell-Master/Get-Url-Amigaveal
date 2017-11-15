<?php require_once ('./function/define.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <base href="<?= $config->siteUrl; ?>">
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="author" content="Omar Pautz (Spell Master)"/>
        <title><?= $config->site_name; ?> </title>

        <link href="stylesheet/main.css<?= isset($config->fileCache) ? "/?={$config->rand}" : null; ?>" rel="stylesheet" type="text/css"/>
        <script src="javascript/main.js<?= isset($config->fileCache) ? "/?={$config->rand}" : null; ?>" type="text/javascript"></script>

    </head>
    <body>
        <a class="link-index" href="<?= $config->siteUrl . "home"; ?>">/?module=home</a>
        <a class="link-index" href="<?= $config->siteUrl . "teste1"; ?>">/?module=teste1</a>
        <a class="link-index" href="<?= $config->siteUrl . "teste2"; ?>">/?module=teste2</a>

        <br>
        <a class="sub-link" href="<?= $config->siteUrl . "teste1/teste1-page1"; ?>">/?module=teste1&page=teste1-page1</a>
        <a class="sub-link" href="<?= $config->siteUrl . "teste1/teste1-teste2"; ?>">/?module=teste1&page=teste1-teste2</a>

        <div class="abrir">
            <?php
            if (isset($get->module)) {
                include_once ('pages' . DIRECTORY_SEPARATOR . $get->module . '.php');
            } else {
                include_once ('pages' . DIRECTORY_SEPARATOR . 'home.php');
            }
            ?>
        </div>
    </body>
</html>
