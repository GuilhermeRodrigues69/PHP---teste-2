<?php
    function calcularMedia ($nota1, $nota2, $nota3){
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return "A média é:" . $media;
    }
    echo calcularMedia ("5", "5", "5");
?>