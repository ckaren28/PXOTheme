<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @include('partials.header')
    @php(do_action('get_header'))
    <div class="wrap aboutLayout" role="document">
      <div class="layout-about content">
        <main class="about">
          @yield('content-aboutUs')
        </main>
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
