{{--
  Template Name: Open Positions
--}}

@extends('layouts.careers')

@section('content-jobs')
  @php('global $post;')
  @if(have_rows('all_jobs'))
    @while(have_rows('all_jobs'))
      @php(the_row())
        @include('partials.content-displayJobs')
    @endwhile
  @endif
@endsection
