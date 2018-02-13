@php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

<div class="row hero-image">
  <h1>something content about us</h1>
  <img src="{{ get_field('hero-image') }}" alt="we are pxo" title="We are Pixomondo" />
</div>

<article @php(post_class('page row'))>
  <div class="col-md-4">
    <p><a href="{{ get_permalink() }}">{!! the_post_thumbnail() !!}</a></p>
  </div>
  <div class="col-md-8 text-md-left">
    <h2 class="entry-title">
      {{ get_the_title() }}
      <small>{{ get_field('description') }}</small>
    </h2>
    <div class="entry-summary hidden-sm-down">
      @php(the_excerpt())
    </div>
  </div>
</article>
