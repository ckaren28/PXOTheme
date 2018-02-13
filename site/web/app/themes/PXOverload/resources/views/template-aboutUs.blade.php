{{--
  Template Name: About Us
--}}

@extends('layouts.about')

@section('content-about-us')
  <h1>hi</h1>


<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <img src="{{ get_field('hero-image') }}" title="HeroImage" alt="we are pxo"/>
    </div>
    <div class="col-xs-12 pxo-description">
      {{ get_field('PXO_description') }}
    </div>
    <div class="col-xs-12 about-us-awards">
      {{ get_field('about_us_awards') }}
    </div>
    <div class="col-xs-12 about_us_awards">
      {{ get_field('about_us_preview_works') }}
    </div>
    <div class="col-xs-12  we-are-global">
      {{ get_field('we_are_global') }}
    </div>
  </div><!--row-->
</div>


@endsection
