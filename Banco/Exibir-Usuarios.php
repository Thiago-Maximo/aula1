<?php
    include("conexao.php");

    $sql = "SELECT id,nome,usuario,saldo FROM contas";
    $dados = $Mysql->query($sql);

    echo"<table><tr><th>ID</th><th>Nome</th><th>Usuario</th><th>saldo</th></tr>";
    while($row = $dados-> fetch_assoc()){
        echo"<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["usuario"]."</td><td>".$row["saldo"]."</td></tr>";
    }
?>
<html>
    <body>
    <a href="Form.php">Voltar ao Formulario</a>
    </body>
</html>