<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Inertia Layout
 */

?>

@use('Illuminate\Support\Str')

@extends(isset($framework) ? 'layout.respondent' : 'layout.app')

@section('head')

  <title>{{ $pageTitle }}</title>

  {{-- ---------- --}}
  {{-- Metro Ui 5 --}}
  {{-- ---------- --}}

  {{-- auto load all classes on each request --}}
  {{-- so I dont have to import { ComponentName } --}}
  <meta name="metro:init" content="true">
  
  {{-- doesnt work --}}
  <meta name="metro:info" content="false" />

  <meta name="metro:blur" content="false" />

  {{-- dark theme --}}
  {{-- <meta name="metro:theme" content="dark" /> --}}

  {{-- ------------- --}}
  {{-- Vite, Inertia --}}
  {{-- ------------- --}}

  @viteReactRefresh                 {{-- include @viteReacRefresh before @vite --}}
  @vite(['resources/js/app.jsx'])   {{-- include @vite after @viteReacRefresh --}}
  @inertiaHead                      {{-- include @inertiaHead at the end --}}

  @parent

@endsection

@section('content')

  @parent

  <div class="bi-background bi-flexbox bi-flexbox-horizontal">

    @if (isset($framework))

      {{-- TimetableController --}}

      <x-respondent.framework-wrapper

        :frameworkName="$framework">

        {{-- Blade component: notice context is easy to implement --}}

        <x-respondent.return-bar

          :frameworkName="$framework">

          <span>{!! unserialize(session("survey.subquestion.$framework.subquestion"))() !!}</span>
        
        </x-respondent.return-bar>

        {{-- Inertia: mandatory blade directive --}}

        @inertia

        {{-- Inertia: div#app after blade directives --}}

        {{-- see parent layout --}}
        {{-- don't duplicate id=app --}}
        {{-- <div id="app"></div> --}}

      </x-respondent.framework-wrapper>
    
    @else

      {{-- AdminController --}}

      <style>

        div#app
        {
          width: 100%;
        }
      
      </style>

      @inertia
    
    @endif

    {{-- inform user: page is loading, everything ok --}}

    <div
      class="bi-single"
      id="loading-message">

      <div
        class="bi-text-center"
        data-role="preloader">

        <h5 class="bi-h5 bi-font-bold">{{ Str::apa(__('loading, please wait...')) }}</h4>
        
      </div>

    </div>

  </div>

@endsection