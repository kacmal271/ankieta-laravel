<div class="bi-background-black-binary bi-vh-100 bi-vw-100 bi-fix-to-top bi-z-index-highest">
  
  {{-- Nothing in the world is as soft and yielding as water. --}}

  {{-- wrapper --}}

  <div class="bi-w-75-no-media bi-w-max-512 bi-absolute-center-top-1">

    {{-- title --}}

    <div class="bi-curvy-t-1 bi-p-1 bi-background-alt-dark">

      <h3 class="bi-flexbox bi-flexbox-horizontal-no-media bi-flexbox-vertical-no-media bi-children-not-last-pr-1 bi-color-white bi-h3">
      
        <span>{{ __('Select Language') }}</span>
        <span><i class="icon-dribbble"></i></span>
      
      </h3>

    </div> {{-- /title --}}

    {{-- flags --}}

    <div class="bi-text-center bi-p-2 bi-curvy-b-1 bi-background-binary">

      {{-- button-pl --}}

      <div class="bi-mb-2">

        <biwork-icon-button
          anchorLink="{{ route('localize', ['locale' => 'pl']) }}"
          imageSource="{{ config('path.url.storage.graphics.languageChooser') . '/flag_of_poland.jpg' }}"
          >Polski</biwork-icon-button>

      </div> {{-- /button-pl --}}

      {{-- button-en --}}

      <div class="bi-mb-2">

        <biwork-icon-button
          anchorLink="{{ route('localize', ['locale' => 'en']) }}"
          imageSource="{{ config('path.url.storage.graphics.languageChooser') . '/flag_of_the_usa.jpg' }}"
          >English</biwork-icon-button>

      </div> {{-- /button-en --}}

    </div> {{-- /flags --}}

  </div> {{-- /wrapper --}}

</div>
