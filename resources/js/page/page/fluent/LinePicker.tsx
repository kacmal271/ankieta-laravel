//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * LinePicker
 * 
 * Fluent: routing: first page
 */

import { __ } from '../../../helper/__.js';

import { ServerDatabaseConversions }    from '../../../helper/ServerDatabaseConversions.js';

import { CalendarPicker }       from '../../component/fluent/CalendarPicker.tsx';

import { ServiceCard }          from '../../component/fluent/ServiceCard.tsx';

//-----------------------------------------------------------------------------

/**
 * this class is a named export:
 *   "export function"
 * 
 * this class is not a default export:
 *   "export default function"
 * 
 * outside code imports as a named export:
 *   "import { Name } from './path/Name.tsx'"
 */

export function LinePicker({
  currentUrl,
  calendarDate,
  contextData
})
{

  // split into 4 arrays

  const {
    tramLines     : tramLines,
    busLines      : busLines,
    nightLines    : nightLines,
    touristLines  : touristLines,
  } = ServerDatabaseConversions.groupLinesByService({
    serviceTypeLines: contextData.serviceLines
  });

  //*****************************************************************************
  // Render

  return (
    
    <>

      <CalendarPicker
        calendarDate={calendarDate} />
        
      <ServiceCard
        iconName="icon-train"
        titleString={ __('Tram.adjective') }
        currentUrl={currentUrl}
        contextData={tramLines} />
        
      <ServiceCard
        iconName="icon-bus"
        titleString={ __('Bus.adjective') }
        currentUrl={currentUrl}
        contextData={busLines} />
        
      <ServiceCard
        iconName="icon-moon"
        titleString={ __('Night.adjective') }
        currentUrl={currentUrl}
        contextData={nightLines} />
        
      <ServiceCard
        iconName="icon-suitcase"
        titleString={ __('Tourist.adjective') }
        currentUrl={currentUrl}
        contextData={touristLines} />

    </>

  );
}