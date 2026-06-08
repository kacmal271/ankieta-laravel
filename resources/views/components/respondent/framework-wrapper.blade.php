<div

  {{ $attributes }}

  {{--
    - note: use "class", not "className"
    -       Blade Components, not React.js
    --}}
  class="{{ $rootClassValue }}">
  
  {{ $slot }}

  <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->

</div>