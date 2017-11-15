<?php

/**
 * ****************************************************
 * @copyright: 2017, Spell Master(c)
 * @version: 1.0, Spell Master(c)
 * ****************************************************
 * @datastore: Definições e configurações gerais
 * ****************************************************
 * */
$defines = [
    'site_name' => 'Exemplo', // Nome de título
    'siteUrl' => 'http://127.0.0.1/Get-UrlAmigavel/', // Endereço do website
    'fileCache' => null, // Cache de arquivos não devem ser armazenados? true/null (Habilitar isso reduzirar a performace)
    'rand' => md5(time()), // Prefixo aleatório.
];

require_once (__DIR__ . DIRECTORY_SEPARATOR . 'stdArray.php');

$filterGet = filter_input_array((htmlspecialchars_decode(INPUT_GET)), FILTER_DEFAULT);

$config = stdArray($defines);
$get = stdArray($filterGet);
