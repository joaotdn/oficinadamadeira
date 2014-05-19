<?php get_header(); ?>

    <div class="row rel">
      
      <?php get_template_part('header','clientes'); ?>

      <div id="wrapper" class="row left page-clients">
        <nav class="small-12 columns list-clients">
          <header class="small-12 columns text-center">
            <h3 class="">Alguns testemunhais dos nossos queridos clientes. Mande o seu!</h3>
          </header>
          <ul class="small-block-grid-4">
            <?php 
              $clientes = get_field('client_list'); 
              foreach($clientes as $cliente):
            ?>
            <li>
              <figure class="small-12 left wow flipInY" data-wow-duration="2s" data-wow-delay="0.5s">
                <div class="client-thumb" style="background-image: url(<?php echo $cliente['client_image']; ?>);"></div>
              </figure>
              <h4 class="century-gothic-bold small-12 left text-center wow fadeInUp" data-wow-duration="2s"><?php echo $cliente['client_name']; ?></h4>
              <p class="green text-center wow fadeInUp" data-wow-duration="2s"><?php echo $cliente['client_text']; ?></p>
            </li>
            <?php
              endforeach;  
            ?>
          </ul>
        </nav>
      </div>

<?php get_footer(); ?>
