COMO SE CONECTAR NO BANCO DE DADOS

<?php

$db = new mysqli('localhost, 'root, '979899' padaria');

ou

define('localhost', 'seu ip');
define('usuario' , 'alexandre');
define('senha', '979899');
define('dataBase', 'o nome da sua dataBase');

$database = mysqli_conect(localhost, usuario, senha, databse) or die ('não foi possivel acessar o banco de dados');
?>

VOCÊ PRECISA FAZER 4 COISAS NO BANCO DE DADOS
    .Buscar dados
    .Atualizar dados
    .cadastrar dados
    .excluir dados

FAZER CONSULTA
    $result = $database -> query ("select *from clientes"); 
    -> variável resultado é igual a variável database, quero que faça uma query(consulta) em ("select *from clientes);

    while($clientes = $result -> fetch_assoc()){
        print_r($clientes);
       
    }
    enquanto variável clientes é igual a varável resultado, faça uma associação e jogue pra dentro da varável clientes e depois printa o resultado.
    



TODO O PROJETO FICARÁ ASSIM:
    .INCLUIR O BANCO DE DADOS:

        define('localhost', 'seu ip');
        define('usuario' , 'alexandre');
        define('senha', '979899');
        define('dataBase', 'o nome da sua dataBase');
        
        $database = mysqli_conect(localhost, usuario, senha, databse) or die ('não foi possivel acessar o banco de dados');

FAZER CONSULTA
    $result = $database -> query ("select *from clientes"); 
    -> variável resultado é igual a variável database, quero que faça uma query(consulta) em ("select *from clientes);

    while($clientes = $result -> fetch_assoc()){
        print_r($clientes);
       
    }
    enquanto variável clientes é igual a varável resultado, faça uma associação e jogue pra dentro da varável clientes e depois printa o resultado.


FAZER A ESTRUTURA HTML DO PROJETO

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td >CÓDIGO CLIENTES </td>
            <td> NOME CLIENTES </td>
            <td> EMAIL CLIENTES </td>
        </tr>
    </table>
</body>
</html>
 

NO PHP ( ESTRUTA DE REPETIÇÃO COM WHILE )

while($clientes = $result -> fetch_assoc()){
    print_r($clientes);
        $listaClientes .= '<tr>
                                <td> .$clientes['codigo']. </td>
                                <td> .$clientes['nome']. </td>
                                <td> .$clientes['email']. </td>
                            </tr>'
       
    }

COMO GRAVAR AS INFORMAÇÕES DENTRO DO BANCO DE DADOS
    .utilizaremos o "query"

    $mysqli -> query ("insert into clientes ('código', 'nome', 'email') values("$_POST['codigo']", "$_POST['nome']" , "$_POST['email']")");


