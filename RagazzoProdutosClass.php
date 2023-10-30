
<?php 

class Produto {

   private $conexao;
   private $PesquisarCategoria;

   private $PesquisarDestaque;
    function PesquisarCategoria($NomeCategoria)
    {
        $this->conexao = mysqli_connect('localhost', 'root', '', 'ragazzo', '3306');
        $this->PesquisarCategoria = mysqli_query($this->conexao, "SELECT * FROM produtos WHERE Categoria = '$NomeCategoria' ");
        return $this->PesquisarCategoria;
    }

    function RetornarDestaque()
    {
        $this->conexao = mysqli_connect('localhost', 'root', '', 'ragazzo', '3306'); 
        $this->PesquisarDestaque = mysqli_query($this->conexao, "SELECT * FROM produtos WHERE destaque = '1' ");
        return $this->PesquisarDestaque;
    }
}



    /*$novoProduto = new Produto();


   foreach ($novoProduto->RetornarDestaque() as $Produto)
   {
    echo $Produto['Nome'] . "<br>";
   }*/


    


?>

