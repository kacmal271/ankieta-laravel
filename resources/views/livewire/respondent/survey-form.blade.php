<div class="bi-pt-2 bi-pr-1 bi-pl-1 bi-w-75 bi-mha">

  {{-- Do your work, then step back. --}}

  <!-- form-questions -->

  <div class="bi-children-curvy-1 bi-children-mb-1 bi-children-p-2 bi-children-pb-1 bi-mb-1">

    @foreach ($categoriesQuestionsAnswers as $category)

      <!-- category -->

      <div
        wire:key={{ $category->id }}
        class="bi-border bi-bt-1 bi-background">

        <h3 class="bi-text-left bi-h3">{{ __($category->category) }}</h3>

      </div> <!-- /category -->

      @foreach ($category->questions as $question)

        <!-- question -->

        <div
          wire:key={{ $category->id . $question->id }}
          id="{{ $question->id }}"
          class="bi-bl-1-hover bi-background">

          <!-- question-title -->

          <div>
            
            <h4 class="bi-h4 bi-text-left">
              
              <span>{{ $question->orderNumber }}&#x2E;</span>
              <span wire:ignore>{!! $question->question !!}</span>
            
            </h4>

          </div> <!-- /question-title -->

          @if ( ! is_null($question->subquestion))

            <!-- question-subtitle -->

            <div>
              
              <h5 class="bi-h5 bi-text-left">
                
                <span>{!! __($question->subquestion) !!}</span>
              
              </h5>

            </div> <!-- /question-subtitle -->

          @endif

          <!-- answers -->

          <div class="bi-children-mb-1 bi-children-pr-1 bi-flexbox bi-flexbox-horizontal-left-no-media">

            @forelse ($question->answers as $answer)

              <!-- answer -->

                @switch ($question->input_type)

                  {{-----------}}
                  {{-- radio --}}
                  {{-----------}}
                  
                  @case ('radio')

                    <div
                      wire:key={{ $category->id . $question->id . $answer->id }}
                      class="@if ( ! is_null($answer->picture)) bi-single @endif">

                      <label class="bi-pointer">

                        <!-- radio-control -->

                        <label class="bi-radio">

                          <div class="bi-radio-positioner">

                            <input
                              wire:click="update( $event.target.name, $event.target.value )"
                              type="{{ $question->input_type }}"
                              name="{{ $answer->answer_name }}"
                              value="{{ $answer->value }}"
                              @if ($answersRecord->{$answer->answer_name} == $answer->value ?? false) checked @endif
                              />

                            <div class="bi-radio-container"></div>

                          </div>

                          <span class="bi-font-l bi-radio-text">{{ __($answer->answer) }}</span>

                        </label> <!-- radio-control -->

                        @if ( ! is_null($answer->picture))

                          <!-- hint-image -->

                          <div
                            class="bi-mt-04"
                            style="border: 1px dashed gray">

                            <img
                              class="bi-vh-max-50 bi-w-max-100"
                              src="{{ config('path.url.storage.graphics.graphics') . $answer->picture->path_relative_url }}"
                              alt="{{ __($answer->answer) }}" />

                          </div> <!-- hint-image -->

                        @endif
                      
                      </label>
                    
                    </div>

                    @if ($loop->last)
                      
                      <x-livewire.update-status
                        class="bi-h-1 bi-overflow-visible bi-single"
                        :questionAnswerName="$answer->answer_name" />

                    @endif

                    @break

                  {{--------------}}
                  {{-- checkbox --}}
                  {{--------------}}

                  @case ('checkbox')

                    <!-- checkbox -->

                    <div
                      wire:key={{ $category->id . $question->id . $answer->id }}
                      class="bi-single">

                      {{-- 
                        label.checkbox
                          div.checkbox-positioner 
                            input[type=checkbox]
                            div.checkbox-container
                          span.checkbox-text --}}

                      <label class="bi-checkbox">

                        <div class="bi-checkbox-positioner">

                          <input
                            {{-- JavaScript shor-circuiting && --}}
                            wire:change="update($event.target.name, $event.target.checked ? $event.target.value : 0)"
                            type="{{ $question->input_type }}"
                            name="{{ $answer->answer_name }}"
                            value="{{ $answer->value }}"
                            @if ($answersRecord->{$answer->answer_name} == $answer->value ?? false) checked @endif
                            />

                          <div class="bi-checkbox-container"></div>
                        
                        </div>

                        <span class="bi-font-l bi-checkbox-text">{{ __($answer->answer) }}</span>
                      
                      </label>

                    </div> <!-- /checkbox -->

                    <x-livewire.update-status
                      class="bi-h-1 bi-overflow-visible bi-single"
                      :questionAnswerName="$answer->answer_name" />

                    @break

                  @default

                    {{ __('No data.') }}

                    @break

                @endswitch
              
              <!-- /answer -->
            
            @empty

              <!-- answer -->

                @switch ($question->input_type)

                  {{------------}}
                  {{-- select --}}
                  {{------------}}

                  @case ('select')

                    @foreach (session("survey.question_answers.{$question->context}.answers") as $questionAnswer)

                      @if ($loop->first)

                        <!-- select-wrapper -->

                        <div
                          wire:key={{ "session_" . $category->id . $question->id }}
                          class="bi-single">

                          @php $questionAnswerName = session("survey.question_answers.{$question->context}.name"); @endphp

                          <select
                            wire:change="update( $event.target.name, $event.target.value )"
                            name="{{ $questionAnswerName }}"
                            class="bi-w-min-128 bi-font-l">

                                <option value="null">{{ __('...') }}</option>

                      @endif

                                <option
                                  wire:key={{ "session_option_" . $category->id . $question->id . $questionAnswer->id }}
                                  value="{{ $questionAnswer->value }}"
                                  @if ($answersRecord->{ $questionAnswerName } == $questionAnswer->value ?? false) selected @endif
                                  >{{ __($questionAnswer->label) }}</option>
                      
                      @if ($loop->last)

                          </select>

                        </div> <!-- /select-wrapper -->
                        
                        <!-- update-status -->

                        <x-livewire.update-status
                          class="bi-h-1 bi-overflow-visible bi-single"
                          :questionAnswerName="$questionAnswerName" />

                        <!-- /update-status -->
                      
                      @endif
                        
                    @endforeach

                    @break

                  @default

                    {{ __('No data.') }}

                    @break

                @endswitch
              
              <!-- /answer -->
            
            @endforelse

          </div> <!-- /answers -->

        </div> <!-- /question -->

      @endforeach
    
    @endforeach

  </div> <!-- form-questions -->

  @if ($paginator->currentPage() == $paginator->publicLastPage)

    <!-- form-submit-wrapper -->

    <div>

      <!-- form-submit -->

      <div>

        <button
          wire:click="finish"
          class="bi-button bi-button-submit">

          <span>{{ __("Finish") }}</span>
        
        </button>

      </div> <!-- form-submit -->

      @error("error.finish")

        <!-- form-submit-error -->

        <div class="bi-mt-04">

          <span class="bi-font-bold bi-color-error">{{ $message }}</span>

        </div> <!-- /form-submit-error -->

      @enderror
    
    </div> <!-- /form-submit-wrapper -->

  @endif

  <div class="bi-mt-2">

    {{ $paginator->links('snippet.pagination') }}

  </div>

  <x-footer-component class="bi-mt-2" />

</div>