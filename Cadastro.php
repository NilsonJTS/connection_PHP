<?php
    //Ao usar o include abaixo, com o nome do arquivo de conexão, eu agora tenho toda a conexão
    //já importada para dentro deste arquivo, por isso é importante aquele arquivo.

    include("connection.php");

    
    //a partir de agora faremos variáveis para receberem o conteúdo de cada campo do form
    //usando o metodo post. IMPORTANTE, observe que ele recebe dentro do colchete com aspas simples
    //o conteúdo do name="" de cada input. $_post[] é a forma de receber do form front-end no back-end

    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $senha=md5($_POST['senha']); //md5() é uma encriptografia básica



    //Abaixo o insert padrão sql, com as var de cima, que receberam os valores vindos dos isput´s html
    //IMPORTANTE: as variáveis estão entre aspas simples (aspas simples foram necessárias, porque as duplas já
    //estão sendo usadas para conter todo o insert), isso é porque todos os campos são varchar, se
    //fossem int ou float, não precisariam.

    $sql="INSERT INTO cadastro(Nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";


    //Abaixo uma condição que mostra se foi cadastrado, e no caso de não cadastrar ele mostra o erro que 
    //ocorreu

    if (mysqli_query($conexao, $sql)){
        echo"Usuário cadastrado com sucesso!";
    }else{
        echo"Erro".mysqli_connect_error($connection);
    }
    

    //depois de tudo feito, é necessário fechar a conexão para não correr o risco de ficar travando o db
    mysqli_close($conexao);
?>