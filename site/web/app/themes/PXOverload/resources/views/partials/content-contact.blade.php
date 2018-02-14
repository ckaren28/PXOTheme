<article @php(the_content())>
  content contact page

<div class="container-flex">
  <div class="row">
    <div class="officeImg">
      {{ the_field('contact_office_image') }}
    </div>
    <div class="col-xs-12">
      <h1 class="LocationHeader"> {{ the_field('contact_office_location') }} </h1>
    </div>
    <div class="contact_us_info hidden">
      <p class="address">
        {{ the_field('contact_office_address') }}
      </p>
      <p class="officePhone">
      {{ the_field('contact_office_phone') }}
      </p>
      <p class="officeEmail">
      {{ the_field('contact_office_email') }}
      </p>
    </div>
  </div>  <!--r0w -->
</div>

</article>
