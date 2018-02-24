
<div class="row">
  <div class="col-xs-12 block">
      <div class="triangle">
        <img class="ProfilePic" src="{{the_field('member_full_photo')}}" />
      </div> <!--triangle -->
  </div>
</div>

<div class="row">
  <div class="col-xs-12">
      <div class="member-description">
        {{the_field('first_name')}}
      </div>
  </div>
</div>

<div class="row">
    <div class="col-xs-12">
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
</div>

<div class="row">
  <div class="col-xs-12 entry-content-bio">
    {{the_field('staff_member_description')}}
  </div>
</div>
