@extends('layout.respondent')

@section('head')

  <title>{{ config('app.name') . ' | ' . __('Thank You.I') }}</title>

@endsection

@section('content')

  @parent

  <!-- thank-you-wrapper -->

  <div class="bi-pb-2 bi-mha bi-w-50">

    <x-header-component />

    <div class="bi-ph-1">

      <h3 class="bi-text-left bi-h3">
      
        <span>{{ __("Thank you for participating.") }}</span>

        <a
          target="_self"
          href="{{ route('about') }}"
          class="bi-pl-04 bi-font-s bi-decoration-none bi-inline-block">

          <span class="bi-link">{{ __("About survey") }}</span>
          <i class="icon-link"></i>
      
        </a>

      </h3>

      <x-signature />

    </div>

  </div> <!-- /thank-you-wrapper -->

@endsection