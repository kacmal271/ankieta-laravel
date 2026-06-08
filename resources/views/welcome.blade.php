@extends('layout.respondent')

@section('head')

  <title>{{ config('app.name') . ' | ' . __('Start') }}</title>

@endsection

@section('content')

  @parent

  <!-- start-wrapper -->

  <div class="bi-mha bi-w-50">

    <x-header-component class="bi-mb-1" />

    <div class="bi-ph-1">

      <div>

        <h5 class="bi-text-left bi-h5">{{ __("Good day, we would like to invite you to take part in the following survey, which is a foundation for conducting a scientific study for a master's thesis.") }}</h5>

        <h3 class="bi-text-left bi-h3">{{ __('The survey concerns the problem of information searching on the Internet.') }}

      </div>

      <div class="bi-text-left">

        <form
          class="bi-inline-block"
          method="post"
          action="{{ route('welcome.create') }}">

          @csrf

          <button class="bi-color-white bi-link bi-button bi-button-route">{{ __('Start') }}</button>

        </form>

        <a
          target="_self"
          href="{{ route('about') }}"
          class="bi-decoration-none bi-inline-block bi-pl-1 bi-font-l">

          <span class="bi-link">{{ __("About survey") }}</span>
          <i class="icon-link"></i>
        
        </a>
      
      </div>

      @error('model-save')

        <div class="bi-mt-1">

          <span class="bi-font-bold bi-color-error">{{ $message }}</span>

        </div>

      @enderror

    </div>

  </div> <!-- /start-wrapper -->

@endsection