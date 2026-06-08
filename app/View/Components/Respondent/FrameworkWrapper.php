<?php

namespace App\View\Components\Respondent;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrameworkWrapper extends Component
{
  /**
   * Create a new component instance.
   */

  public function __construct(
    public string $frameworkName,
    public string $rootClassValue   = ''
  )
  {
    switch ($frameworkName)
    {
      case "metro":

        $this->rootClassValue = "bi-w-100";

        break;
      
      case "fluent":

        $this->rootClassValue = "bi-w-75";

        break;
      
      default:

        throw new \Exception("Blade Component :: FrameworkWrapper :: Cannot find frontend framework name");
    }
  }
  
  /**
   * Get the view / contents that represent the component.
   */

  public function render(): View|Closure|string
  {
    return view('components.respondent.framework-wrapper');
  }
}
