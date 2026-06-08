<?php

namespace App\View\Components\Respondent;

use Illuminate\Support\Str;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReturnBar extends Component
{
  //*****************************************************************************

  /**
   * Create a new component instance.
   */

  public function __construct(
    public string $frameworkName,
    public string $fontClassValue       = '',
    public string $imgClassValue        = '',
    public string $bgClassValue         = '',
    public string $rootStyleValue       = '',
    public string $questionClassValue   = ''
  )
  {
    switch ($frameworkName)
    {
      case "metro":

        // metro is white on red

        $this->fontClassValue = "bi-color-white";
        $this->imgClassValue = "bi-filter-bleach";
        $this->bgClassValue = "bi-background-auburn-dark";

        $this->rootStyleValue = "
          width: 100%;
          left: 0rem;
          z-index: 1000;
          position: sticky;
          top: 0rem;
          font-size: 16px;
          line-height: normal;
        ";

        $this->questionClassValue = "bi-mv-04";

        break;
      
      case "fluent":

        // fluent is black on white

        $this->fontClassValue = "bi-color-black";
        $this->imgClassValue = "bi-filter-blacken";

        // background color inherited from body
        // giving the component a feeling of translucency
        $this->bgClassValue = "bi-z-index-highest bi-stick-to-top bi-mb-1 bi-curvy-b-1";

        // taken from fluent ui 2: fluent ui for react v9
        $this->rootStyleValue = "
          background-color: rgba(255, 255, 255, 0.95) !important;
          font-size: 16px;
          line-height: normal;
          box-shadow: 0 0 2px rgba(0,0,0,0.12), 0 4px 8px rgba(0,0,0,0.14);
        ";

        $this->questionClassValue = "bi-mv-04";

        break;
      
      default:

        throw new \Exception("Blade Component :: ReturnBar :: Cannot find frontend framework name");
    }
  }

  //*****************************************************************************
  
  /**
   * Get the view / contents that represent the component.
   */

  public function render(): View|Closure|string
  {
    // get return url
    $callbackLink = request()->query('callbackLink');
    $callbackId = request()->query('callbackId');

    $returnUrl = "$callbackLink#$callbackId";
    
    return view('components.respondent.return-bar', [
      'returnUrl' => $returnUrl
    ]);
  }
}
