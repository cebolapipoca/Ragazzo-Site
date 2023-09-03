<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles/admin.css">
    <link rel="stylesheet" href="styles/reset.css">
</head>
<body>

    <?php 
        
     $conexao = mysqli_connect('localhost', 'root', '', 'ragazzo', '3306');

        $NomeProduto = $_POST["NomeProduto"]?? "";
        $PrecoProduto = $_POST["PrecoProduto"]?? "";
        $CategoriaProduto = $_POST["CategoriaProduto"]?? "";
        $InputEscolher = $_POST["EscolhaInput"]?? "";
        $ImagemProduto = $_FILES['ImagemProduto']?? "";

        $ImagemName = $ImagemProduto['name']?? "";
       
        if($_POST)
        {
            
            mysqli_query($conexao, "INSERT INTO produtos(Nome, Categoria, preco, destaque, imagem) VALUES('$NomeProduto', '$CategoriaProduto', '$PrecoProduto' , '$InputEscolher', '$ImagemName')");

            move_uploaded_file($ImagemProduto['tmp_name'], 'imagens/produtos/' . $ImagemProduto['name']) ;
        }
        
    ?>


    <h1>Ragazzo Admin</h1>

    <form action="<?php $_SERVER["PHP_SELF"] ?>" class="form" method="post" enctype="multipart/form-data">
        <fieldset class="fieldset">
            <h1>Cadastrar Produtos</h1>

            <div class="form-fieldset-div1">
                <input type="text" name="NomeProduto" id="NomeProduto" placeholder="Nome do Produto">
                <input type="text" name="PrecoProduto" id="PrecoProduto" placeholder="Preço">
             </div>

             <select name="CategoriaProduto" id="CategoriaProduto">
                <option value="Selecionar Categoria">Selecionar Categoria</option>
                <option value="frete gratis">frete gratis</option>
                <option value="combos">combos</option>
                <option value="pizzas">pizzas</option>
                <option value="massas">massas</option>
                <option value="pratos">pratos</option>
                <option value="coxinhas">coxinhas</option>
                <option value="salgados">salgados</option>
                <option value="sobremesas">sobremesas</option>
                <option value="bebidas">bebidas</option>
                <option value="kit ragazzo">kit ragazzo</option>
                <option value="congelados">congelados</option>
             </select>

              <div class="destacar-produto">
                <h2>aparecer na tela inicial?</h2>

                    <div>
                        <label for="">Sim</label>
                        <input type="radio" name="EscolhaInput" id="radio1" value="1">
                    </div>

                    <div>
                        <label for="">Não</label>
                        <input type="radio" name="EscolhaInput" id="radio2" value="0">
                    </div>
              </div>
              
              
              <div> <label for="">Selecionar Imagem:</label>  <input type="file" name="ImagemProduto" id="ImagemProduto1"></div>
                
              <button>Cadastrar Produto</button>
        </fieldset>
    </form>
</body>
</html>