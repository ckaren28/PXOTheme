<article @php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

<h1>We are Pixomondo </h1>


<div class="container">
  <div class="row">
    <div class="col-xs-12 pxo-hollywood-sign">
      <a  class="btn-primary" href="#">View Our Offices</a>
    </div>
    <div class="col-xs-12 city-image">
    </div>
    <div class="col-xs-12  we-are-global">
      {{the_field('we_are_global')}}
    </div>
  </div><!--row-->
</div>

</article>
