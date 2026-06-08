<div

  {{ $attributes }}

  class="bi-p-04 {{ $fontClassValue }} {{ $bgClassValue }}"

  style="{{ $rootStyleValue }}"
  
  >

  <!-- Nothing worth having comes easy. - Theodore Roosevelt -->

  <script>

    /**
     * (A)
     * responsible for dedicated UX solution
     * clicking back anchor should trigger the icon to animate
     */

    document.addEventListener('DOMContentLoaded', () => {

      switch ('{{ $framework }}')
      {
        case 'metro':

          break;
        
        case 'fluent':

          loadFluent();

          break;
        
        default:

          throw new Exception('Unknown frontend framework name');
      }

    });

    //*****************************************************************************

    function loadFluent()
    {
      const anchorBack = document.getElementById('anchorBack');
      const iconBack = document.getElementById('iconBack');

      anchorBack.addEventListener('mousedown', () => {

        // biwork javascript operated class
        iconBack.classList.add('bi-animate-spring-right-150-ease-in-fast');

        setTimeout(() => {

          iconBack.classList.remove('bi-animate-spring-right-150-ease-in-fast');

        }, 150);

      });
    }

  </script>

  <!-- return-link -->

  <div class="bi-text-center">

    <a
      id="anchorBack"
      class="bi-inline-block bi-link"
      href="{{ $returnUrl }}">

      <div class="bi-flexbox-no-media bi-flexbox-vertical-no-media bi-flexbox-horizontal-no-media">

        <i 
          id="iconBack"
          class="icon-left bi-font-xs"></i>

        {{-- 
          - not alike to: windows 11 -> windows settings -> back arrow
          - not alike to: windows 8 -> calendar -> month switcher arrow
          --}}

        {{-- <img
          alt=""
          src="{{ config('path.url.raster') . '/arrow_straight_long.png' }}"
          class="bi-h-04 {{ $imgClassValue }}" /> --}}

        <span class="bi-pl-04">{{ __('Back to Survey') }}</span>
      
      </div>
    
    </a>
  
  </div> <!-- /return-link -->

  <!-- reminder -->
  <div>

    <p class="{{ $questionClassValue }} bi-font-bold bi-text-center">{!! $slot !!}</p>

  </div> <!-- /reminder -->

</div>