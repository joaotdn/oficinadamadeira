<?php get_header(); ?>

    <div class="row rel">

      <?php get_template_part('header','empresa'); ?>

      <div id="wrapper" class="left page-about">
        
        <figure class="small-12 columns about-video rel wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
          <?php 
              $clip = get_field('empresa_video'); 
              if($clip != ''):
          ?>
            <figure class="flex-video">
              <?php echo $clip ?>
            </figure>
          <?php else: ?>
          <a href="#" class="display-block left play-video">
            <span class="icon-play display-block"></span>
          </a>
          <?php endif; ?>
        </figure><!-- //video da empresa -->

        <article class="small-8 columns page-content wow fadeInUp" data-wow-duration="2s">
          <header class="page-header small-12 left text-center">
            <h1 class="text-upp century-gothic-bold">Quem Somos?</h1>
          </header>

          <section class="small-12 left about-text">
            <?php 
              $text = get_field('empresa_text'); 
              echo $text;
            ?>
          </section>
        </article>

        <aside class="small-4 columns about-sidebar">
          <header class="small-12 left header-sidebar">
            <h1 class="text-upp white century-gothic-bold">Equipe</h1>
          </header>

          <nav class="om-team small-12 left">
            <?php 
              $members = get_field('empesa_members'); 
              foreach($members as $member):
            ?>
            <figure class="small-12 left wow fadeInUp" data-wow-duration="1s">
              <div class="team-thumb ov-hidden left" style="background-image: url(<?php echo $member['member_thumb']; ?>);"></div>
              <figcaption class="right small-6 left team-member">
                <h5 class="apex-bold text-italic"><?php echo $member['member_name']; ?></h5>
                <p class="text-upp apex-book"><?php echo $member['member_role']; ?></p>
              </figcaption>
            </figure>
            <?php
              endforeach;  
            ?>
          </nav>
        </aside>

        <figure class="small-12 columns team-full rel wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
          <?php 
              $team = get_field('empresa_image'); 
              if($team != ''):
          ?>
              <img src="<?php echo $team ?>" alt="" class="small-12 left">
          <?php endif; ?>
        </figure><!-- //video da empresa -->

      </div>

<?php get_footer(); ?>
