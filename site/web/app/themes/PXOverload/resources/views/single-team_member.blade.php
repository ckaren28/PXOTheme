@extends('layouts.team')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-single-team_member-'.get_post_type())
  @endwhile
@endsection
