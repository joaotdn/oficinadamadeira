<footer id="footer" class="small-12 columns wow fadeInUp" data-wow-duration="2s">

        <figure class="logo-footer small-3 left">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="display-block left small-12" title="Página principal">
            <div class="icon-logofooter centered"></div>
          </a>
          <?php
            $cep = get_option('nt_cep');
            $end = get_option('nt_end');
            $city = get_option('nt_city');
            $tel1 = get_option('nt_tel1');
            $tel2 = get_option('nt_tel2');
            $email = get_option('nt_email');
          ?>
          <figcaption class="left small-12 text-center address">
            <p><?php echo $end; ?></p>
            <p><?php echo $city; ?></p>
            <?php if($cep != ''): ?>
            <p>CEP <?php echo $cep; ?></p>
            <?php endif; ?>
            <p class="email"><?php echo $email; ?></p>
            <p class="tel"><?php echo $tel1; ?></p>
            <p class="tel"><?php echo $tel2; ?></p>
          </figcaption>
        </figure>

        <nav class="menu-footer small-9 left">
          <ul class="inline-list small-12 left">
            <?php $page = get_page_by_title('Empresa'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="" title="Empresa">Empresa</a>
              <ul class="inline-list small-12 left sub-menu">
                <li><a href="<?php echo get_page_link($page->ID); ?>" class="">Quem Somos</a></li>
                <li><a href="<?php echo get_page_link($page->ID); ?>" class="">Equipe</a></li>
              </ul>
            </li>
            <?php 
              $category_id = get_cat_ID('Show Room Digital');
              $categories = get_terms( 'category', array( 'parent' => '', 'child_of' => $category_id, 'hide_empty' => 0 ) );
              $category_link = get_category_link( $category_id );
            ?>
            <li><a href="<?php echo esc_url( $category_link ); ?>" class="" title="Show Room Digital">Show Room Digital</a>
              <ul class="inline-list small-12 left sub-menu">
                <?php 
                  foreach ($categories as $category):

                  query_posts('showposts=1&category_name='.$category->slug); 
                  if (have_posts()): while (have_posts()) : the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>" title="<?php echo $category->name; ?>"><?php echo $category->name; ?></a></li>
                <?php endwhile; else: endif; wp_reset_query(); endforeach; ?>
              </ul>
            </li>
            <?php $page = get_page_by_title('Informacoes Tecnicas'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="" title="Informações Técnicas">Informações Técnicas</a>
              <ul class="inline-list small-12 left sub-menu">
                <li><a href="<?php echo get_page_link($page->ID); ?>#woods" class="">Madeira</a></li>
                <li><a href="<?php echo get_page_link($page->ID); ?>#tips" class="">Armazenamento</a></li>
                <li><a href="<?php echo get_page_link($page->ID); ?>#products" class="">Produtos</a></li>
              </ul>
            </li>
            <?php $page = get_page_by_title('Clientes'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="" title="Clientes">Clientes</a></li>
            <?php $page = get_page_by_title('Contato'); ?>
            <li><a href="<?php echo get_page_link($page->ID); ?>" class="" title="Contato">Contato</a></li>
          </ul>
        </nav>

      </footer><!-- //footer -->

    </div><!-- //row -->
    <!-- preloading -->
    <div id="jpreContent">
      <div class="icon-loading"></div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>