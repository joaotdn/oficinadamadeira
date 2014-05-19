    <div class="circle-red single small-12 abs wow fadeIn" data-wow-duration="2s" data-wow-delay="1s"></div>
      <div class="circle-green-big single small-12 abs"></div>

      <header class="small-12 left rel inset-header single-header">
        
        <div class="circle-photo gold category small-9 abs"></div>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="small-3 columns inset-logo display-block wow fadeInDown" data-wow-duration="2s">
          <div class="icon-logo centered"></div>
        </a>

        <h1 class="this-page left small-push-1 text-upp white century-gothic-bold wow slideInDown single" data-wow-duration="2s">/Show<br>Room<br>Digital</h1>
        
        <?php get_template_part('main','menu'); ?>

        <div class="inset-menu single-inset small-8 small-push-1 left wow slideInDown" data-wow-duration="2s">
          <div class="icon-bgmenu-category abs"></div>
          <ul class="inline-list small-12 left category-menu">
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

      </header>