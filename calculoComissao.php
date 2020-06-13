<?php
function comDiretor($salario){
    $bonus = $salario * 0.2;
    return $bonus;
}
function comFuncionario($salario){
   $bonus = $salario * 0.1;
   return $bonus;
}
function comEstagiario($salario){
    $bonus = $salario * 0.05;
    return $bonus;
}

 $funcionarios = [
    0 => $dados = [
        "nome" => "José",
        "cargo" => "Diretor",
        "salario" => 20000,
    ],
    1 => $dados = [
        "nome" => "Tadeu",
        "cargo" => "Funcionário",
        "salario" => 7000,
    ],
    2 => $dados = [
        "nome" => "Carlos",
        "cargo" => "Estagiario",
        "salario" => 2000,
    ],
];

foreach ($funcionarios as $key => $value) {
    if($funcionarios[$key]["cargo"] == "Diretor"){
        echo $funcionarios[$key]["nome"] . " recebe R$" . comDiretor($funcionarios[$key]["salario"]) . " de bônus";
        echo "<br>";
    }elseif($funcionarios[$key]["cargo"] == "Funcionário"){
        echo $funcionarios[$key]["nome"] . " recebe R$" . comFuncionario($funcionarios[$key]["salario"]) . " de bônus";
        echo "<br>";
    }else{
        echo $funcionarios[$key]["nome"] . " recebe R$" . comEstagiario($funcionarios[$key]["salario"]) . " de bônus";
        echo "<br>";
    }
}