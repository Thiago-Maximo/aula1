<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include ("conexao.php");

    $gemail = $_GET['email'];
    var_dump($gemail);
    if(!empty($_GET['email'])){
        $query ='SELECT * FROM usuario WHERE email ='. "'$gemail'";
        $retorno = $conexao-> query($query);
        $dados = $retorno-> fetchAll(PDO::FETCH_ASSOC);

        foreach($dados as $dado){
            $nome = $dado ['nome'];
            $email = $dado ['email'];
            $senha = $dado ['senha'];
        }
    }else{
        $gemail ="";
        $nome = "";
        $email = "";
        $senha = "";
        $emailantigo = "";
    }
?>
    <form action="update.php" method="POST" id="formulario">
    <input type ='hidden' value='' name='id'>
    Nome: <input type ='text'  name='nome' value = "<?php echo $nome;?>"><br>
    Email: <input type ='text'  name='email' value = "<?php echo $email;?>"><br>>
    Senha: <input type ='text'  name='senha' value = "<?php echo $senha;?>"><br>>
    <input type ='hidden'  name='emailantigo' value = "<?php echo $email;?>"><br>>
    <input type ='submit' value='Alterar' name='Alterar'>
</form>
</body>
</html>