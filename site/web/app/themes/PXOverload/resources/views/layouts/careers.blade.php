<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    <div class="container-flex" role="document">
      @php(do_action('get_header'))
      @include('partials.header')
      <div class="jobRow">
          <main class="container-flex jobs">
            <div class="displayJobs row">
              @yield('content-jobs')
            </div>
          </main>
      </div> <!--row -->
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
