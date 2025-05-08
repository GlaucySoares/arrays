<?php

$lista_frutas = ['Banana', 'Maçã', 'Uva'];

$existe = array_search('Uva', $lista_frutas);

if($existe != null){
    echo 'Sim, Uva esta presente no array';
} else {
    echo 'Não, Uva não esta presente no array';
}

?>
