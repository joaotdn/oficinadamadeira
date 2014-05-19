<?php get_header(); ?>

    <div class="row rel">
      <?php get_template_part('header','info'); ?>

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
              <?php 
                $woods = get_field('wood_type'); 
                foreach($woods as $wood):
              ?>
              <li>
                <figure class="small-12 left">
                  <div class="tree-thumb" style="background-image: url(<?php echo $wood['wood_image']; ?>);"></div>
                  <figcaption class="small-12 left">
                    <h3 class="text-center text-upp small-12 left century-ghotic-bold"><?php echo $wood['wood_name']; ?></h3>
                    <p class="text-center"><?php echo $wood['wood_desc']; ?></p>
                  </figcaption>
                </figure>
              </li>
              <?php
                endforeach;  
              ?>
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
            <?php $storage_desc = get_field('storage_desc'); ?>
            <p class="text-right"><?php echo $storage_desc; ?></p>
          </article>
          
          <?php 
            $tips = get_field('storage_list'); 
            foreach($tips as $tip):
          ?>
          <article class="small-12 left wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <header class="tip-header">
              <h4 class="red text-right small-12 left"><span class="tip-number storage-number display-block right"></span><span class="tip-name right"><?php echo $tip['storage_title']; ?></span></h4>
            </header>
            <p class="text-right"><?php echo $tip['storage_desc']; ?></p>
          </article>
          <?php
            endforeach;  
          ?>
        </aside>

        <aside class="small-6 columns tips-columns">
          <article class="small-12 left wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <header>
              <h1 class="green">Dicas de<br>manutenção</h1>
            </header>
            <?php $caution_desc = get_field('caution_desc'); ?>
            <p><?php echo $caution_desc; ?></p>
          </article>
          
          <?php 
            $tips = get_field('caution_list'); 
            foreach($tips as $tip):
          ?>
          <article class="small-12 left wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <header>
              <h4 class="green small-12 left">
                <span class="tip-number caution-number display-block left"></span>
                <span class="tip-name left"><?php echo $tip['caution_title']; ?></span>
              </h4>
              <p><?php echo $tip['caution_desc']; ?></p>
            </header>
          </article>
          <?php
            endforeach;  
          ?>
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
          <dl class="tabs vertical full-width product-titles" data-tab>
            <?php 
              $products = get_field('products_list'); 
              foreach($products as $product):
            ?>
            <dd><a class="product-title"><?php echo $product['product_title']; ?></a></dd>
            <?php
              endforeach;  
            ?>
          </dl>
        </nav>

        <nav class="small-7 columns product-description wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
          <div class="tabs-content vertical small-10 left small-push-1">
            <?php 
              $products = get_field('products_list'); 
              foreach($products as $product):
            ?>
            <div class="content">
              <header class="small-12 left">
                <h2 class="green century-gothic-bold"><?php echo $product['product_title']; ?></h2>
              </header>

              <p class="green"><?php echo $product['product_desc']; ?></p>

              <figure class="product-thumb small-10 left small-push-1" style="background-image: url(<?php echo $product['product_image']; ?>);"></figure>
            </div>
            <?php
              endforeach;  
            ?>
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
              <?php 
                $files = get_field('intructs_list'); 
                foreach($files as $file):
              ?>
                <li><h6><a href="<?php echo $file['instruct_pdf']; ?>" class="green century-gothic-bold"><?php echo $file['instruct_name']; ?></a></h6></li>
              <?php
                endforeach;  
              ?>
            </ul>
          </nav>
        </aside>

        <aside class="small-6 columns wow slideInRight" data-wow-duration="1s">
          <nav class="small-12 left">
            <h2 class="century-gothic-bold">Projetos personalizados</h2>
            <h4 class="text-upp century-gothic">Em PDF</h4>

            <ul class="no-bullet">
              <?php 
                $files = get_field('custom_list'); 
                foreach($files as $file):
              ?>
                <li><h6><a href="<?php echo $file['custom_pdf']; ?>" class="green century-gothic-bold"><?php echo $file['custom_name']; ?></a></h6></li>
              <?php
                endforeach;  
              ?>
            </ul>
          </nav>
        </aside>
      </div><!-- //row -->
    </section><!-- //downloads -->

    <div class="row">

<?php get_footer(); ?>
