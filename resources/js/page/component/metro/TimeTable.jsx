
import { __ } from '../../../helper/__.js';

import { WebDate } from "../../../helper/WebDate.js";

import { ServerDatabaseConversions } from "../../../helper/ServerDatabaseConversions.js";

//-----------------------------------------------------------------------------

export function TimeTable({ tableData })
{
  if (tableData.length === 0)
  {
    // (A) hide empty TimeTable

    return <></>;
  }

  // (A) get first value of nested object and return
  // return what all nested objects hold
  const $timePeriodId =
    // immediately called expression
    (() => {
    // for-of: object loop
    for (let $hour in tableData)
    {
      // object[variable] noation: get property value
      for (let $departure in tableData[$hour])
      {
        // console.log(tableData[$hour][$departure].time_period_id);
        // 1 work days
        // 2 saturdays
        // 3 sundays

        if (tableData[$hour][$departure].length !== 0)
        {
          // (A) get first NON-NULL value of nested object
          return tableData[$hour][$departure].time_period_id;
        }
      }
    }
  })();
  
  const $timePeriodName = ServerDatabaseConversions.getTimePeriodName($timePeriodId);

  //*****************************************************************************

  return (

    <>

      <style>

        {`
        
          :root
          {
            --table-striped-background: #E9E9E9
          }
        
        `}

      </style>
    
      <div className="bi-mb-1 bi-w-min-256 bi-quart-fill">

        <div className="bi-mb-1">

          <h4 className="bi-text-left bi-h4-line">{ $timePeriodName }</h4>

        </div>

        <div>

          <table className="bi-curvy-0 table striped">

            <tbody>

              {/* .map()     can    return( HTML )  */}
              {/* .forEach() cannot return( HTML )  */}

              { Object.keys(tableData).map((hour) => {

                return (

                  <tr

                    // unique key
                    key={hour}

                    className="bi-mv-01 bi-block">

                    <th

                      // hour
                      // cannot comment {/* directly inside <tr> */}

                      className="bi-border-gray bi-font-l bi-bb-1 bi-bl-1 bi-h-2 bi-w-2 bi-text-center">
                      
                      <span>{ WebDate.prefixWithZero({ number: hour }) }</span>
                    
                    </th>

                    { Object.keys(tableData[hour]).length === 0 ?

                        // minute-empty

                        <td className="bi-border-gray bi-font-l bi-bb-1 bi-bl-1 bi-h-2 bi-w-2 bi-text-center">&#x2D;</td> :

                        // ./minute-empty

                        // minute-number

                        Object.keys(tableData[hour])
                              .map((minute) => {
                        
                          return <td

                                  // unique key
                                  key={hour + minute}

                                  className="bi-border-gray bi-font-l bi-bb-1 bi-bl-1 bi-h-2 bi-w-2 bi-text-center">
                          
                              <span>{ WebDate.prefixWithZero({ number: minute }) }</span>
                            
                            </td>;

                          // ./minute-number

                        }) // note: corresponding {( above on the same line
                    
                    }

                  </tr>

                );

              }) }

            </tbody>

          </table>

        </div>

      </div>

    </>

  );
}