<?php get_header(); ?>

    <div class="row rel">
      
      <?php get_template_part('header','category'); ?>

      <?php
        $category_id = get_cat_ID('Show Room Digital');
        $terms = get_terms( 'category', array( 'parent' => '', 'child_of' => $category_id, 'hide_empty' => 0 ) );
      ?>

      <div id="wrapper" class="small-12 left category">
        <nav class="small-12 columns category-list">
          <ul class="small-block-grid-3">
            <?php
              foreach($terms as $term):
            ?>
            <li>
              <?php       
                query_posts('showposts=1&category_name='. $term->slug); 
                if (have_posts()): while (have_posts()) : the_post();
              ?>
              <figure class="small-12 left wow flipInX" data-wow-duration="2s">
                <header class="small-12 left text-center">
                  <h3 class="text-upp century-gothic-bold"><a href="<?php the_permalink(); ?>" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a></h3>
                </header>
                <a href="<?php the_permalink(); ?>" title=""><img src="<?php echo get_field('cat_image', $term); ?>" alt=""></a>
              </figure>
              <?php endwhile; else: endif; wp_reset_query(); ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </nav>
      </div><!-- //wrapper row -->

<?php get_footer(); ?>
