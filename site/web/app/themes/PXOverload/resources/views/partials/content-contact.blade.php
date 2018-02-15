<article @php(the_content())>
  <?php // set up post object
    global $post;
      $post_object = get_sub_field('team_office_add');
      if( $post_object ) :
      $post = $post_object;
      setup_postdata($post);
      ?>
  <div class="row contact_row">
    <div class="col-xs-12">
      <img src="{{the_field('contact_hero_image')}}" class="officeContactImage"/>
      <h1 class="office-location-header"> {{the_field('contact_office_location')}}</h1>
    </div>
    <div class="col-xs-12 col-sm-6 office_info">
      <p class= "contact_address"> Address: {{the_field('contact_office_address')}} </p>
      <p class= "contact_phone"> Office: {{the_field('contact_office_phone')}} </p>
      <p class= "contact_email"> Email: <a href="mailto:{{the_field('contact_office_email')}}">{{the_field('contact_office_email')}}</a> </p>
    </div>
  </div>  <!--r0w -->
  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

  <!-- End Repeater -->
  <?php endif; ?>

</article>
