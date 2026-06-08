@extends('layout.app')

@section('head')

  <title>{{ config('app.name') . ' | ' . __('Login') }}</title>

@endsection

@section('content')

  <!-- padding-wrapper -->

  <div class="bi-pv-2">

    <!-- content-wrapper -->

    <div class="bi-curvy-1 bi-p-1 bi-mha bi-background bi-w-max-512">

      <header class="bi-single">

        <div>

          {{-- 
            - bi-icon-holder-256: flex
            --}}

          <a
            class="bi-mha bi-icon-holder-256"
            href="{{ route('auth.index') }}">

            <img
              class="bi-w-100"
              src="{{ config('path.url.storage.graphics.graphics') . "/logo_survey_upp.png" }}"
              alt="logo" />
          
          </a>

        </div>

        <div class="bi-mt-1">

          <h5 class="text-left bi-h5">{{ __('Please enter the credentials') }}</h5>

        </div>

      </header>

      <main class="bi-single bi-flexbox bi-flexbox-horizontal">

        <form
          action="{{ route('auth.show') }}"
          method="post"
          class="bi-single bi-flexbox">
              
          @csrf

          <!-- name -->

          <x-form.fieldset-input
            labelToTranslate="Login"
            inputName="name"
            inputType="text" />

          <!-- /name -->

          <!-- password -->

          <x-form.fieldset-input
            class="bi-mt-1"
            labelToTranslate="Password"
            inputName="password"
            inputType="password" />

          <!-- /password -->

          <!-- remember-me -->

          <div class="bi-single bi-flexbox bi-flexbox-horizontal-space">

            <div class="bi-mt-1 bi-pl-1 bi-b-0">

              <label class="bi-checkbox">

                <div class="bi-checkbox-positioner">

                  <input
                    name="remember"
                    id="remember"
                    type="checkbox"
                    tabindex="10" />
                  
                  <div class="bi-checkbox-container"></div>

                </div>

                <span class="bi-checkbox-text">{{ __('Remember me') }}</span>

              </label>

            </div>

          </div> <!-- /remember-me -->

          <!-- login-button -->

          <div class="bi-mt-1 bi-single bi-flexbox bi-flexbox-horizontal-right">

            <button
              class="bi-button bi-button-submit bi-w-100"
              tabindex="20"> {{ __("Log in") }}</button>

          </div> <!-- /login-button -->
        
        </form>

      </main>

    </div> <!-- /content-wrapper -->

  <div> <!-- /padding-wrapper -->

  @error('status-bar')

    <x-status-bar
      class="bi-font-bold bi-color-white bi-background-error"
      :message="$message" />

  @enderror

@endsection