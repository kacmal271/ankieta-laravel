//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Metro.jsx
 * 
 * cannot outsource rendering <SubComponents>
 * return () is strictly bound to the context of this component
 */

// metro ui
import "@olton/metroui";
import "@olton/metroui/source/reset/index.js";
import "@olton/metroui/source/runtime.js";

// add common css
import "@olton/metroui/source/common-css/index.js";

// add colors
import "@olton/metroui/source/colors-css/index.js";

import { TimeViewer } from '../page/metro/TimeViewer.jsx';
import { StopPicker } from '../page/metro/StopPicker.jsx';
import { LinePicker } from '../page/metro/LinePicker.jsx';

export default function Metro({
  currentUrl    = null, // app.jsx:
                        // this is added in app.jsx
                        // like if passed through a middleware
  calendarDate  = null, // laravel controller:
                        // sends null by default as well
  serviceType   = null,
  serviceLine   = null,
  endStation    = null,
  currentStop   = null,
  contextData   = null  // parsed automatically
}) {

  let body = <></>;

  if (endStation != null)
  {
    // return Timetable

    body = <>

      <div className="bi-m-1">
      
        <TimeViewer
          previousUrls  ={contextData.timeViewerData.previousUrls}
          endStation    ={endStation}
          stopPickerData={contextData.stopPickerData} 
          timeViewerData={contextData.timeViewerData} />

      </div>

    </>;

  }
  else if (serviceType != null)
  {
    // return Stop picker

    body = <>

      <div className="bi-m-1">
      
        <StopPicker
          previousUrls  ={contextData.stopPickerData.previousUrls}
          currentUrl    ={currentUrl}
          contextData   ={contextData.stopPickerData.departureRoutes} />

      </div>

    </>;

  }
  else
  {
    // return Line picker

    body = <>

      <div className="bi-m-1">
      
        <LinePicker
          currentUrl={currentUrl}
          calendarDate={calendarDate}
          contextData={contextData.linePickerData} />

      </div>

    </>;

  }

  //*****************************************************************************

  return (

    <>

      { body }
    
    </>

  );
}