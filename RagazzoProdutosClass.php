
<?php 

class Produto {

   private $conexao;
   private $PesquisarCategoria;
function PesquisarCategoria($NomeCategoria)
{
    $this->conexao = mysqli_connect('localhost', 'root', '', 'ragazzo', '3306');
    $this->PesquisarCategoria = mysqli_query($this->conexao, "SELECT * FROM produtos WHERE Categoria = '$NomeCategoria' ");
    return $this->PesquisarCategoria;
}
}


/*$novoProduto = new Produto();

    foreach($novoProduto->PesquisarCategoria('coxinhas') as $Produto)
    {
        echo $Produto['Nome'];
        echo $Produto['preco'];
    }*/


    


?>

