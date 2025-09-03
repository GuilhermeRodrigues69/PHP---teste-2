<?php
$produtos = [
    ["nome" => "Feijao", "valor" => 25],
    ["nome" => "Arroz", "valor" => 20],
    ["nome" => "Macarrao", "valor" => 4],
    ["nome" => "Batata", "valor" => 5],
    ["nome" => "Alface", "valor" => 5]
];

foreach ($produtos as $produto) {
    echo "Produto: " . $produto['nome'] . " | Valor: R$ " . $produto['valor'] . "<br>";
}
?>
