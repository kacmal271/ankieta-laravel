<!-- preferences -->

<div class="bi-mb-1">

  <h4 class="bi-h4">{{ __("Finally, a few preferential questions.") }}</h4>

  <!-- #13-usage -->

  <div>

    <h5 class="bi-h5 bi-text-left">
      
      <span>&#35;13</span>
      
      {{ __("I access websites mainly via:") }}

    </h5>

    <div>

      <!-- large -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="usage"
                  value="large" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("personal computer / laptop") }}</span>

      </label> <!-- /large -->

      <!-- tablet -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="usage"
                  value="tablet" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("tablet") }}</span>

      </label> <!-- /tablet -->

      <!-- handheld -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="usage"
                  value="handheld" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("phone / handheld device") }}</span>

      </label> <!-- /handheld -->

      <!-- other -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="usage"
                  value="other" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("other") }}</span>

      </label> <!-- /other -->

    </div>

  </div> <!-- /#13-usage -->

  <!-- #14-screentime -->

  <div>

    <h5 class="bi-h5 bi-text-left">
      
      <span>&#35;14</span>
      
      {{ __("I think I spend so many hours on the internet:") }}

    </h5>

    <div>

      <!-- 0 -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="screentime"
                  value="0" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">&lt;1</span>

      </label> <!-- /0 -->

      <!-- 1 -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="screentime"
                  value="1" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">1-4</span>

      </label> <!-- /1 -->

      <!-- 5 -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="screentime"
                  value="5" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">5-8</span>

      </label> <!-- /5 -->

      <!-- 8 -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="screentime"
                  value="8" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">8+</span>

      </label> <!-- /8 -->

    </div>

  </div> <!-- /#14-screentime -->

  <!-- #15-venues -->

  <div>

    <h5 class="bi-h5 bi-text-left">
      
      <span>&#35;15</span>
      
      {{ __("What kind of information I look up most often:") }}

    </h5>

    <!-- social -->

    <div>

      {{-- 
      label.checkbox
        div.checkbox-positioner 
          input[type=checkbox]
          div.checkbox-container
        span.checkbox-text --}}

      <label class="bi-checkbox">

        <div class="bi-checkbox-positioner">

          <input type="checkbox" name="venues[]" value="social" />

          <div class="bi-checkbox-container"></div>
        
        </div>

        <span class="bi-checkbox-text">{{ __('social media (example: facebook.com)') }}</span>
      
      </label>

    </div> <!-- /social -->

    <!-- entertainment -->

    <div>

      <label class="bi-checkbox">

        <div class="bi-checkbox-positioner">

          <input type="checkbox" name="venues[]" value="entertainment" />

          <div class="bi-checkbox-container"></div>
        
        </div>

        <span class="bi-checkbox-text">{{ __('entertainment (netflix.com)') }}</span>
      
      </label>
    
    </div> <!-- /entertainment -->

    <!-- ai -->

    <div>

      <label class="bi-checkbox">

        <div class="bi-checkbox-positioner">

          <input type="checkbox" name="venues[]" value="ai" />

          <div class="bi-checkbox-container"></div>
        
        </div>

        <span class="bi-checkbox-text">{{ __('artificial intelligence models (chatgpt.com)') }}</span>
      
      </label>
    
    </div> <!-- /ai -->

    <!-- mail -->

    <div>

      <label class="bi-checkbox">

        <div class="bi-checkbox-positioner">

          <input type="checkbox" name="venues[]" value="mail" />

          <div class="bi-checkbox-container"></div>
        
        </div>

        <span class="bi-checkbox-text">{{ __('mail (gmail.com)') }}</span>
      
      </label>
    
    </div> <!-- /mail -->

    <!-- banking -->

    <div>

      <label class="bi-checkbox">

        <div class="bi-checkbox-positioner">

          <input type="checkbox" name="venues[]" value="banking" />

          <div class="bi-checkbox-container"></div>
        
        </div>

        <span class="bi-checkbox-text">{{ __('banking') }}</span>
      
      </label>
    
    </div> <!-- /banking -->

    <!-- encyclopedic -->

    <div>

      <label class="bi-checkbox">

        <div class="bi-checkbox-positioner">

          <input type="checkbox" name="venues[]" value="encyclopedic" />

          <div class="bi-checkbox-container"></div>
        
        </div>

        <span class="bi-checkbox-text">{{ __('encyclopedic information (wikipedia.org)') }}</span>
      
      </label>
    
    </div> <!-- /encyclopedic -->

    <!-- education -->

    <div>

      <label class="bi-checkbox">

        <div class="bi-checkbox-positioner">

          <input type="checkbox" name="venues[]" value="education" />

          <div class="bi-checkbox-container"></div>
        
        </div>

        <span class="bi-checkbox-text">{{ __('education (khanacademy.org)') }}</span>
      
      </label>
    
    </div> <!-- /education -->

    <!-- scientific -->

    <div>

      <label class="bi-checkbox">

        <div class="bi-checkbox-positioner">

          <input type="checkbox" name="venues[]" value="scientific" />

          <div class="bi-checkbox-container"></div>
        
        </div>

        <span class="bi-checkbox-text">{{ __('scientific information (scholar.google.com)') }}</span>
      
      </label>
    
    </div> <!-- /scientific -->

    <!-- professional -->

    <div>

      <label class="bi-checkbox">

        <div class="bi-checkbox-positioner">

          <input type="checkbox" name="venues[]" value="professional" />

          <div class="bi-checkbox-container"></div>
        
        </div>

        <span class="bi-checkbox-text">{{ __('for work/school related purposes') }}</span>
      
      </label>
    
    </div> <!-- /professional -->
  
  </div> <!-- /#15-venues -->

  <!-- #16-computer-system -->

  <div>

    <span class="bi-block">{{ __("Last question!") }}</span>

    <h5 class="bi-h5 bi-text-left">
      
      <span>&#35;16</span>
      
      {{ __("Which operating system do I use the most:") }}

    </h5>

    <div>

      <!-- win10 -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="computerSystem"
                  value="win10" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Windows 10/11") }}</span>

      </label> <!-- /win10 -->

      <!-- win8 -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="computerSystem"
                  value="win8" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Windows 8/8.1") }}</span>

      </label> <!-- /win8 -->

      <!-- win_old -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="computerSystem"
                  value="win_old" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Windows 7 or older") }}</span>

      </label> <!-- /win_old -->

      <!-- macos -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="computerSystem"
                  value="macos" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("macOS") }}</span>

      </label> <!-- /macos -->

      <!-- ios -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="computerSystem"
                  value="ios" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("iOS") }}</span>

      </label> <!-- /ios -->

      <!-- android -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="computerSystem"
                  value="android" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Android") }}</span>

      </label> <!-- /android -->

      <!-- other -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="computerSystem"
                  value="other" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Other") }}</span>

      </label> <!-- /other -->

    </div>

  </div> <!-- /#16-computer-system -->

</div> <!-- /preferences -->