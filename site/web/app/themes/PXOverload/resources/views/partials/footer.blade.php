<footer class="content-info">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}"> <img src="@asset('images/logo.png')" alt="Pixomondo" class="logoFooter" /> </a>

    @php(dynamic_sidebar('sidebar-footer'))

    <nav class="nav-footer">
      <a href="#"class = "scrollToTop">
        Scroll To Top
      </a>
      @if (has_nav_menu('footer'))
        {!! wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'navfooter']) !!}
      @endif
    </nav>
  </div>
</footer>
