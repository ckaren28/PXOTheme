<article @php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

<div class="container-flex">
  <div class="hero">
    <img src="{{ get_field('about_us_hero_image') }}" title="HeroImage" alt="we are pxo" class="heroImg"/>
  </div>
  <!--  Hero row-->
  <div class="row aboutPXO">
    <div class="col-xs-12 about-us-description">
      {{ the_field('about_us_description') }}
    </div>
  </div> <!-- description row-->
  <div class="row awards">
    <div class="col-xs-3 awards-pic">
      <img class="about-awards" src="@asset('images/aboutPXO-awards.png')" alt="awards" />
    </div>
    <div class="col-xs-8 about-us-awards">
      {{ the_field('about_us_awards') }}
    </div>
  </div> <!-- Awards row -->
  <div class="row">
    <div class="col-xs-12 about_us_preview_works">
      {{ the_field('about_us_preview_works') }}
    </div>
  </div> <!--row-->
  <div class="row">
    <div class="col-xs-12  we-are-global">
      {{the_field('we_are_global')}}
      <a href="#" class="basicBtn viewOffices"> View the Offices </a>
    </div>
  </div> <!--row-->
</div>

</article>
