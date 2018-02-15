{{--
  Template Name: Contact Us
--}}

@extends('layouts.fullw')
@section('content')
  @include('partials.page-header')
  @include('partials.content-contact-hero')
  @include('partials.content-officelogos')
  @php('global $post')
  @if(have_rows('display_offices'))
    @while(have_rows('display_offices'))
      @php(the_row())
      @include('partials.content-contact')
    @endwhile
  @endif
@endsection
