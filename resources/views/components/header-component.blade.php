<header {{ $attributes->merge(["class" => "bi-curvy-1 bi-curvy-t-0 bi-p-2 bi-header"]) }}>
  
  <!-- He who is contented is rich. - Laozi -->

  <div class="bi-flexbox bi-flexbox-horizontal">

    <a
      target="_self"
      href={{ route('welcome.index') }}
      class="bi-flexbox">

      <img
        alt="logo"
        class="bi-mha bi-w-max-256-no-media"
        src="{{ config('path.url.storage.graphics.graphics') . '/logo_survey_upp.png' }}" />
    
    </a>

  </div>

</header>