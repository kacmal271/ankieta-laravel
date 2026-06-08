<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Survey Form Layout
 */

?>

@extends('layout.respondent')

@section('head')

  <title>{{ config('app.name') . ' | ' . __('Survey') }}</title>

  @parent

@endsection

@section('content')

  @parent

@endsection
