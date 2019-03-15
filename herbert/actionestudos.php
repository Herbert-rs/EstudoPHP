<?php
include_once "getset.php";
include_once "Conexaobd.php";
include_once  "ifelse.php";
include_once  "dowhile.php";
include_once  "switch.php";


$get = new estudos ($name,$email,$idade);

try {
    $stmt= mysqli_prepare ($conn,  "INSERT INTO Estudandophp(NOME, EMAIL ,idade) VALUES (?,?,?)");
    mysqli_stmt_bind_param($stmt,'ssi',$get->getName(),$get->getEmail(),$get->getIdade()) ;
    mysqli_stmt_execute($stmt);
    echo" Cadastrado com Sucesso";
    checkidade($get->getIdade());
    $n1 =3;
    $n2 =2;
    $s = $n1 + $n2;
    $m = $s /2;
    $num =0;

    echo "<br> O resultado de $n1 + $n2 e igual a $s </br>";
    echo "<br>o Resultado de $n1 + $n2 é igual a : </br>". ($n1 + $n2);
    echo "<br>o Resultado de $n1 - $n2 é igual a : </br>". ($n1 - $n2);
    echo "<br>o Resultado de $n1 / $n2 é igual a : </br>". ($n1 / $n2);
    echo "<br>o Resultado de $n1 * $n2 é igual a : </br>". ($n1 * $n2);
    echo "<br>o Resultado de $n1 % $n2 é igual a : </br>". ($n1 % $n2);
    echo "<br> A média de $n1 + $n2 é igual a : $m </br>";

    echo "<br>Diferente</br>";
    var_dump(10 != 10);
    var_dump(10 == 10) ;

    echo "<br>Indentico</br>";
    var_dump(10===10);;
    var_dump(10 === "10");
    var_dump(10 !==10);

    echo "<br>menor ou maior </br>";
    var_dump(10 < 10);
    var_dump(10 > 11);
    var_dump(10 >= 11);

    if (($num >10)&&($num <100) ){

        echo "<br>valor correto </br>";
    }

    else
    {
        echo "<br> Valor incorreto</br>";
    }
    //laço de repeticão
    do {
        $num = $num +1;
        echo $num . "<br>";
    } while ($num <=10);


    //instrunção continue
    for ($i=0; $i<100 ; $i++){
        if($i % 2 ==1){
            continue;
        }
            echo $i . "<br>";
    }

    //Estrutura de seleção múltipla switch

    switch ($num) {

        case 1:
            echo "<br>o valor é igual a 1</br>";
            break;
        case 2:
            echo "o valor é igual a 2";
            break;
        default:
            echo "Estrutura default executada<br>";
    }


    // Constantes

    define ("TESTE",10);
    echo TESTE . "<br>"  ;

    for ($x =0; $x<5 ; $x ++)
        define("CONSTANTES" . $x , $x);

    echo CONSATENTE0 . "<br>";
    echo CONSATENTE4 . "<br>";

    // Variavel VAriavel

    $varvar = "teste";
    $$varvar = 10;
    echo $varvar ." " . $$varvar;


}catch(Exception $e){
    echo "erro";
}




?>

