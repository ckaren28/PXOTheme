<article @php(the_content())>

  <?php
    global $post;
      $post_object = get_sub_field('team_office_add');
      if( $post_object ) :
      $post = $post_object;
      setup_postdata($post);
      ?>

  <div id="{{the_field('contact_office_name')}}" class="start">
      <div class="row contact_row">

        <div class="col-xs-12 officebackground" style="background-image: url('{{the_field('contact_hero_image')}} ')">

          <h1 class="office-location-header"> {{the_field('contact_office_location')}}</h1>

        <div class="contactWrap">
          <div class="col-xs-12 col-sm-8 office_info">
            <ul class="contact officeInfo col-xs-4">
              <h4 class="conHead">Office</h4>
              <li>
                <h3 class= "contact_address"> Address:</h3> <p> {{the_field('contact_office_address')}} </p>
              </li>
              <li>
                <h3 class= "contact_phone"> Office:</h3>
                <p> {{the_field('contact_office_phone')}} </p>
              </li>
              <li>
                <h3 class= "contact_email"> Email:</h3>
                <p> <a href="mailto:{{the_field('contact_office_email')}}">{{the_field('contact_office_email')}}</a> </p>
              </li>
            </ul>



        <div class="col-xs-8">
          <h4 class= "contactLeads"> Contact Leads</h4>
        </div>
        <?php
          if(have_rows('office_lead')):
            while( have_rows('office_lead')) : the_row(); ?>
            <ul class="contact officeLeadInfo col-xs-4">
              <li>
                <p class="name"> {{the_sub_field('full_name')}} </p>
              </li>
              <li>
                <p class="pos"> {{the_sub_field('title')}} | {{the_sub_field('department')}} </p>
              </li>
              </li>
                <h3 class= "leadphone"> Mobile:</h3>
                <p> {{the_sub_field('phone_number')}} </p>
              </li>
              <li>
                <h3 class= "leadEmail"> Email:</h3>
                <p> <a href="mailto:{{the_field('email_address')}}">{{the_sub_field('email_address')}}</a> </p>
              </li>
            </ul>
            <?php endwhile;
          endif;
          ?>

        </div>
        </div>

      </div>  <!--r0w entire office block -->
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
  </div>

</article>
