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
    <h1>Contact us</h1>
    <h2>Lorem ipsum dolor sit amet</h2>
  </div>
  <div class="row form-row">
    <form>
      <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
    </form>
  </div>
</div>
</div>
<?php get_footer(); ?>
