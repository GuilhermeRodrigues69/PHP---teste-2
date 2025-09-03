<?php
    $alunos = [
        ['Ana', 10],
        ['Manu', 9],
        ['Duda', 4],
        ['Sofy', 7],
    ];
        foreach($alunos as $aluno){
            if($aluno >= 7 ){
                echo "$aluno APROVADO";
            }else{
                echo "$aluno REPROVADO";
            }
        }
?>