<?php

// ===== VARIÁVEIS ===== pode ser modificada
$nome = "João";
$idade = 25;



// Exibir dados
echo "Olá, $nome!\n";
echo "Você tem $idade anos.\n\n";

// ===== CONSTANTES =====
// Em PHP, constantes são declaradas com 'const', diferente do JavaScript que usa 'const' para variáveis constantes.
// Em PHP:
const NOME = "João";
const IDADE = 25;

// Em JavaScript seria:
// const NOME = "João";
// const IDADE = 25;

// Ou seja, a sintaxe é parecida, mas em PHP elas são realmente constantes, enquanto no JS é uma variável cujo valor não pode ser alterado.

echo "Olá, $NOME!\n";
echo "Você tem $IDADE anos.\n\n";