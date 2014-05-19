<?php get_header(); ?>

    <div class="icon-bgbody abs wow fadeInDown" data-wow-duration="2s" data-wow-delay="2s"></div>
    <div class="row rel">

      <div class="menu-container small-12 left">

      <div class="circle-red small-12 abs wow fadeIn" data-wow-duration="2s" data-wow-delay="1s"></div>
      <div class="circle-dashed abs small-4"></div>
    
      <div class="small-3 abs logo-container wow bounceInDown" data-wow-duration="2s" data-wow-delay="0.5s">
        <figure class="logo small-12 text-center">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Página principal" class="logo-img display-block centered rel">
            <div class="icon-logo centered"></div>
          </a>
        </figure>
      </div>

      <div class="small-4 abs go-about wow bounceInDown" data-wow-duration="2s" data-wow-delay="1s">
        <?php $page = get_page_by_title('Empresa'); ?>
        <a href="<?php echo get_page_link($page->ID); ?>" class="display-block small-12 left white" title="Quem somos">
          <header class="left about-header small-push-6">
            <p class="text-upp apex-book">Empresa</p>
            <h3 class="text-upp century-gothic-bold white">Quem<br>Somos?</h3>
          </header>
        </a>
      </div>
      
      <!-- SLIDER -->
      <div class="small-6 main-slide abs">
        <nav class="small-12 left list-slides rel">
          <header class="abs">
            <h1 class="text-upp century-gothic-bold white">Descubra<br> mais dos<br> nossos<br> projetos</h1>
          </header>
          <ul class="small-12 left no-bullet sliders">
            <?php       
                query_posts('showposts=5&category_name=show-room-digital'); 
                if (have_posts()): while (have_posts()) : the_post();

                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(returnId()), 'large' );
                $thumb = $thumb['0']; //Return thumbnail URI
            ?>
            <li>
              <a href="<?php the_permalink(); ?>" class="small-12 display-block left full-height" title="<?php the_title(); ?>">
                <figure class="small-12 left" style="background-image: url(<?php echo $thumb; ?>);">
                  <figcaption class="small-6">
                    <p class="text-upp apex-book">Show Room digital</p>
                    <h5 class=""><?php the_title(); ?></h5>
                  </figcaption>
                </figure>
              </a>
            </li>
            <?php endwhile; else: endif; wp_reset_query(); ?>
          </ul>

          <a href="#" class="display-block abs arrow-right" title="Próximo">
            <div class="icon-aright centered"></div>
          </a>

          <a href="#" class="display-block abs arrow-left" title="Anterior">
            <div class="icon-aleft centered"></div>
          </a>
        </nav>
      </div>
      <!-- //SLIDER -->

      <div class="small-3 abs r logo-container wow bounceInDown" data-wow-duration="2s" data-wow-delay="1.5s">
        <figure class="logo small-12">
          <?php $page = get_page_by_title('Informacoes Tecnicas'); ?>
          <a href="<?php echo get_page_link($page->ID); ?>" class="display-block centered rel" title="Informações Técnicas">
            <h4 class="centered apex-medium-italic left">
              Clique aqui para informações técnicas sobre a nossa <span>madeira, armazenamento</span> e nossos <span>produtos</span>
            </h4>
            <p class="apex-book text-upp left">Informações Técnicas</p>
          </a>
        </figure>
      </div>

      <div class="small-4 abs go-about by-clients wow bounceInDown" data-wow-duration="2s" data-wow-delay="1.8s">
        <?php $page = get_page_by_title('Clientes'); ?>
        <a href="<?php echo get_page_link($page->ID); ?>" class="display-block small-12 left white" title="O que nossos clientes dizem">
          <h4 class="text-upp century-gothic-bold white">O que<br> nossos<br> clientes<br> dizem</h4>
        </a>
      </div>

      <div class="small-3 abs wood-bg menu-circle wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="1s"></div>

      </div><!-- //Menu/Slide container -->

<?php get_footer(); ?>
