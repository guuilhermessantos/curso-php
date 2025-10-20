<?php

// ===== VARIÁVEIS =====
$nome = "João";
$idade = 25;


// \n é um caractere de nova linha.
// Exibir dados
echo "Olá, $nome!\n";
echo "Você tem $idade anos.\n\n";

// ===== CONDICIONAIS =====
if ($idade >= 18) {
    echo "Você é maior de idade\n\n";
} else {
    echo "Você é menor de idade\n\n";
}

// ===== ARRAYS =====
$frutas = ["maçã", "banana", "laranja"];
echo "Lista de frutas:\n";

// Loop
foreach ($frutas as $fruta) {
    echo "- $fruta\n";
}

echo "\n";

// ===== FUNÇÕES =====
function somar($a, $b) {
    return $a + $b;
}

$resultado = somar(10, 5);
echo "10 + 5 = $resultado\n\n";

// ===== ARRAY ASSOCIATIVO =====
$pessoa = [
    "nome" => "Maria",
    "idade" => 30,
    "cidade" => "São Paulo"
];

echo "Dados da pessoa:\n";
echo "Nome: " . $pessoa["nome"] . "\n";
echo "Idade: " . $pessoa["idade"] . "\n";
echo "Cidade: " . $pessoa["cidade"] . "\n";

?>