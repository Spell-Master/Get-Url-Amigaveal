<?php
require ('./DataFilter.php');
$get = DataFilter::filterGet();
?>
<!DOCTYPE html>
<html>
    <head>
        <base href="<?= DataFilter::baseURI(); ?>">
        <meta name="autor" content="Omar Pautz (Spell Master)"/>
        <meta charset="UTF-8">
        <title>Url Amigavel</title>
    </head>
    <body>
        <h1>Exemplo de url's amigáveis</h1>
        <hr />
        <a href="home">Página simples</a>
        <p>O primeiro link é home seria o mesmo que <b><?= DataFilter::baseURI(); ?>?a=home</b></p>

        <a href="pagina-b">Outro arquivo</a>
        <p>O segundo link é home seria o mesmo que <b><?= DataFilter::baseURI(); ?>?a=pagina-b</b></p>

        <a href="pagina-c/esse_e_o_valor_do_get">Envio de parâmetro</a>
        <p>O Terceito link é home seria o mesmo que <b><?= DataFilter::baseURI(); ?>?a=pagina-c&b=esse_e_o_valor_do_get</b></p>

        <a href="pagina-d/pagina-e">Abrindo outro arquivo junto</a>
        <p>O Quarto link é home seria o mesmo que <b><?= DataFilter::baseURI(); ?>?a=pagina-d&b=pagina-e</b></p>

        <hr />
        <?php include (DataFilter::getPage(isset($get->a) ? $get->a : 'home')); ?>
        <hr />
        <b>Depuração de valores</b>
        <?php
        echo ("<pre>");
        var_dump($get);
        echo ("</pre>");
        ?>
    </body>
</html>
