<?php

namespace App\Livewire\Respondent;

use Livewire\Component;

class TrackingNotice extends Component
{
  //*****************************************************************************

  public function render()
  {
    if (session()->exists('tracking.isClosed'))
    {
      return <<<'HTML'
      
        <div class="bi-display-none"></div>

      HTML;
    }

    return <<<'HTML'

      {{-- The best athlete wants his opponent at his best. --}}

      <div
        class="bi-w-75-no-media bi-background bi-z-index-highest bi-bt-04 bi-p-1 bi-curvy-1 bi-mha bi-w-max-512 bi-box-shadow-down-1 bi-fix-to-bottom-1-center"
        style="border-color: #247151">

        <!-- notice -->

        <div class="bi-text-justify">

          <span>{{ __('This website collects your browser name and operating system name for statistical and comparative purposes. Registration occurs after clicking the survey button.') }}</span>

        </div> <!-- /notice -->
        
        <!-- button -->

        <div class="bi-mt-1 bi-text-center bi-text-center">

          <button
            wire:click="close"
            class="bi-button bi-button-button">{{ __('Close') }}</button>

        </div> <!-- /button -->

      </div>

    HTML;
  }

  //*****************************************************************************

  public function close()
  {
    session(['tracking.isClosed' => true]);
  }
}
