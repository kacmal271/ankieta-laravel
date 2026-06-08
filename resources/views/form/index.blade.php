@extends('layout.survey')

@section('head')

  @parent

@endsection

@section('content')

  @parent

  <livewire:respondent.survey-form />

@endsection