<article @php(post_class())>
  <?php
    global $post;
      $post_object = get_sub_field('member');
      if( $post_object ) :
      $post = $post_object;
      setup_postdata($post);
      ?>
  <div class="grid" >
    <a href="<?php the_permalink()?>">
      <img src="{{the_field('member_photo')}}" alt="{{the_field('member_photo')}}" class="staff-grid" />
      <h2>{{the_field('first_name')}} {{the_field('last_name')}}</h2>
      <h3>{{the_field('staff_title')}}</h3>
    </a>
  </div>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</article>
