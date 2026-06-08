<!-- pagination -->
<div class="bi-flexbox-no-media bi-flexbox-horizontal-no-media">

  <nav>

    <!-- horizontal-list -->
    <div class="bi-navigation-horizontal">

      <!-- links -->
      @if ( ! $paginator->onFirstPage())

        <a
          wire:ignore
          href="{{ $paginator->previousPageUrl()}}"
          class="bi-color-pagination-button bi-background-pagination-button bi-button bi-navigation-horizontal-element">

          {!! __('pagination.previous') !!}

        </a>

      @endif

      <!-- current-page -->
      <a
        class="bi-cursor bi-background-pagination-button-active bi-button bi-button-route bi-navigation-horizontal-element"
        disabled>

        {{ $paginator->currentPage() }} &#x2F; {{ $paginator->publicLastPage }}

      </a> <!-- /current-page -->

      @if ($paginator->currentPage() < $paginator->publicLastPage)
    
        <a
          wire:ignore
          href="{{ $paginator->nextPageUrl()}}"
          class="bi-color-pagination-button bi-background-pagination-button bi-button bi-navigation-horizontal-element">

          {!! __('pagination.next') !!}

        </a>

      @endif

      <!-- /links -->

    </div> <!-- /horizontal-list -->

  </nav>

</div> <!-- /pagination -->