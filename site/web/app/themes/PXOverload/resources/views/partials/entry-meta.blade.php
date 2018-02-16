<!-- <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
<p class="byline author vcard">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p> -->

  <img class="ProfilePic" src="{{the_field('member_photo')}}" />
  <h1 class="entry-title-namne">{{the_field('first_name')}} {{the_field('last_name')}}</h1>
  <h2 class="subheading"> {{the_field('staff_title')}}</h2>

<div class="social-media-contact">
  <ul>
    <li> Member of the {{the_field('staff_located')}} Team </li>
    <li> Mobile: {{the_field('staff_member_phone')}}</li>
    <li> Email: {{the_field('staff_member_email')}}</li>
  </ul>
</div>
