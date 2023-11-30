<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Página Inicial</h1>
    <?php
    $nome = $_POST["nome"];
    echo "<br>";
    $senha = $_POST["senha"];
    
    if($nome == "duda" and $senha =="123"){
       header("Location:" ."trabalhorestri.php");
    }elseif($nome=="bernardo" and $senha=="125"){
    header("Location:" ."trabalhoin.php");
    }else
      header("Location:" ."trabalhoco.php")


    ?>
    
</body>
</html>