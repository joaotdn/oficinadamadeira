<!doctype html>
<?php
  function randomImagesHeader() {
    $arr = array('bg-top-1.jpg','bg-top-2.jpg','bg-top-3.jpg','bg-top-4.jpg');
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
      <div class="circle-red info small-12 abs wow fadeIn" data-wow-duration="2s" data-wow-delay="1s"></div>
      <div class="circle-green-big info abs"></div>

      <header class="small-12 left rel inset-header info-header">
        
        <div class="circle-photo small-9 abs" style="<?php randomImagesHeader(); ?>"></div>
        <div class="circle-photo small-9 abs no-bg wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s"></div>

        <a href="index.php" class="small-3 columns inset-logo display-block wow fadeInDown" data-wow-duration="2s">
          <div class="icon-logo centered"></div>
        </a>

        <h1 class="this-page left small-push-1 text-upp white century-gothic-bold wow slideInDown" data-wow-duration="2s">/Informações<br>Técnicas</h1>

        <div class="inset-menu small-8 small-push-1 left wow slideInDown" data-wow-duration="2s">
          <div class="icon-bgmenu abs"></div>
          <ul class="inline-list small-12 left">
            <li><a href="index.php" class="text-upp">Home</a></li>
            <li><a href="category.php" class="text-upp">Show Room Digital</a></li>
            <li><a href="page-info.php" class="text-upp">Informações Técnicas</a></li>
            <li><a href="page-clientes.php" class="text-upp">Clientes</a></li>
            <li><a href="page-contato.php" class="text-upp">Contato</a></li>
          </ul>
        </div>
      </header>

      <div id="wrapper" class="row left page-clients rel">

        <nav class="small-12 columns menu-info wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
          <div class="black-band small-12 abs"></div>

          <ul class="inline-list rel list-options left">
            <li><a data-scroll href="#woods" class="white text-upp century-gothic-bold">Madeiras</a></li>
            <li><a data-scroll href="#tips" class="white text-upp century-gothic-bold">Dicas de armazenamento</a></li>
            <li><a data-scroll href="#products" class="white text-upp century-gothic-bold">Catalogo de produtos</a></li>
            <li><a data-scroll href="#downloads" class="white text-upp century-gothic-bold">Downloads</a></li>
          </ul>
        </nav>

        <section id="woods" class="small-12 columns">
          <header class="option-header small-12 text-center woods">
            <h1 class="century-ghotic-bold text-upp">Madeiras</h1>
          </header>

          <nav class="list-trees small-12 left wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <ul class="small-block-grid-3">
              <li>
                <figure class="small-12 left">
                  <div class="tree-thumb" style="background-image: url(images/ipe.jpg);"></div>
                  <figcaption class="small-12 left">
                    <h3 class="text-center text-upp small-12 left century-ghotic-bold">Ipê</h3>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, distinctio, sequi quia esse sed ad ducimus voluptate cupiditate ipsum tempora ipsam doloremque magnam officia quasi dolorem amet incidunt. Reprehenderit, maiores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, saepe, similique, totam aliquid officiis amet corrupti a sed dolore dolor sint ab possimus modi enim atque sequi incidunt facere reprehenderit!</p>
                  </figcaption>
                </figure>
              </li>

              <li>
                <figure class="small-12 left">
                  <div class="tree-thumb" style="background-image: url(images/jatoba.jpg);"></div>
                  <figcaption class="small-12 left">
                    <h3 class="text-center text-upp small-12 left century-ghotic-bold">Jatobá</h3>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, distinctio, sequi quia esse sed ad ducimus voluptate cupiditate ipsum tempora ipsam doloremque magnam officia quasi dolorem amet incidunt. Reprehenderit, maiores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste, corrupti praesentium amet deserunt labore officia nesciunt porro quisquam nihil laudantium hic libero consequuntur laboriosam commodi quod eius tenetur asperiores!</p>
                  </figcaption>
                </figure>
              </li>

              <li>
                <figure class="small-12 left">
                  <div class="tree-thumb" style="background-image: url(images/cumaru.jpg);"></div>
                  <figcaption class="small-12 left">
                    <h3 class="text-center text-upp small-12 left century-ghotic-bold">Cumarú</h3>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, distinctio, sequi quia esse sed ad ducimus voluptate cupiditate ipsum tempora ipsam doloremque magnam officia quasi dolorem amet incidunt. Reprehenderit, maiores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, mollitia, voluptate qui ratione perspiciatis incidunt commodi animi deleniti quisquam fugiat unde aliquid expedita libero dignissimos dolores a doloremque modi corrupti.</p>
                  </figcaption>
                </figure>
              </li>
            </ul>
          </nav>
        </section><!-- //madeiras -->
      </div>
    </div><!-- //row -->
    
    <section id="tips" class="full-width storage-tips left">
      <div class="row">
        <header class="option-header small-12 columns text-center">
            <h1 class="century-ghotic-bold text-upp">Dicas de armazenamento</h1>
        </header>

        <aside class="small-6 columns left tips-columns">
          <article class="small-12 left wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <header>
              <h1 class="red text-right">Como receber e Armazenar o Material</h1>
            </header>
            <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, natus, dolorem accusamus esse porro eaque illum aspernatur minus qui laborum. Quam, eos ipsum nemo quod magni tenetur corrupti voluptate illo.</p>
          </article>

          <article class="small-12 left wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <header>
              <h4 class="red text-right small-12 left"><span class="tip-number display-block right">1</span><span class="tip-name right">Cuidados com o manuseio</span></h4>
              <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, incidunt, minus, explicabo, obcaecati porro laboriosam quam non dolore odio ipsa voluptatibus nostrum nisi quasi nesciunt atque aspernatur quas ut perferendis.</p>
            </header>
          </article>

          <article class="small-12 left wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <header>
              <h4 class="red text-right small-12 left"><span class="tip-number display-block right">2</span><span class="tip-name right">Armazenando as caixas</span></h4>
              <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, incidunt, minus, explicabo, obcaecati porro laboriosam quam non dolore odio ipsa voluptatibus nostrum nisi quasi nesciunt atque aspernatur quas ut perferendis.</p>
            </header>
          </article>

          <article class="small-12 left wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <header>
              <h4 class="red text-right small-12 left"><span class="tip-number display-block right">3</span><span class="tip-name right">Abertura e preparo das peças</span></h4>
              <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, incidunt, minus, explicabo, obcaecati porro laboriosam quam non dolore odio ipsa voluptatibus nostrum nisi quasi nesciunt atque aspernatur quas ut perferendis.</p>
            </header>
          </article>
        </aside>

        <aside class="small-6 columns tips-columns">
          <article class="small-12 left wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <header>
              <h1 class="green">Dicas de<br>manutenção</h1>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, natus, dolorem accusamus esse porro eaque illum aspernatur minus qui laborum. Quam, eos ipsum nemo quod magni tenetur corrupti voluptate illo.</p>
          </article>
          
          <article class="small-12 left wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <header>
              <h4 class="green small-12 left">
                <span class="tip-number display-block left">1</span>
                <span class="tip-name left">Check up a cada 2 anos</span>
              </h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, incidunt, minus, explicabo, obcaecati porro laboriosam quam non dolore odio ipsa voluptatibus nostrum nisi quasi nesciunt atque aspernatur quas ut perferendis.</p>
            </header>
          </article>

          <article class="small-12 left wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <header>
              <h4 class="green small-12 left">
                <span class="tip-number display-block left">2</span>
                <span class="tip-name left">Troca de madeiras quebradas</span>
              </h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, incidunt, minus, explicabo, obcaecati porro laboriosam quam non dolore odio ipsa voluptatibus nostrum nisi quasi nesciunt atque aspernatur quas ut perferendis.</p>
            </header>
          </article>

          <article class="small-12 left wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <header>
              <h4 class="green small-12 left">
                <span class="tip-number display-block left">3</span>
                <span class="tip-name left">Manutenção das ferragens</span>
              </h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, incidunt, minus, explicabo, obcaecati porro laboriosam quam non dolore odio ipsa voluptatibus nostrum nisi quasi nesciunt atque aspernatur quas ut perferendis.</p>
            </header>
          </article>

        </aside>
      </div><!-- //row -->
    </section><!-- //dicas de armazenamento -->

    <section id="products" class="full-width left rel">
      <div class="bottom-wave abs full-width"></div>

      <div class="row">
        <header class="option-header small-12 columns text-center">
            <h1 class="century-ghotic-bold text-upp white">Cat&Aacute;logo de produtos</h1>
        </header>

        <nav class="small-4 columns wow slideInLeft" data-wow-duration="1s">
          <dl class="tabs vertical full-width" data-tab>
            <dd class="active"><a href="#panel2a">Ficha Grossa Móvel (V)</a></dd>
            <dd><a href="#panel3a">Tabique Móvel</a></dd>
            <dd><a href="#panel4a">Porta Pivotante (HL e RCL)</a></dd>
            <dd><a href="#panel5a">Porta de Giro (V e RCL)</a></dd>
            <dd><a href="#panel6a">Porta de Correr duas Folhas (V e HL)</a></dd>
            <dd><a href="#panel7a">Porta de correr com trilhe externo</a></dd>
            <dd><a href="#panel8a">Porta de correr open space</a></dd>
            <dd><a href="#panel9a">Porta de correr 3 folhas (V e HL)</a></dd>
            <dd><a href="#panel10a">Janela Maxilar</a></dd>
            <dd><a href="#panel11a">Janela Pivotante</a></dd>
            <dd><a href="#panel12a">Porta de correr com trilho embutido no forro</a></dd>
          </dl>
        </nav>

        <nav class="small-7 columns product-description wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
          <div class="tabs-content vertical small-10 left small-push-1">

            <div class="content active" id="panel2a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Ficha Grossa Móvel (V)</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-2.jpg);"></figure>
            </div>

            <div class="content" id="panel3a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Tabique Móvel</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-3.jpg);"></figure>
            </div>

            <div class="content" id="panel4a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Porta Pivotante (HL e RCL)</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-3.jpg);"></figure>
            </div>

            <div class="content" id="panel5a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Porta de Giro (V e RCL)</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-3.jpg);"></figure>
            </div>

            <div class="content" id="panel6a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Porta de Correr duas Folhas (V e HL)</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-3.jpg);"></figure>
            </div>

            <div class="content" id="panel7a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Porta de correr com trilhe externo</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-3.jpg);"></figure>
            </div>

            <div class="content" id="panel8a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Porta de correr open space</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-3.jpg);"></figure>
            </div>

            <div class="content" id="panel9a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Porta de correr 3 folhas (V e HL)</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-3.jpg);"></figure>
            </div>

            <div class="content" id="panel10a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Janela Maxilar</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-3.jpg);"></figure>
            </div>

            <div class="content" id="panel11a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Janela Pivotante</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-3.jpg);"></figure>
            </div>

            <div class="content" id="panel12a">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold">Porta de correr com trilho embutido no forro</h2>
              </header>

              <p class="green">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maxime accusamus impedit obcaecati magnam. Omnis eius laboriosam magnam cupiditate quisquam? Assumenda sed aliquam ex ea consequuntur facere fugiat totam officiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, pariatur, dolorem, cum officiis iure doloremque maxime consectetur provident autem ex tempore fuga corporis dicta at assumenda eveniet architecto laborum totam.</p>

              <figure class="product-thumb small-10 left small-push-1" style="background: url(images/bg-top-3.jpg);"></figure>
            </div>

          </div>
        </nav>
      </div><!-- //row -->
    </section><!-- //catalogo de produtos -->

    <section id="downloads" class="full-width left">
      <div class="row">
        <header class="option-header small-12 columns text-center">
            <h1 class="century-ghotic-bold text-upp">Downloads</h1>
        </header>

        <aside class="small-6 columns text-right wow slideInLeft" data-wow-duration="1s">
          <nav class="small-12 left">
            <h2 class="century-gothic-bold">Manuais de instrução</h2>
            <h4 class="text-upp century-gothic">Em PDF</h4>

            <ul class="no-bullet">
                <li><h6><a href="#" class="green century-gothic-bold">Ficha Grossa Móvel (V)</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Tabique Móvel</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta Pivotante (HL e RCL)</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de Giro (V e RCL)</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de Correr duas Folhas (V e HL)</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de correr com trilhe externo</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de correr open space</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de correr 3 folhas (V e HL)</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Janela Maxilar</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Janela Pivotante</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de correr com trilho embutido no forro</a></h6></li>
            </ul>
          </nav>
        </aside>

        <aside class="small-6 columns wow slideInRight" data-wow-duration="1s">
          <nav class="small-12 left">
            <h2 class="century-gothic-bold">Projetos personalizados</h2>
            <h4 class="text-upp century-gothic">Em PDF</h4>

            <ul class="no-bullet">
                <li><h6><a href="#" class="green century-gothic-bold">Ficha Grossa Móvel (V)</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Tabique Móvel</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta Pivotante (HL e RCL)</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de Giro (V e RCL)</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de Correr duas Folhas (V e HL)</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de correr com trilhe externo</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de correr open space</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de correr 3 folhas (V e HL)</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Janela Maxilar</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Janela Pivotante</a></h6></li>
                <li><h6><a href="#" class="green century-gothic-bold">Porta de correr com trilho embutido no forro</a></h6></li>
            </ul>
          </nav>
        </aside>
      </div><!-- //row -->
    </section><!-- //downloads -->

    <div class="row">
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
