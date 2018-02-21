<div class="row">
  <div class="col-sm-5">
    <img class="ProfilePic" src="{{the_field('member_photo')}}" />
    <h1 class="entry-title-name">{{the_field('first_name')}} {{the_field('last_name')}}</h1>
    <h2 class="subheading"> {{the_field('staff_title')}}</h2>

    <div class="social-media-contact">
      <ul>
        <li> Member of the {{the_field('staff_located')}} Team </li>
        <li> Mobile: {{the_field('staff_member_phone')}}</li>
        <li> Email: {{the_field('staff_member_email')}}</li>
      </ul>
    </div> <!--contact inf0  -->
  </div>
    <div class="col-sm-5 entry-content-bio">
      {{the_field('staff_member_description')}}
    </div>
</div><!--row-->
