<?php

/**
 * *********************************************
 * @Class : DataFilter
 * @Copyright : 2018 Omar Pautz (Spell Master)
 * @Version : 1.0
 * @Info : Criada só para o exemplo de urls
 * amigáveis.
 * *********************************************
 */
class DataFilter {

    private static $baseDir;
    private static $filter;

    /**
     * *****************************************
     * @method objArray
     * @Info Converte dados em objetos
     * @param (string) $array : Array para se
     * convertida em objeto.
     * @return (object Array)
     * *****************************************
     */
    private static function objArray($array) {
        $object = new stdClass();
        if (is_array($array)) {
            foreach ($array as $name => $value) {
                $object->$name = $value;
            }
        }
        return ($object);
    }

    /**
     * *****************************************
     * @method baseURI
     * @Info Obtem o diretório base do sistema
     * @return (string) Diretório base
     * 
     * @obs.: Este método foi projetado para
     * obter o diretório ignorando o host local
     * (localhost ou 127.0.0.1)
     * *****************************************
     */
    public static function baseURI() {
        if (self::$baseDir != null) {
            return self::$baseDir;
        }
        $serve = filter_input_array(INPUT_SERVER, FILTER_DEFAULT);
        $rootUrl = strlen($serve['DOCUMENT_ROOT']);
        $fileUrl = substr($serve['SCRIPT_FILENAME'], $rootUrl, -9);
        if ($fileUrl[0] == '/') {
            self::$baseDir = $fileUrl;
        } else {
            self::$baseDir = '/' . $fileUrl;
        }
        return (self::$baseDir);
    }

    /**
     * *****************************************
     * @method filterGet
     * @Info Aplica um filtro genérico sobre
     * a super-global GET
     * @return (object String) Valor do GET
     * *****************************************
     */
    public static function filterGet() {
        $filterGet = filter_input_array(INPUT_GET, FILTER_DEFAULT);
        if (isset($filterGet)) {
            self::$filter = self::objArray($filterGet);
        }
        return (self::$filter);
    }

    /**
     * *****************************************
     * @method getPage
     * @Info Procura pelos arquivos nas pastas
     * @param (string) $file : Arquivo para
     * procurar.
     * @return (boll) Arquivo encontrado ou
     * retorna arquivo de erro
     * *****************************************
     */
    public static function getPage($file) {
        $pgFolder = [
            'pages',
                // 'outra_pasta', // Você pode adicionar quantas pastas quiser para afunção localizar os arquivos
        ];
        $incGet = null;
        if (isset($file)) {
            foreach ($pgFolder as $folders) {
                if (!$incGet && file_exists(__DIR__ . DIRECTORY_SEPARATOR . $folders . DIRECTORY_SEPARATOR . $file . '.php')) {
                    $incGet = true;
                    return (__DIR__ . DIRECTORY_SEPARATOR . $folders . DIRECTORY_SEPARATOR . $file . '.php');
                }
            }
        }
        if (!$incGet) {
            return (__DIR__ . DIRECTORY_SEPARATOR .'/pages/404.php');
        }
    }

}
