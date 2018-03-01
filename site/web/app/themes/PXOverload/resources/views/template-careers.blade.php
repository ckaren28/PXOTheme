{{--
  Template Name: Open Positions
--}}

@extends('layouts.careers')


@section('content-jobs')
  @while(have_posts()) @php(the_post())
  @include('partials.page-header')
  @include('partials.content-iconQ')
    @php('global $post;')
    @include('partials.content-displayJobs')
  @endwhile
@endsection
