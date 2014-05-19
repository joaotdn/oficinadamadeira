    <div class="circle-red single small-12 abs wow fadeIn" data-wow-duration="2s" data-wow-delay="1s"></div>
      <div class="circle-green-big single small-12 abs"></div>

      <header class="small-12 left rel inset-header single-header">
        
        <div class="circle-photo gold small-9 abs"></div>
        <div class="circle-photo small-6 abs single wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s"></div>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="small-3 columns inset-logo display-block wow fadeInDown" data-wow-duration="2s">
          <div class="icon-logo centered"></div>
        </a>

        <h1 class="this-page left small-push-1 text-upp white century-gothic-bold wow slideInDown single" data-wow-duration="2s">/Show<br>Room<br>Digital</h1>

        <nav class="showroom-categories small-4 abs">
          <ul class="no-bullet">
            <?php 
              $category_id = get_cat_ID('Show Room Digital');
              $categories = get_terms( 'category', array( 'parent' => '', 'child_of' => $category_id, 'hide_empty' => 0 ) );
              $category_link = get_category_link( $category_id );
              foreach ($categories as $category):
                  query_posts('showposts=1&category_name='.$category->slug); 
                  if (have_posts()): while (have_posts()) : the_post();
            ?>
            <li><h5><a href="<?php the_permalink(); ?>" title="<?php echo $category->name; ?>"><span class="left display-block icon-bullet"></span><?php echo $category->name; ?></a></h5></li>
            <?php endwhile; else: endif; wp_reset_query(); endforeach; ?>
          </ul>
        </nav>

        <div class="inset-menu single-inset small-8 small-push-1 left wow slideInDown" data-wow-duration="2s">
          <div class="icon-bgmenu-single abs"></div>
          <ul class="inline-list small-12 left">
            <li><a href="javascript:window.history.go(-1)" class="text-upp white return-page">Voltar</a></li>
            <?php $page = get_page_by_title('Empresa'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="text-upp white">Empresa</a></li>
            <?php $page = get_page_by_title('Informacoes Tecnicas'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="text-upp white">Informações Técnicas</a></li>
            <?php $page = get_page_by_title('Clientes'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="text-upp white">Clientes</a></li>
            <?php $page = get_page_by_title('Contato'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="text-upp white">Contato</a></li>
          </ul>
        </div>

        <div class="small-10 small-push-1 columns abs single-category wow fadeInDown" data-wow-duration="2s" data-wow-delay="2s">
          <div class="small-12 columns rel full-height">
            <header class="small-12 abs">
              <?php
                $category = get_the_category();
              ?>
              <h2 class="white text-upp century-gothic-bold"><?php echo $category[0]->cat_name; ?></h2>
            </header>
          </div>
        </div>
      </header>