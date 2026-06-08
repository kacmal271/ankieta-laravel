<div {{ $attributes->merge(['class' => "bi-w-100"]) }}>
  
  <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

  <label>

    <fieldset>

      <legend>{{ __($labelToTranslate) }}</legend>

      <div>

        <input
          name="{{ $inputName }}"
          class="bi-font-l bi-outline-0 bi-b-0 bi-w-100"
          tabindex="1"
          id="{{ $inputName }}"
          value="{{ old($inputName) }}"
          autocomplete="off"
          type="{{ $inputType }}" />

      </div>

    </fieldset>

  </label>

  @error($inputName)

    <div class="bi-font-bold bi-mt-04">

      <span class="bi-color-error">{{ $message }}</span>

    </div>
        
  @enderror

</div>