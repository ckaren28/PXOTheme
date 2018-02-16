<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    <div class="container'flex" role="document">
      <div class="row headerJobs">
        @include('partials.header')
      </div>
      <div class="jobsOfficeLogo">
        @include('partials.content-officelogos')
      </div> <!--row-->
      <div class="row jobRow">
          <main class="container-flex">
            <div class="displayJobs">
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
