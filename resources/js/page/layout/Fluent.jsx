//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Fluent.jsx
 * 
 * defines front-end & back-end of the fluent pages
 */

// shadowing fluent
// blocking external stylesheets
// import { root } from '@fluentui-contrib/react-shadow';

import { TimeViewer }         from '../page/fluent/TimeViewer.tsx';
import { StopPicker }   from '../page/fluent/StopPicker.tsx';
import { LinePicker }   from '../page/fluent/LinePicker.tsx';

//-----------------------------------------------------------------------------

export default function Fluent({
  currentUrl    = null, // app.jsx:
                        // this is added in app.jsx
                        // like if passed through a middleware
  calendarDate  = null, // laravel controller:
                        // sends null by default as well
  serviceType   = null,
  serviceLine   = null,
  endStation    = null,
  currentStop   = null,
  contextData   = null
})
{

  // console log is printed twice to the screen
  // React.js: Developer mode: runs code twice
  // constructor is called twice because of internal mechanisms
  // Production mode: Vite compiles into single calls

  // console.log(`Fluent.jsx reads:    calendarDate   : ${calendarDate}`);
  // console.log(`Fluent.jsx reads:    serviceType    : ${serviceType}`);
  // console.log(`Fluent.jsx reads:    serviceLine    : ${serviceLine}`);
  // console.log(`Fluent.jsx reads:    endStation     : ${endStation}`);
  // console.log(`Fluent.jsx reads:    currentStop    : ${currentStop}`);

  let body = <></>;
  
  if (endStation != null)
  {
    // return Timetable

    body = <>
      
      <TimeViewer
        previousUrls  ={contextData.timeViewerData.previousUrls}
        endStation    ={endStation}
        stopPickerData={contextData.stopPickerData} 
        timeViewerData={contextData.timeViewerData} />

    </>;

  }
  else if (serviceType != null)
  {
    // return Stop Picker

    body = <>
      
      <StopPicker
        previousUrls  ={contextData.stopPickerData.previousUrls}
        currentUrl    ={currentUrl}
        contextData   ={contextData.stopPickerData.departureRoutes} />

    </>;

  }
  else
  {
    // return Line picker

    body = <>

      {/**
        * Generate stylesheet shadow over Fluent UI
        * However, Cannot use Fontello with shadow
        */}

      {/* <root.div> */}

        {/**
          * Custom Components
          *   can be used as:
          *     double markup <></>
          *     single markup </>
          */}

        <LinePicker
          currentUrl={currentUrl}
          calendarDate={calendarDate}
          contextData={contextData.linePickerData} />

      {/* </root.div> */}

    </>;
  }

  //*****************************************************************************

  return (

    <>

      <style>

        {`
        
          .fui-FluentProviderr0
          {
            --fontSizeBase200: 16px;
            --fontSizeBase300: 16px;
          }
        
        `}

      </style>

      {/* depth-wrapper */}

      <div className="bi-pb-4">

        { body }

      </div> {/* ./depth-wrapper */}
    
    </>

  );
}