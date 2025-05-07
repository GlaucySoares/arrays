<?php
// Declarando um array
$frutas = array("maçã", "banana", "laranja", "uva");

// Valor a ser procurado
$valorProcurado = "laranja";

// Usando array_search()
$indice = array_search($valorProcurado, $frutas);

if ($indice !== false) {
    echo "O valor '$valorProcurado' foi encontrado no índice $indice.";
} else {
    echo "O valor '$valorProcurado' não foi encontrado no array.";
}
?>
