//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * TimeViewer
 */

// my

import { BackwardLinks }  from '../../component/fluent/BackwardLinks.tsx';

import { TimeTable }      from '../../component/fluent/TimeTable.tsx';

import { StopPickers }    from '../../component/fluent/StopPickers.tsx';

//-----------------------------------------------------------------------------

export function TimeViewer({
  previousUrls=undefined,
  endStation = null,
  stopPickerData,
  timeViewerData
})
{
  //*****************************************************************************


  return (
    
    <>

      <style>

        {`
        
          table.bi-responsive-fluent
          {
            /* shrink table cells on mobile */
            table-layout: fixed;
          }

              /* styling */
              table.bi-responsive-fluent
              {
                
              }

          table.bi-responsive-fluent tr
          {
            
          }

              /* styling */
              table.bi-responsive-fluent tr + tr
              {
                /* ten wiersz wcześniej */
                
              }

          table.bi-responsive-fluent td,
          table.bi-responsive-fluent th
          {
            border: 0;
            

            /**
             * mobile: scroll
             * desktop: none
             */
            overflow-x: auto;
          }

              /* styling */
              table.bi-responsive-fluent td + td,
              table.bi-responsive-fluent th + th,
              table.bi-responsive-fluent td + th,
              table.bi-responsive-fluent th + td
              {
                /* to pole wcześniej */
                
              }

          table.bi-responsive-fluent td::-webkit-scrollbar,
          table.bi-responsive-fluent th::-webkit-scrollbar
          {
            display: none;
          }
        
        `}

      </style>

      {/** 
        * overflow-wrapper
        * 
        * Firefox for Android expands Elements beyond the screen
        * 
        * .bi-children-all-b-0 clears borders on nested nodes
        */}

      <table className="w-100 bi-responsive-fluent bi-b-0 bi-nowrap">

        <tbody>

          <tr>

            <td>

              <div className="bi-p-2 bi-mha bi-w-max-1024 bi-flexbox bi-flexbox-horizontal">

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

                <div className="bi-quart-fill bi-flexbox-horizontal">

                  <StopPickers
                    isSmall     ={true}
                    currentUrl  ={stopPickerData.requestUrl}
                    contextData ={stopPickerData.departureRoutes}
                    title       ="Przystanki" />

                </div>

              </div>

            </td>

          </tr>
        
        </tbody>

      </table> {/* ./overflow-wrapper */}

    </>

  );
}