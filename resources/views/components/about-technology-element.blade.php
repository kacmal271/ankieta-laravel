<div {{ $attributes->merge(['class' => "bi-w-max-256"]) }}>
  
  {{-- 
    +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    --}}
  
  {{-- 
    - Float Layout
    - 
    -   use case: elements strewn around
    --}}

  <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->

  <fieldset
    class="bi-b-02"

    {{-- color-palette: https://up.poznan.pl/ --}}
    style="border-color: #eaede8;">

    <legend class="bi-icon-holder-128 bi-h-3 bi-ph-1 bi-text-center">

      <a
        target="_blank"
        href="{{ $link }}">
      
        <img
          class="bi-w-100"
          src={{ config("path.url.storage.graphics.credit") . "$imgRelativePath" }} />
      
      </a>

    </legend>

    <!-- link-description -->

    <div>

      <!-- link -->

      <div>

        <a
          target="_blank"
          class="bi-decoration-none"
          href="{{ $link }}">

          <span class="bi-block">

            <span class="bi-link">{{ $name }}</span>
            <i class="icon-link-ext"></i>
          
          </span>
        
        </a>

      </div> <!-- /link -->

      <!-- desciption -->

      <div class="bi-mt-02">

        <span class="bi-block bi-text-justify">{{ $description }}</span>

      </div> <!-- /desciption -->

    </div> <!-- link-description -->

  </fieldset>

</div>