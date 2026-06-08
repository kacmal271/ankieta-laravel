@extends('layout.respondent')

@section('head')

  <title>{{ config('app.name') . ' | ' . __('About.survey') }}</title>

@endsection

@section('content')

  @parent

  <div>

    <x-header-component class="bi-mha bi-w-50 bi-single" />

    <!-- technology-research -->

    <div class="bi-pb-2 bi-ph-1 bi-children-pb-1 bi-children-ph-1 bi-flexbox bi-mt-2">

      <!-- research-wrapper -->

      <div class="bi-binary">

        <!-- research -->

        <div class="bi-p-1 bi-curvy-1 bi-background">

          <!-- research-title -->

          <div class="bi-text-center">

            <h5 class="bi-inline-block bi-h5-line">{{ __("About research") }}</h5>

          </div> <!-- /research-title -->

          <div class="bi-mt-1 bi-text-justify">

            <span class="bi-block">{{ __("Website created for research purposes at the Poznań University of Life Sciences.") }}</span>
            <span class="bi-pt-02 bi-block">{{ __("The survey is intended to collect data for the purposes of a master's thesis in the field of Information Technology and Data Engineering.") }}</span>
            <span class="bi-pt-02 bi-block">{{ __("The data will not be shared, commercialized or processed in any other way than for the purpose stated above.") }}</span>
            <span class="bi-pt-02 bi-block">{{ __("Participation is voluntary, however it is important that each respondent partakes no more than once, filling all the survey fields.") }}</span>

          </div>

          <x-signature class="bi-pt-04" />

        </div> <!-- /research -->
      
      </div> <!-- /research-wrapper -->

      <!-- technology-wrapper -->

      <div class="bi-binary">

        <!-- technology -->

        <div class="bi-p-1 bi-curvy-1 bi-background">

          <!-- technology-title -->

          <div class="bi-text-center">

            <h5 class="bi-inline-block bi-h5-line">{{ __("About technologies") }}</h5>

          </div> <!-- /technology-title -->

          <!-- technology-content -->

          <div class="bi-flexbox bi-flexbox-horizontal bi-children-p-04 bi-mt-1">

            <!-- ztm -->

            <x-about-technology-element
              link="https://www.ztm.poznan.pl/"
              imgRelativePath="/ztm.png"
              :name="__('Poznań Public Transport Authority')"
              :description="__('Archival timetable data.')"
              />

            <!-- npm -->

            <x-about-technology-element
              link="https://www.npmjs.com/"
              imgRelativePath="/npm.png"
              :name="__('Node Package Manager')"
              :description="__('Technology tool.')"
              />

            <!-- fluent -->

            <x-about-technology-element
              link="https://react.fluentui.dev/"
              imgRelativePath="/fluent_2.png"
              :name="__('Fluent UI 2')"
              :description="__('Modern (2017) user interface design system.')"
              />

            <!-- metro -->

            <x-about-technology-element
              link="https://v5.metroui.org.ua/"
              imgRelativePath="/metro_ui.png"
              :name="__('Metro UI 5')"
              :description="__('Prior user interface design language.')"
              />

            <!-- fontello -->

            <x-about-technology-element
              link="https://fontello.com/"
              imgRelativePath="/fontello.png"
              :name="__('Fontello')"
              :description="__('Iconography datasets.')"
              />

            <!-- laravel -->

            <x-about-technology-element
              link="https://laravel.com/"
              imgRelativePath="/laravel.png"
              :name="__('Laravel')"
              :description="__('Web development framework.')"
              />

            <!-- react -->

            <x-about-technology-element
              link="https://react.dev/"
              imgRelativePath="/react.png"
              :name="__('React.js')"
              :description="__('Web user interface framework.')"
              />

            <!-- desmos -->

            <x-about-technology-element
              link="https://www.desmos.com/calculator"
              imgRelativePath="/desmos.png"
              :name="__('Desmos Graphing Calculator')"
              :description="__('Used to calculate animation timings.')"
              />

            <!-- livewire -->

            <x-about-technology-element
              link="https://livewire.laravel.com/"
              imgRelativePath="/livewire.png"
              :name="__('Livewire')"
              :description="__('Reactive websites framework, built with Laravel.')"
              />

            <!-- toptal -->

            <x-about-technology-element
              link="https://www.toptal.com/designers/subtlepatterns"
              imgRelativePath="/toptal.png"
              :name="__('Toptal Subtle Patterns')"
              :description='__("Content sharing platform. Patterns used are named as follows: \"Leaves 2 Pattern\".")'
              />

          </div> <!-- /technology-content -->
      
        </div> <!-- technology -->

      </div> <!-- /technology-wrapper -->

    </div> <!-- /technology-research -->

  </div>

@endsection