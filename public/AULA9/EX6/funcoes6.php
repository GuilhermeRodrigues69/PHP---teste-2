<?php
function calcularMedia($n1, $n2, $n3)
{
    $media = ($n1 + $n2 + $n3) / 3;
}
function verificarSituacao($media, $nome)
{
    $nome = "Guilherme";
    if ($media >= 7) {
        echo "$nome você foi aprovado com a média: $media";
    } else {
        echo "$nome você foi reprovado com a média: $media";
    }
}
verificarSituacao("1", "1", "1");