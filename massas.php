<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragazzo</title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/ProdutoPrincipal.css">
</head>
<body>

    <?php 
       
       include_once "RagazzoProdutosClass.php";
       
        $novoProduto = new Produto();

        $CategoriaProduto = $novoProduto->PesquisarCategoria('massas')

    ?>
    
    <menu>
        <div class="menu-user">
            <img src="" alt="">
            
            <div>
                <h1>Olá, Visitante</h1>
                 <h2>faça login ou cadastre-se</h2>
            </div>
        </div>

        <nav>
            <li>CARDÁPIO</li>
            <li>PROMOÇÕES NO PRECINHO</li>
            <li>ACOMPANHA SEU PEDIDO</li>
            <li>CONHEÇA O RAGAZZO</li>
            <li>SAC RAGAZZO (SAC)</li>
            <li>TRABALHE NO RAGAZZO</li>
            <li>ENCONTRE SEU RAGAZZO</li>
            <li>TENHA O SEU PRÓPRIO RAGAZZO</li>
            <li>FAÇA SUA FESTA NO RAGAZZO</li>
            <li>REPLAY RAGAZZO</li>
            <li>REPLAY RAGAZZO - TERMOS E CONDIÇÕES</li>
            <li>REGULAMENTO - PEDE PRONTO RAGAZZO</li>
            <li>REGULAMENTO - PEDE PRONTO RAGAZZO EXPRESS</li>
            <li>REGULAMENTO - PEDE PRONTO SEMANA DA PIZZA</li>
        </nav>

        <div class="menu-termos">
            <h3>REGRAS DO DELIVERY</h3>
            <h3>TERMOS DE USO E POLÍTICAS DE PRIVACIDADE</h3>
            <h3>TERMOS E CONDIÇÕES</h3>
        </div>
    </menu>

    <header>
        <div class="header-content" id="content-menu-titulo">
            <div class="ragazzo-header-menu">
                <div class="barra1"></div>
                <div class="barra2"></div>
                <div class="barra3"></div>
            </div>

            <img src="imagens/ragazzo_logo.png" alt="" class="ragazzo-titulo">
        </div>
        
        <div class="header-content" id="content-icons">
            <img src="imagens/ragazzo_lupa.png" alt="" class="icon">
            <img src="imagens/ragazzo_login.png" alt="" class="icon">
            <img src="imagens/ragazzo_carrinho.png" alt="" class="icon">
        </div>
    </header>

    <aside>
        <a href="fretegratis.php"><li class="verde">frete grátis</li></a>
        <a href="combos.php"><li class="vermelho">combos</li></a>
        <a href="pizzas.php"><li class="amarelo">pizzas</li></a>
        <a href="massas.php"><li class="verde">massas</li></a>
        <a href="pratos.php"><li class="vermelho">pratos</li></a>
        <a href="coxinhas.php"><li class="amarelo">coxinhas</li></a>
        <a href="salgados.php"><li class="verde">salgados</li></a>
        <a href="sobremesas.php"><li class="vermelho">sobremesas</li></a>
        <a href="bebidas.php"><li class="amarelo">bebidas</li></a>
        <a href="kit_ragazzo.php"><li class="verde">kit ragazzo</li></a>
        <a href="congelados.php"><li class="vermelho">congelados</li></a>
    </aside>

    <div class="sessao-titulo">
            <h2><a href="">Página Inicial/</a>Frete Grátis</h2>

            <div><h1><a>Experimente</a> nossos produtos com frete grátis</h1></div>
        </div>
    
    <main>
    <?php foreach ( $CategoriaProduto as $Produto) { ?>
        <div class="produto">
                <div class="produto-text1024">
                    <h2><?php echo $Produto['Nome']?></h2>
                     <div class="produto-text1024-preco">
                        <h3>R$</h3>
                        <h1><?php echo $Produto['preco']?></h1>
                     </div>
                </div>

                <div class="produto-modal">
                    <div class="produto-modal-text1">
                        <h3><?php echo $Produto['Nome']?></h3>
                    </div>

                    <button>VERIFICAR DISPONIBILIDADE</button>

                    <div class="produto-modal-preco">
                        <h3>Total:</h3>
                        <h2>R$</h2>
                        <h1><strong><?php echo $Produto['preco']?></strong></h1>
                    </div>
                </div>

                


            <div class="produto-imagem">
                <div class="produto-imagem-texto">
                    <h3><?php echo $Produto['Nome']?></h3>
                    <div class="preco"><h2><?php echo 'R$ ' . $Produto['preco']?></h2></div>
                </div>
                <img src="<?php echo 'imagens/produtos/' . $Produto['imagem']?>" alt="">
            </div>

            <div class="produto-verificar">
                <button class="">VERIFICAR DISPONIBILIDADE</button>
                <div class="produto-verificar-preco"><h2>TOTAl: <h1><?php echo $Produto['preco']?></h1</h2></div>
            </div>
        </div> 
        <?php } ?>
    </main>
    

