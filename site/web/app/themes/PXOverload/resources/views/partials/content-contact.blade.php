<article @php(the_content())>

  <?php // set up post object
    global $post;
      $post_object = get_sub_field('team_office_add');
      if( $post_object ) :
      $post = $post_object;
      setup_postdata($post);
      ?>
  <div class="row contact_row">
    <div class="col-xs-12" id = "{{the_field('contact_office_name')}}">
      <img src="{{the_field('contact_hero_image')}}" class="officeContactImage"/>
      <h1 class="office-location-header"> {{the_field('contact_office_location')}}</h1>
    </div>
    <div class="col-xs-12 col-sm-6 office_info">
      <h3 class= "contact_address"> Address:</h3>
        <p>
          {{the_field('contact_office_address')}}
        </p>
      <h3 class= "contact_phone"> Office:</h3>
        <p>
          {{the_field('contact_office_phone')}}
        </p>
      <h3 class= "contact_email"> Email:</h3>
        <p>
          <a href="mailto:{{the_field('contact_office_email')}}">{{the_field('contact_office_email')}}</a>
        </p>
    </div>
  </div>  <!--r0w -->
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</article>
