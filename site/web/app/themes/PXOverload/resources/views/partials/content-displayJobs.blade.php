<article @php(post_class())>
  <?php global $post;
  $post_object = get_sub_field('job_display');
    if( $post_object ) :
      $post = $post_object;
      setup_postdata($post);
      ?>
      <div class="oneJobOutline flex" >
        <a href="<?php the_permalink()?>">
          <h2 class="jobTitle"> {{the_field('job_position')}} </h2>
          <h3 class="subheading">{{the_field('job_office_location')}} </h3>
        </a>
      </div>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</article>
 