<footer>
        <div class="footer-content1">
            <div class="footer-content1-text">
                <h3>Fique por dentro</h3>
                <h4>receba lançamentos e promoções</h4>
            </div>

            <div class="footer-input">
                <input type="email" name="" id="" >
                <button>me cadastre!</button>
            </div>

            <div class="footer-content1-text">
                <h2>Siga o Ragazzo</h2>

                <div class="footer-icons" >
                    <img src="imagens/2959749_facebook_icon.png" alt="">
                    <img src="imagens/2959740_bird_news_tweet_twitter_icon.png" alt="">
                    <img src="imagens/2959742_broadcast_google_streaming_video_youtube_icon.png" alt="">
                    <img src="imagens/2959747_employment_business_linkedin_work_icon.png" alt="">
                    <img src="imagens/2959748_instagram_photo_share_icon.png" alt="">
                    <img src="imagens/whatsapp icon.png" alt="">
                </div>
            </div>
        </div>
</footer>

    <div class="footer-content2">
        <h2>Fale com nossa central de atendimento, deixe sua opinião
            e tire dúvidas de um jeito mais simples e rápido:
        </h2>

        <div class="footer-content2-atendimento">
            <div class="atendimento-capitais">
                <h3>Capitais</h3>
                <h1>  5698 8000</h1>
            </div>

            <div class="atendimento-outros">
                <h3>Demais Localidades</h3>
                <h1>4003 9093</h1>
            </div>
        </div>
    </div>

    <footer class="footer_desktop">
        <div class="footer_desktop_content1">
            <h2>Fale com nossa central de atendimento, deixe sua opinião
                e tire dúvidas de um jeito mais simples e rápido:
            </h2>

            <div class="footer_desktop_atendimento">
                <div class="footer_desktop_atendimento_phone" id="capitais">
                    <h2>Capitais</h2>
                    <h3>5698 8000</h3>
                </div>

                <div class="footer_desktop_atendimento_phone">
                    <h2 class="DemaisLocalidades">Demais Localidades</h2>
                    <h3>40003 9093</h3>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer_desktop_content2"> 
        <ul class="footer_desktop_box1">

            <nav>
                <div><h1>Produtos</h1></div>
                    <li>Frete Grátis</li>
                    <li>Combos</li>
                    <li>Pizzas</li>
                    <li>Massas</li>
                    <li>Pratos</li>
                    <li>Coxinhas</li>
                    <li>Salgados</li>
                    <li>Sobremesas</li>
                    <li>Bebidas</li>
                    <li>Kit Ragazzo</li>
            </nav>
        </ul>

        <ul class="footer_desktop_box2">
        <nav>
        <div class="titulo-2"><h1>O Ragazzo</h1></div>
            <li>SAC RAGAZZO(SAC)</li>
            <li>Regras do Delivery</li>
            <li>termos de uso e políticas de privacidade</li>
            <li>Termos e condições</li>
            <li>Tablea Nutricional Ragazzo</li>
            <li>Tabela de Alergênicos Ragazzo</li>
            <li>Tabela Nutricional Ragazzo Express</li>
            <li>Tabela de Alergênicos Ragazzo Express</li>
            <li>Faça sua festa no Ragazzo</li>
        </nav>
        </ul>
        
        <div class="footer_desktop_content2_email">
            <h1>Fique por dentro</h1>
            <h2>receba lançamentos e promoções</h2>
             <div class="input_footer_destktop"><input type="email" name="" id="" placeholder="email"> <button>me cadastre!</button></div>

             <div class="footer_desktop_redesSociais">
                <h3>Siga o Ragazzo</h3>

                <div class="desktop_redesSociais_icons">
                    <img src="imagens/facebookIcon.svg.svg" alt="">
                    <img src="imagens/TwitterIcon.svg" alt="">
                    <img src="imagens/YoutubeIcon.svg" alt="">
                    <img src="imagens/LinkedinIcon.svg" alt="">
                    <img src="imagens/InstagramIcon.svg" alt="">
                    <img src="imagens/WhatsappIcon.svg" alt="">
                </div>
             </div>
        </div>
    </div>

        
</body>
</html>

