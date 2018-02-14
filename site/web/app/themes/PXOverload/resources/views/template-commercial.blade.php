{{--
  Template Name: Commercial Page
--}}

@extends('layouts.commercial')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.header-commercial')
    @include('partials.content-page')
  @endwhile
@endsection
