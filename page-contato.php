<?php get_header(); ?>

    <div class="row rel">
      
      <?php get_template_part('header','contato'); ?>

      <div id="wrapper" class="small-12 left">
        <?php
          $cep = get_option('nt_cep');
          $end = get_option('nt_end');
          $city = get_option('nt_city');
          $tel1 = get_option('nt_tel1');
          $tel2 = get_option('nt_tel2');
          $email = get_option('nt_email');
        ?>
        <aside class="small-4 columns contact-sidebar wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
          <h3 class="text-upp century-gothic-bold">Endereço</h3>
          <p><?php echo $end; ?></p>
          <p><?php echo $city; ?></p>
          <?php if($cep != ''): ?>
          <p>CEP <?php echo $cep; ?></p>
          <?php endif; ?>

          <h3 class="text-upp century-gothic-bold">E-mail</h3>
          <p><?php echo $email; ?></p>

          <h3 class="text-upp century-gothic-bold">Telefone</h3>
          <h6><?php echo $tel1; ?></h6>
          <h6><?php echo $tel2; ?></h6>
        </aside>

        <aside class="small-4 columns contact-sidebar wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">
          <h3 class="text-upp century-gothic-bold">Contato<br>Geral</h3>

          <?php echo do_shortcode('[contact-form-7 id="65" title="Formulário de contato"]'); ?>
        </aside>

        <aside class="small-4 columns contact-sidebar wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">
          <h3 class="text-upp century-gothic-bold">Contato<br>Serviço/Orçamento</h3>

          <?php echo do_shortcode('[contact-form-7 id="69" title="Formulario de orcamento"]'); ?>
        </aside>
      </div><!-- //wrapper row -->

 <?php get_footer(); ?>
