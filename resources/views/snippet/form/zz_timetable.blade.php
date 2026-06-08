<!-- timetable -->

<div>

  <h4 class="bi-h4">{{ __("Now, please complete the following challenges.") }}</h4>

  <!-- #7-first-timetable -->

  <div>

    <h5 class="bi-h5 bi-text-left">
      
      <span>&#35;7</span>

      @php $timetable = __('Timetable'); @endphp
      
      {!!
        __("Please find information concerting a bus timetable :icon by clicking the link: :link and then returning to the survey...", [
          'icon' => '<i class="icon-bus"></i>',
          'link' => "<a target='_self' href='{$linkMetro}'>{$timetable} <i class='icon-link-ext'></i></a>"
        ])
      !!}
    
    </h5>

    <p>{{ __("Please complete the sentence correctly:") }}</p>

    <p>{{ __("What time does the last tram of line no. 2 depart from the 'Wspólna' stop towards 'Aleje Marcinkowskiego' on Saturday?") }}</p>

    <div>
    
      <select name="firstTimetable">

        <option value="0">...</option>
        <option value="1">{{ __("04:51 AM") }}</option>
        <option value="2">{{ __("08:01 AM") }}</option>
        <option value="3">{{ __("05:01 PM") }}</option>
        <option value="4">{{ __("09:02 PM") }}</option>
      
      </select>
    
    </div>

  </div> <!-- /7-first-timetable -->

  <!-- #8-first-timetable-score -->

  <div>

    <h5 class="bi-h5 bi-text-left"">
      
      <span>&#35;8</span>
      
      {{ __("How do I rate the accuracy of the information I have found in the timetable?") }}
    
    </h5>

    <div>

      <!-- uncertain -->

      <label class="bi-bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="firstTimetableScore"
                  value="0" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Uncertain Information") }}</span>

      </label> <!-- /uncertain -->

      <!-- rather-uncertain -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="firstTimetableScore"
                  value="1" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Information Rather Uncertain") }}</span>

      </label> <!-- /rather-uncertain -->

      <!-- dont-know -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="firstTimetableScore"
                  value="2" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("I don't know") }}</span>

      </label> <!-- /dont-know -->

      <!-- rather-certain -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="firstTimetableScore"
                  value="3" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Information Rather Certain") }}</span>

      </label> <!-- /rather-certain -->

      <!-- certain -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="firstTimetableScore"
                  value="4" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Certain Information") }}</span>

      </label> <!-- /certain -->

    </div>

  </div> <!-- /#8-first-timetable-score -->

  <!-- #9-second-timetable -->

  <div>

    <h5 class="bi-h5 bi-text-left">
      
      <span>&#35;9</span>
      
      {!!
        __("Please find information on a night bus timetable :icon by clicking here: :link and returning to the survey...", [
          'icon' => '<i class="icon-moon"></i>',
          'link' => "<a target='_self' href='{$linkFluent}'>{$timetable} <i class='icon-link-ext'></i></a>"
        ])
      !!}
    
    </h5>

    <p>{{ __("Please complete the sentence correctly:") }}</p>

    <p>{{ __("How many times does night bus no. 211 transit due the 'Garbary PKM' station on weekdays?") }}</p>

    <div>
    
      <select name="secondTimetable">

        <option value="0">...</option>
        <option value="1">{{ __("0") }}</option>
        <option value="2">{{ __("1") }}</option>
        <option value="3">{{ __("2") }}</option>
        <option value="4">{{ __("3") }}</option>
      
      </select>
    
    </div>

  </div> <!-- /#9-second-timetable -->

  <!-- #10-second-timetable-score -->

  <div>

    <h5 class="bi-h5 bi-text-left"">
      
      <span>&#35;10</span>
      
      {{ __("How do I rate the accuracy of the information I have found in the timetable?") }}
    
    </h5>

    <div>

      <!-- uncertain -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="secondTimetableScore"
                  value="0" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Uncertain Information") }}</span>

      </label> <!-- /uncertain -->

      <!-- rather-uncertain -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="secondTimetableScore"
                  value="1" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Information Rather Uncertain") }}</span>

      </label> <!-- /rather-uncertain -->

      <!-- dont-know -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="secondTimetableScore"
                  value="2" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("I don't know") }}</span>

      </label> <!-- /dont-know -->

      <!-- rather-certain -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="secondTimetableScore"
                  value="3" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Information Rather Certain") }}</span>

      </label> <!-- /rather-certain -->

      <!-- certain -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="secondTimetableScore"
                  value="4" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("Certain Information") }}</span>

      </label> <!-- /certain -->

    </div>

  </div> <!-- /#10-second-timetable-score -->

  <!-- #11-time-to-find -->

  <div>

    <h5 class="bi-h5 bi-text-left"">
      
      <span>&#35;11</span>
      
      {{ __("On which website was it faster to find the information?") }}
    
    </h5>

    <div class="bi-flexbox">

      <!-- metro -->

      <div class="bi-quart-fill">

        <label>

          <!-- radio-control -->

          <div>

            <label class="bi-radio">

              <div class="bi-radio-positioner">

                <input  type="radio"
                        name="timeToFind"
                        value="metro" />

                <div class="bi-radio-container"></div>

              </div>

              <span class="bi-radio-text">{{ __("Website 1.") }}</span>

            </label>

          </div> <!-- /radio-control -->

          <!-- website-image -->

          <div>

            <img src="" alt="website" />

          </div> <!-- /website-image -->
        
        </label>
      
      </div> <!-- /metro -->

      <!-- fluent -->

      <div class="bi-quart-fill">

        <label>

          <!-- radio-control -->

          <div>

            <label class="bi-radio">

              <div class="bi-radio-positioner">

                <input  type="radio"
                        name="timeToFind"
                        value="fluent" />

                <div class="bi-radio-container"></div>

              </div>

              <span class="bi-radio-text">{{ __("Website 2.") }}</span>

            </label>

          </div> <!-- /radio-control -->

          <!-- website-image -->

          <div>

            <img src="" alt="website" />

          </div> <!-- /website-image -->
        
        </label>
      
      </div> <!-- /fluent -->

      <!-- both -->

      <div class="bi-quart-fill">

        <label class="bi-radio">

          <div class="bi-radio-positioner">

            <input  type="radio"
                    name="timeToFind"
                    value="both" />

            <div class="bi-radio-container"></div>

          </div>

          <span class="bi-radio-text">{{ __("Similarly") }}</span>

        </label>

      </div> <!-- /both -->

    </div>

  </div> <!-- /#11-time-to-find -->

  <!-- #12-looks -->

  <div>

    <h5 class="bi-h5 bi-text-left"">
      
      <span>&#35;12</span>
      
      {{ __("Which page appears more readable?") }}
    
    </h5>

    <div class="bi-flexbox">

      <!-- metro -->

      <div class="bi-quart-fill">

        <label>

          <!-- radio-control -->

          <div>

            <label class="bi-radio">

              <div class="bi-radio-positioner">

                <input  type="radio"
                        name="looks"
                        value="metro" />

                <div class="bi-radio-container"></div>

              </div>

              <span class="bi-radio-text">{{ __("Website 1.") }}</span>

            </label>

          </div> <!-- /radio-control -->

          <!-- website-image -->

          <div>

            <img src="" alt="website" />

          </div> <!-- /website-image -->
        
        </label>
      
      </div> <!-- /metro -->

      <!-- fluent -->

      <div class="bi-quart-fill">

        <label>

          <!-- radio-control -->

          <div>

            <label class="bi-radio">

              <div class="bi-radio-positioner">

                <input  type="radio"
                        name="looks"
                        value="fluent" />

                <div class="bi-radio-container"></div>

              </div>

              <span class="bi-radio-text">{{ __("Website 2.") }}</span>

            </label>

          </div> <!-- /radio-control -->

          <!-- website-image -->

          <div>

            <img src="" alt="website" />

          </div> <!-- /website-image -->
        
        </label>
      
      </div> <!-- /fluent -->

      <!-- both -->

      <div class="bi-quart-fill">

        <label class="bi-radio">

          <div class="bi-radio-positioner">

            <input  type="radio"
                    name="looks"
                    value="both" />

            <div class="bi-radio-container"></div>

          </div>

          <span class="bi-radio-text">{{ __("Similarly") }}</span>

        </label> 

      </div> <!-- /both -->

    </div>

  </div> <!-- /#12-looks -->

</div> <!-- /timetable -->