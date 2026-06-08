//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * TimeViewer
 * 
 * page
 */

import { BackwardLinks }  from '../../component/metro/BackwardLinks.jsx';
import { TimeTable }      from '../../component/metro/TimeTable.jsx';
import { StopPickers }    from '../../component/metro/StopPickers.jsx';
import { __ } from '../../../helper/__.js';

export function TimeViewer({

  previousUrls=undefined,

  // default parameter not at the end
  // default parameter is object deconstructed
  endStation = null,

  stopPickerData,
  timeViewerData
})
{

  if (endStation != null)
  {
    // only one route should be printed

    stopPickerData.departureRoutes = extractStopPickerData(
      stopPickerData.departureRoutes
    );
  }

  //*****************************************************************************

  /**
   * local function
   * not member function
   */

  function extractStopPickerData(departureRoutes)
  {
    for (const element of departureRoutes)
    {
      // index = numeric key
      const subElementLastIndex = element.length - 1;
      const lastSubElement = element[subElementLastIndex];

      if (Number(lastSubElement.id) === Number(endStation))
      {
        // MetroStopPicker expects array
        // MetroStopPicker uses: contextData.Array::map
        return [element];
      }
    }
  }

  //*****************************************************************************

  return (

    <>

      <div className="bi-mha bi-w-max-1024 bi-flexbox bi-flexbox-horizontal">

        <div className="bi-single">
    
          <BackwardLinks
            links={ previousUrls } />

        </div>
    
        <div className="bi-children-not-last-pr-1 bi-pr-1 bi-binary-fill bi-flexbox-horizontal bi-flexbox bi-w-max-1024">

          <TimeTable
            tableData={ timeViewerData.hourMinuteTimetables["1"] } />

          <TimeTable
            tableData={ timeViewerData.hourMinuteTimetables["2"] } />

          <TimeTable
            tableData={ timeViewerData.hourMinuteTimetables["3"] } />

        </div>

        <div className="bi-ph-1 bi-quart-fill bi-flexbox-horizontal">

          <StopPickers
            isSmall     ={true}
            currentUrl  ={stopPickerData.requestUrl}
            contextData ={stopPickerData.departureRoutes}
            title       ={ __('Stops') } />

        </div>

      </div>

    </>

  )
}