<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragazzo</title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>

    <?php 
        $a = 1;
        $b = 1;
        $c = 1;

        $Produtos = [
            
            $Produto = 
            [
                'nome' => "MENU INDIVIDUAL 1 - ENTRADA + PRATO + BEBIDA",
                'preco' => "39,90",
                'imagem' => "imagens/produtos/produto1.png"
            ],

            $Produto = 
            [
                'nome' => "MENU INDIVIDUAL 2 - ENTRADA + PRATO + BEBIDA",
                'preco' => "49,90",
                'imagem' => "imagens/produtos/produto2.png"
            ],

            $Produto = 
            [
                'nome' => "MENU INDIVIDUAL 3 - ENTRADA + PRATO + BEBIDA",
                'preco' => "59,90",
                'imagem' => "imagens/produtos/produto3.png"
            ],

            $Produto = 
            [
                'nome' => "COXINHA DE FRANGO COM CREMELY",
                'preco' => "3,49",
                'imagem' => "imagens/produtos/produto4.png"
            ],

            $Produto = 
            [
                'nome' => "COXINHA DE CALABRESA",
                'preco' => "3,49",
                'imagem' => "imagens/produtos/produto5.png"
            ],

            $Produto = 
            [
                'nome' => "COXINHA DE 4 QUEIJOS",
                'preco' => "3,49",
                'imagem' => "imagens/produtos/produto6.png"
            ],

            $Produto = 
            [
                'nome' => "60 COXINHAS CLÁSSICAS",
                'preco' => "119,90",
                'imagem' => "imagens/produtos/produto7.png"
            ],

            $Produto = 
            [
                'nome' => "40 COXINHAS CLÁSSICAS",
                'preco' => "87,90",
                'imagem' => "imagens/produtos/produto8.png"
            ],

            $Produto = 
            [
                'nome' => "20 COXINHAS CLÁSSICAS",
                'preco' => "43,90",
                'imagem' => "imagens/produtos/produto9.png"
            ],

            $Produto = 
            [
                'nome' => "10 COXINHAS CLÁSSICAS",
                'preco' => "26,90",
                'imagem' => "imagens/produtos/produto10.png"
            ],

            $Produto = 
            [
                'nome' => "100 MINICOXINHAS CLÁSSICAS",
                'preco' => "89",
                'imagem' => "imagens/produtos/produto11.png"
            ],

            $Produto = 
            [
                'nome' => "50 MINICOXINHAS CLÁSSICAS",
                'preco' => "44,90",
                'imagem' => "imagens/produtos/produto12.png"
            ],

            $Produto = 
            [
                'nome' => "25 MINICOXINHAS CLÁSSICAS",
                'preco' => "26,90",
                'imagem' => "imagens/produtos/produto13.png"
            ],

            $Produto = 
            [
                'nome' => "MINICHURROS DE DOCE DE LEITE",
                'preco' => "1,98",
                'imagem' => "imagens/produtos/produto14.png"
            ],

            $Produto = 
            [
                'nome' => "SUCO DE LIMÃO 300ML",
                'preco' => "9,90",
                'imagem' => "imagens/produtos/produto15.png"
            ],

            $Produto = 
            [
                'nome' => "SUCO DE MORANGO 300ML",
                'preco' => "9,90",
                'imagem' => "imagens/produtos/produto16.png"
            ],

            $Produto = 
            [
                'nome' => "SUCO DE MARACUJÁ 300ML",
                'preco' => "9,90",
                'imagem' => "imagens/produtos/produto17.png"
            ],

            $Produto = 
            [
                'nome' => "SUCO DE LARANJA 1L",
                'preco' => "17,90",
                'imagem' => "imagens/produtos/produto18.png"
            ],
        ];
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

    <div class="ragazzo-slide-carrossel">
        <picture>
        <source media="(min-width: 800px )" srcset="imagens/Ragazzo_slide1_1024.png">
        <img src="imagens/Ragazzo_slide1.png" alt="" srcset="" >
        </picture>

      
        <picture>

        </picture>


        <picture>

        </picture>


        <picture>

        </picture>
    </div>

    <aside>
        <li class="verde">frete grátis</li>
        <li class="vermelho">combos</li>
        <li class="amarelo">pizzas</li>
        <li class="verde">massas</li>
        <li class="vermelho">pratos</li>
        <li class="amarelo">coxinhas</li>
        <li class="verde">salgados</li>
        <li class="vermelho">sobremesas</li>
        <li class="amarelo">bebidas</li>
        <li class="verde">kit ragazzo</li>
        <li class="vermelho">congelados</li>
    </aside>

    
    <main>
    <?php foreach ($Produtos as $Produto) { ?>
        <div class="produto">
                <div class="produto-text1024">
                    <h2><?php echo $Produto['nome']?></h2>
                     <div class="produto-text1024-preco">
                        <h3>R$</h3>
                        <h1><?php echo $Produto['preco']?></h1>
                     </div>
                </div>

                <div class="produto-modal">
                    <div class="produto-modal-text1">
                        <h3><?php echo $Produto['nome']?></h3>
                    </div>

                    <button>VERIFICAR DISPONIBILIDADE</button>

                    <div class="produto-modal-preco">
                        <h3>Total:</h3>
                        <h2>R$</h2>
                        <h1><strong><?php echo $Produto['preco']?></strong></h1>
                    </div>
                </div>

                <div class="heart-icon">
                        <img src="imagens/coracaonew.png" id="<?php echo 'imagemCoracao' . $b++ ?>"  onmouseout="RetirarHoverCoracao(<?php echo 'imagemCoracao' . $c++ ?>)" alt="" onmouseover="HoverCoracao(<?php echo 'imagemCoracao' . $a++ ?>)">
                </div>


            <div class="produto-imagem">
                <div class="produto-imagem-texto">
                    <h3><?php echo $Produto['nome']?></h3>
                    <div class="preco"><h2><?php echo 'R$ ' . $Produto['preco']?></h2></div>
                </div>
                <img src="<?php echo $Produto['imagem']?>" alt="">
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

        <script src="index.js"></script>
</body>
</html>

