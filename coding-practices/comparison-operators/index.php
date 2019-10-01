<?php

$a =  5; /* como un entero */

var_dump($a == 5); /* comparamos el valor; es true */
var_dump($a == '5'); /* comparamos el valor(ignoramos el tipo); es true */
var_dump($a === 5); /* comparamos tipo/valor(integer vs integer) */
var_dump($a === '5'); /* comparamos tipo/valor(integer vs string) */

// Comparación de igualdad
if (strpos('testing', 'test')) { //test en encontrado en posición 0, el cual es interpretado como el boolean 'false'
    # code...
}

// vs strict comparisons
if (strpos('testing', 'test') !== false) { //true, como comparación estricta fue hecha(0 !== false)
    # code...
}
