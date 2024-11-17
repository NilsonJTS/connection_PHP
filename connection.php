<?php
    //Para conectar com o db é necessário ter 4 informações, que são as que se apresentam abaixo
    //Observe que foram declaradas 4 variáveis, para que cada uma contanha as ifo necess. p acess o db

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbName="cadastro";


    //Abaixo vemos uma declaração chamada conexao, recebendo metodo mysqli_connect(), este é o metodo
    //padrão do php para acessar o db. colocaremos as var como argumentos, e isto é a conexão.
    //pq isto é necess? Vamos usar a var conexao para acessar constantemente o db em qq lugar
    //do site, de outra forma teríamos que escrever tudo em cada pg, o pior seria fazermos uma manutenção
    //para mudar um dado da conexao, teríamos que correr pg a pg e mudar. 

    $conexao=mysqli_connect($servidor,$usuario,$senha,$dbName);

    //Abaixo vemos uma condição que, ao detectar que não houve conexão, informa a msg "Houve um erro"
    //e concatena com um metodo de msg de erro do próprio sistema php, chamado "mysqli_connect_error()"

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }

?>