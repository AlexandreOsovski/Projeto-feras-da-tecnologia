<?php
        $cliente['nome'] = 'Alexandre';
		$cliente['genero'] = 'masculino';
		$cliente['celular'] = '99 99999999';
		$cliente['email'] = 'alexandreosovski.contato@gmail.com';
		$cliente[] = $cliente;

        $cliente['nome'] = 'André';
		$cliente['genero'] = 'masculino';
		$cliente['celular'] = '88 888888888';
		$cliente['email'] = 'andre@gmail.com';
		$cliente[] = $cliente;

        $cliente['nome'] = 'meudeus';
		$cliente['genero'] = 'feminino';
		$cliente['celular'] = '77 777777777';
		$cliente['email'] = 'meudeus@gmail.com';
		$cliente[] = $cliente;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../cadastro.php" method="post"> 
<table width="100%">
    <thead>
        <tr>
            <td>Nome</td>
            <td>Gênero</td>
            <td>celular</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $cliente[0]['nome']; ?> </td>
            <td> <?php echo $cliente[0]['genero']; ?> </td>
            <td> <?php echo $cliente[0]['celular']; ?> </td>
            <td> <?php echo $cliente[0]['email']; ?> </td>
        </tr>
        <tr>
            <td> <?php echo $cliente[1]['nome']; ?> </td>
            <td> <?php echo $cliente[1]['genero']; ?> </td>
            <td> <?php echo $cliente[1]['celular']; ?> </td>
            <td> <?php echo $cliente[1]['email']; ?> </td>
        </tr>
        <tr>
            <td> <?php echo $cliente[2]['nome']; ?> </td>
            <td> <?php echo $cliente[2]['genero']; ?> </td>
            <td> <?php echo $cliente[2]['celular']; ?> </td>
            <td> <?php echo $cliente[2]['email']; ?> </td>
        </tr>
    </tbody>
</table>
</form>
<form action="/html_com_php/cadastro.php" method="post">

<input type="text" placeholder="email" name="email" >
    <input type="password" placeholder="senha" name="senha">
    <input type="submit" name="enviar">
</form>
    


 
</body>
</html>

<?php
for ($i=0; $i < 10 ; $i++) { 
    echo $i;
    echo '<br/>';
}
?>
