{{--
  Template Name: Staff
--}}

@extends('layouts.fullw')
@section('content')

  @include('partials.page-header')
  <div class="col-xs-12 col-sm-8 staffPage">
    @php('global $post;')
    @if(have_rows('all_staff'))
      @while(have_rows('all_staff'))
        @php(the_row())
        @include('partials.content-staff')
      @endwhile
    @endif
  </div>

  @include('partials.content-teammate-single')

@endsection
