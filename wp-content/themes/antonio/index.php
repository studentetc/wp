<?php get_header(); ?>
      <div class="row">
        <div class="col-md-12 welcome">
          <h1><?php bloginfo(name) ?></h1>
          <h4><?php bloginfo(description) ?></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="row text-center" id="contact">

<?php
                $args = array(
                    'page_id' => '8' // the id of your page
                );
                $wp_query = new WP_Query($args);
                if($wp_query->have_posts()) :
                    while ($wp_query->have_posts()) :
                        $wp_query->the_post();
                      ?>
                      <h1><?php the_title(); ?></h1>
                      <h2><?php the_content(); ?></h2>
                      <?php
                    endwhile;
                endif;
 ?>

    
    

  </div>
  <div class="row form-row">
    <form>
      <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
    </form>
  </div>
</div>
</div>
<?php get_footer(); ?>
