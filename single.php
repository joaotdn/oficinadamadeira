<?php get_header(); ?>

    <div class="row rel">
      
      <?php get_template_part('header','single'); ?>

      <div id="wrapper" class="small-12 left single clearfix">
        <section class="showroom-slide small-12 left rel wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
          <nav class="small-12 left rel list-rooms">
            <?php 
              $images = get_field('product_images'); 
              foreach($images as $image):
            ?>
            <figure class="small-12 left rel showroom-thumb" style="background-image: url(<?php echo $image['product_thumb']; ?>);"></figure>
            <?php
              endforeach;  
            ?>             
          </nav>

          <?php
            $prev = get_previous_post( true );
            $next = get_next_post( true );
          ?>

          <a href="<?php echo get_permalink( $next->ID ); ?>" class="next-room display-block abs icon-nroom" title="Próximo"></a>
          <a href="<?php echo get_permalink( $prev->ID ); ?>" class="prev-room display-block abs icon-proom" title="Anterior"></a>
        </section><!-- //showroom-slider -->

        <article class="showroom-text small-4 columns wow slideInLeft" data-wow-duration="2s">
          <header class="small-12 left">
            <h3 class="text-upp century-gothic-bold"><?php the_title(); ?></h3>
            <?php
              $description = get_field('product_desc');
            ?>
          </header>
          <p><?php echo $description; ?></p>
          
          <?php
            $info = get_field('product_info');
            if($info != ''):
          ?>
          <header class="small-12 left">
            <h3 class="text-upp century-gothic-bold">Informações Técnicas</h3>
          </header>
          <p><?php echo $info; ?></p>
          <?php endif; ?>
        </article>

        <article class="showroom-text small-8 columns wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
          <?php
            $func = get_field('product_func');
            if($func != ''):
          ?>
          <header class="small-12 left">
            <h3 class="text-upp century-gothic-bold">Como funciona</h3>
          </header>

          <figure class="how-thumb small-12 left">
            <img src="<?php echo $func; ?>" alt="">
          </figure>
          <?php endif; ?>
        </article> 
      </div><!-- //wrapper row -->

<?php get_footer(); ?>
