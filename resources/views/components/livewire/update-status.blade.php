<div {{ $attributes }}>
  
  <!-- He who is contented is rich. - Laozi -->

  {{-- 
    - component should be as little CSS as possible
    - component should be as universal as possible
    --}}

  <div>

    {{-- update error: after all answer controls --}}
    @if ($errors->has("error.$questionAnswerName"))

      <!-- update-fail -->

      <span
        wire:loading.remove
        class="bi-animate-flash-linear bi-font-bold bi-color-error">{{ $errors->first("error.$questionAnswerName") }}</span> <!-- update-fail -->
    
    @endif
    
    {{-- update success: after all answer controls --}}
    @if ($errors->has("success.$questionAnswerName"))

      <!-- update-success -->

      <span
        wire:loading.remove
        class="bi-animate-flash-linear bi-font-bold bi-color-ok">{{ $errors->first("success.$questionAnswerName") }}</span> <!-- update-success -->
    
    @endif

    <span>&nbsp;</span>

  </div>

</div>