<?php
// ===== TIPOS DE DADOS =====
// Em PHP, existem vários tipos de dados.
// - String
// - Integer
// - Float
// - Boolean
// - Array
// - Object
// - Null
// - Resource
// - Callback
// - Callable
// - Iterable
// - Void

// ===== STRING =====
$nome = "João";
echo "Olá, $nome!\n";

// ===== INTEGER =====
$idade = 25;
echo "Você tem $idade anos.\n";

// ===== FLOAT =====
$altura = 1.75;
echo "Você tem $altura metros de altura.\n";

// ===== BOOLEAN =====
$maiorDeIdade = true;
echo "Você é maior de idade: $maiorDeIdade\n";

// ===== ARRAY =====
$frutas = ["maçã", "banana", "laranja"];
echo "Lista de frutas:\n";
foreach ($frutas as $fruta) {
    echo "- $fruta\n";
}

// ===== OBJECT =====
$pessoa = new stdClass();
$pessoa->nome = "João";
$pessoa->idade = 25;
echo "Nome: " . $pessoa->nome . "\n";
echo "Idade: " . $pessoa->idade . "\n";

// ===== NULL =====
$nome = null;
echo "Nome: $nome\n";

// ===== RESOURCE =====
$arquivo = fopen("arquivo.txt", "r");
echo "Arquivo: " . $arquivo . "\n";

// ===== CALLBACK =====
$callback = function() {
    echo "Callback executada.\n";
};
$callback();

// ===== CALLABLE =====
$callable = function() {
    echo "Callable executado.\n";
};
$callable();

?>