<?php

/**
 * ****************************************************
 * @copyright: 2014, Spell Master(c)
 * @version: 1.0, Spell Master(c)
 * ****************************************************
 * @function: Converte dados de arrays em objetos
 * ****************************************************
 * */
function stdArray($array) {
    $object = new stdClass();
    if (is_array($array)) {
        foreach ($array as $name => $value) {
            $object->$name = $value;
        }
    }
    return $object;
}
