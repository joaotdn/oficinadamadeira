<div class="circle-red info small-12 abs wow fadeIn" data-wow-duration="2s" data-wow-delay="1s"></div>
      <div class="circle-green-big info abs"></div>

      <header class="small-12 left rel inset-header info-header">
        
        <div class="circle-photo small-9 abs" style="<?php randomImagesHeader(); ?>"></div>
        <div class="circle-photo small-9 abs no-bg wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s"></div>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="small-3 columns inset-logo display-block wow fadeInDown" data-wow-duration="2s">
          <div class="icon-logo centered"></div>
        </a>

        <h1 class="this-page left small-push-1 text-upp white century-gothic-bold wow slideInDown" data-wow-duration="2s">/Informações<br>Técnicas</h1>

        <div class="inset-menu small-8 small-push-1 left wow slideInDown" data-wow-duration="2s">
          <div class="icon-bgmenu abs"></div>
          <ul class="inline-list small-12 left">
            <li><a href="javascript:window.history.go(-1)" class="text-upp return-page">Voltar</a></li>
            <?php $page = get_page_by_title('Empresa'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="text-upp">Empresa</a></li>
            <?php 
              $category_id = get_cat_ID('Show Room Digital');
              $category_link = get_category_link( $category_id );
            ?>
            <li><a href="<?php echo esc_url( $category_link ); ?>" class="text-upp">Show Room Digital</a></li>
            <?php $page = get_page_by_title('Clientes'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="text-upp">Clientes</a></li>
            <?php $page = get_page_by_title('Contato'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="text-upp">Contato</a></li>
          </ul>
        </div>
      </header>