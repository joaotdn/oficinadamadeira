<!doctype html>
<?php
  function randomImagesHeader() {
    $arr = array('bg-top-1.jpg','bg-top-2.jpg');
    shuffle($arr);
    define(CZDIR, 'images/'. $arr[0]);
    echo 'background-image: url('. CZDIR .');';
  }
?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
    <title>Officina da Madeira</title>
    <link rel="stylesheet" href="style.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.1/modernizr.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jpreloader.js"></script>
    
  </head>
  <body>
    <div class="row rel">
      <div class="circle-red small-12 abs wow fadeIn" data-wow-duration="2s" data-wow-delay="1s"></div>

      <header class="small-12 left rel inset-header">
        
        <div class="circle-photo small-9 abs" style="<?php randomImagesHeader(); ?>"></div>

        <a href="index.php" class="small-3 columns inset-logo display-block wow fadeInDown" data-wow-duration="2s">
          <div class="icon-logo centered"></div>
        </a>

        <h1 class="this-page left small-push-1 text-upp white century-gothic-bold wow slideInDown" data-wow-duration="2s" data-wow-delay="0.3s">/Empresa</h1>

        <div class="inset-menu small-8 small-push-1 left wow slideInDown" data-wow-duration="2s" data-wow-delay="0.3s">
          <div class="icon-bgmenu abs"></div>
          <ul class="inline-list small-12 left">
            <li><a href="index.php" class="text-upp">Home</a></li>
            <li><a href="#" class="text-upp">Show Room Digital</a></li>
            <li><a href="#" class="text-upp">Informações Técnicas</a></li>
            <li><a href="#" class="text-upp">Clientes</a></li>
            <li><a href="#" class="text-upp">Contato</a></li>
          </ul>
        </div>
      </header>

      <div id="wrapper" class="small-12 left page-about">
        
        <figure class="small-12 columns about-video rel wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
          <a href="#" class="display-block left play-video">
            <span class="icon-play display-block"></span>
          </a>
        </figure><!-- //video da empresa -->

      </div>

      <footer id="footer" class="small-12 columns wow fadeInUp" data-wow-duration="2s">

        <figure class="logo-footer small-3 left">
          <a href="#" class="display-block left small-12" title="Página principal">
            <div class="icon-logofooter centered"></div>
          </a>

          <figcaption class="left small-12 text-center address">
            <p>Rua Antônio Francisco de Araújo, 289</p>
            <p>Cabedelo - PB - Brasil</p>
            <p>CEP 58052-230</p>
            <p class="email">info@officinamadeira.com.br</p>
            <p class="tel">+55 83 3246 1446</p>
            <p class="tel">+55 83 9893 8383</p>
          </figcaption>
        </figure>

        <nav class="menu-footer small-9 left">
          <ul class="inline-list small-12 left">
            <li><a href="page-empresa.php" class="" title="Empresa">Empresa</a>
              <ul class="inline-list small-12 left sub-menu">
                <li><a href="page-empresa.php" class="">Quem Somos</a></li>
                <li><a href="#" class="">Equipe</a></li>
              </ul>
            </li>
            <li><a href="#" class="" title="Show Room Digital">Show Room Digital</a>
              <ul class="inline-list small-12 left sub-menu">
                <li><a href="#" class="">Residências</a></li>
                <li><a href="#" class="">Kit Porta Pronta</a></li>
                <li><a href="#" class="">Áreas Externas</a></li>
                <li><a href="#" class="">Portas de Entrada</a></li>
                <li><a href="#" class="">Produto Popular</a></li>
                <li><a href="#" class="">Ferragens</a></li>
              </ul>
            </li>
            <li><a href="#" class="" title="Informações Técnicas">Informações Técnicas</a>
              <ul class="inline-list small-12 left sub-menu">
                <li><a href="#" class="">Madeira</a></li>
                <li><a href="#" class="">Armazenamento</a></li>
                <li><a href="#" class="">Produtos</a></li>
              </ul>
            </li>
            <li><a href="#" class="" title="Clientes">Clientes</a></li>
            <li><a href="#" class="" title="Contato">Contato</a></li>
          </ul>
        </nav>
      </footer><!-- //footer -->
    </div><!-- //row -->
    <!-- preloading -->
    <div id="jpreContent">
      <div class="icon-loading"></div>
    </div>
    <script src="js/scripts.js"></script>
  </body>
</html>
