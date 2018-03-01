<article @php(post_class())>
  <?php
    global $post;
      $post_object = get_sub_field('member');
      if( $post_object ) :
      $post = $post_object;
      setup_postdata($post);
      ?>
  <div class="oneBio col-xs-2">
    <a href="<?php the_permalink()?>" class="person" rel=" <?php the_title();?>">
      <img src="{{the_field('member_photo')}}" alt="{{the_field('member_photo')}}" class="staff-grid" />
      <h2 class="name">{{the_field('first_name')}} {{the_field('last_name')}}</h2>
      <h3 class="title"> {{the_field('staff_title')}}</h3>
    </a>
  </div>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>

</article>
