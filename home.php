
<div class="row">
<div class="col-md-8">
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
</div>
<div class="col-md-4">
  <div class="presentation">
    <div class="picture">&nbsp;
    </div>
    <div class="text">
      <h1><?php bloginfo('name'); ?></h1>
      <h2 class="symbol"><span class="mesuivre">Me suivre :</span> <a href="https://twitter.com/adelcasse">roundedtwitterbird</a> <a href="https://facebook.com/arnaud.delcasse">roundedfacebook</a> <a href="/feed/">roundedrss</a></h2>
      <p><?php bloginfo('description'); ?></p>
      <p style="text-align: center;">
        <a href="http://ps-antibes.fr"><img src="<?php bloginfo('template_directory'); ?>/assets/img/ps-antibes_juan_les_pins.png" style="max-height: 55px;" /></a>
        <a href="http://www.maintenantlagauche.fr"><img src="<?php bloginfo('template_directory'); ?>/assets/img/maintenant_la_gauche.jpg" /></a>
        <a href="http://ldh-france.org"><img src="<?php bloginfo('template_directory'); ?>/assets/img/ldh.png" /></a>
        <a href="http://laquadrature.net"><img src="<?php bloginfo('template_directory'); ?>/assets/img/laquadrature.png" /></a>
        <a href="http://ndn-fai.fr"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo_ndn.png" style="background-color: #fff; padding: 3px;" /></a>
      </p>
    </div>
  </div>
</div>
</div>
