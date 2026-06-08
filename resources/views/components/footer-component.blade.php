<footer {{ $attributes->merge(["class" => "bi-curvy-1 bi-curvy-b-0 bi-p-2 bi-footer"]) }}>
  
  <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->

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

</footer>