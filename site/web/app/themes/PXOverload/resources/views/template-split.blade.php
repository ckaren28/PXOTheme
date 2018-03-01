{{--
  Template Name: Split Parent
--}}

@extends('layouts.split')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-split')
  @endwhile
@endsection
