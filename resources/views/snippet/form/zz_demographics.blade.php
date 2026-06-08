
<!-- demographics -->

<div>

  <h4 class="bi-h4">{{ __("First, I would like You to share some demographic and health-related information.") }}</h4>

  <div>

    <!-- #1-demographic-age -->

    <h5 class="bi-h5 bi-text-left"><span>&#35;1</span> {{ __("My age:") }}</h5>

    <div class="bi-flexbox">

      <!-- 0-12 -->

      <div class="bi-hex-fill bi-flexbox bi-flexbox-horizontal">

        <label class="bi-radio">

          <div class="bi-radio-positioner">

            <input  type="radio"
                    name="demographicAge"
                    value="0" />

            <div class="bi-radio-container"></div>

          </div>

          <span class="bi-radio-text">&lt;13</span>

        </label>

      </div>

      <!-- 13-18 -->

      <div class="bi-hex-fill bi-flexbox bi-flexbox-horizontal">

        <label class="bi-radio">

          <div class="bi-radio-positioner">

            <input  type="radio"
                    name="demographicAge"
                    value="13" />

            <div class="bi-radio-container"></div>

          </div>

          <span class="bi-radio-text">13-18</span>

        </label>
      
      </div>

      <!-- 19-26 -->

      <div class="bi-hex-fill bi-flexbox bi-flexbox-horizontal">

        <label class="bi-radio">

          <div class="bi-radio-positioner">

            <input  type="radio"
                    name="demographicAge"
                    value="19" />

            <div class="bi-radio-container"></div>

          </div>

          <span class="bi-radio-text">19-26</span>

        </label>

      </div>

      <!-- 27-35 -->

      <div class="bi-hex-fill bi-flexbox bi-flexbox-horizontal">

        <label class="bi-radio">

          <div class="bi-radio-positioner">

            <input  type="radio"
                    name="demographicAge"
                    value="27" />

            <div class="bi-radio-container"></div>

          </div>

          <span class="bi-radio-text">27-35</span>

        </label>
      
      </div>

      <!-- 36-50 -->

      <div class="bi-hex-fill bi-flexbox bi-flexbox-horizontal">

        <label class="bi-radio">

          <div class="bi-radio-positioner">

            <input  type="radio"
                    name="demographicAge"
                    value="36" />

            <div class="bi-radio-container"></div>

          </div>

          <span class="bi-radio-text">36-50</span>

        </label>

      </div>

      <!-- 51-75 -->

      <div class="bi-hex-fill bi-flexbox bi-flexbox-horizontal">

        <label class="bi-radio">

          <div class="bi-radio-positioner">

            <input  type="radio"
                    name="demographicAge"
                    value="51" />

            <div class="bi-radio-container"></div>

          </div>

          <span class="bi-radio-text">51-75</span>

        </label>

      </div>

      <!-- 76+ -->

      <div class="bi-hex-fill bi-flexbox bi-flexbox-horizontal">

        <label class="bi-radio">

          <div class="bi-radio-positioner">

            <input  type="radio"
                    name="demographicAge"
                    value="76" />

            <div class="bi-radio-container"></div>

          </div>

          <span class="bi-radio-text">76+</span>

        </label>

      </div>

    </div> <!-- /#1-demographic-age -->

    <!-- #2-demographic-sex -->

    <h5 class="bi-h5 bi-text-left"><span>&#35;2</span> {{ __("Sex:") }}</h5>

    <div>

      <!-- male -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="demographicSex"
                  value="m" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("male") }}</span>

      </label> <!-- /male -->

      <!-- female -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="demographicSex"
                  value="f" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("female") }}</span>

      </label> <!-- /female -->

    </div> <!-- /#2-demographic-sex -->

    <!-- #3-is-color-blind -->

    <h5 class="bi-h5 bi-text-left"><span>&#35;3</span> {{ __("Do you suffer from a diagnosed color blindness?") }}</h5>

    <div>

      <!-- true -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="isColorBlind"
                  value="true" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("yes") }}</span>

      </label> <!-- /true -->

      <!-- false -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="isColorBlind"
                  value="false" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("no") }}</span>

      </label> <!-- /false -->

    </div> <!-- /#3-is-color-blind -->

    <!-- #4-odd-handed -->

    <h5 class="bi-h5 bi-text-left"><span>&#35;4</span> {{ __("Are you left or right-handed?") }}</h5>

    <div>

      <!-- true -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="oddHanded"
                  value="true" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("left-handed") }}</span>

      </label> <!-- /true -->

      <!-- false -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="oddHanded"
                  value="false" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("right-handed") }}</span>

      </label> <!-- /false -->

    </div> <!-- /#4-odd-handed -->

    <!-- #5-whacked-vision -->

    <h5 class="bi-h5 bi-text-left"><span>&#35;5</span> {{ __("Do you suffer from a visual impairment?") }}</h5>

    <div>

      <!-- true -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="whackedVision"
                  value="true" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("yes") }}</span>

      </label> <!-- /true -->

      <!-- false -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="whackedVision"
                  value="false" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("no") }}</span>

      </label> <!-- /false -->

      <!-- undetermined -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="whackedVision"
                  value="undetermined" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("I don't know") }}</span>

      </label> <!-- /undetermined -->

    </div> <!-- /#5-whacked-vision -->

    <!-- #6-is-glasses -->

    <h5 class="bi-h5 bi-text-left"><span>&#35;6</span> {{ __("Do you use glasses or contact lenses?") }}</h5>

    <div>

      <!-- true -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="isGlasses"
                  value="true" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("yes") }}</span>

      </label> <!-- /true -->

      <!-- false -->

      <label class="bi-radio">

        <div class="bi-radio-positioner">

          <input  type="radio"
                  name="isGlasses"
                  value="false" />

          <div class="bi-radio-container"></div>

        </div>

        <span class="bi-radio-text">{{ __("no") }}</span>

      </label> <!-- /false -->

    </div> <!-- /#6-is-glasses -->

  </div>

</div> <!-- /demographics -->