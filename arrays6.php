
A função explode em PHP é usada para dividir uma string em um array, utilizando um delimitador específico. 
<br>
É especialmente útil quando você tem uma sequência de valores separados por um caractere (como vírgula, ponto e vírgula, espaço, etc.).
<br>
Sintaxe
explode(string $delimiter, string $string, int $limit = PHP_INT_MAX): array
<br>
$delimiter: O caractere ou string usada para dividir.
<br>
$string: A string que será dividida.
<br>
$limit (opcional): Número máximo de elementos no array resultante.
<br>
<br>
<br>

<?php
$nomes = "Ana,Bruno,Carlos,Daniela";

// Usando explode para separar os nomes
$nomesArray = explode(",", $nomes);

// Exibindo o array resultante
print_r($nomesArray);
?>


