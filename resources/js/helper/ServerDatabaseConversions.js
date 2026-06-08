//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * ServerDatabaseConversions
 */

import { __ } from "./__";

//-----------------------------------------------------------------------------

export class ServerDatabaseConversions
{
  //*****************************************************************************

  static getTimePeriodName($timePeriodId)
  {
    return (
      $timePeriodId === 1 ? __('Workdays') :
      $timePeriodId === 2 ? __('Saturdays') :
      $timePeriodId === 3 ? __('Sundays and Holidays') :
      undefined
    );
  }

  //*****************************************************************************

  static groupLinesByService({ serviceTypeLines })
  {
    // split into 4 arrays

    let tramLines     = [];
    let busLines      = [];
    let nightLines    = [];
    let touristLines  = [];
    
    for (const line of serviceTypeLines)
    {

      switch (line.type)
      {
        case "tram":

          // tram

          tramLines.push(line);

          break;

        case "bus":

          busLines.push(line);

          break;

        case "night.service":

          nightLines.push(line);

          break;

        case "tourist.line":

          touristLines.push(line);

          break;

      } // switch

    } // for service

    return {
      tramLines         : tramLines,
      busLines          : busLines,
      nightLines        : nightLines,
      touristLines      : touristLines,
    };
  }
}