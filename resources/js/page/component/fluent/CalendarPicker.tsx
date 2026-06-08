import * as React from "react";

// fluentui: accordion

import { Accordion }          from "@fluentui/react-components";

import { AccordionHeader }    from "@fluentui/react-components";

import { AccordionItem }      from "@fluentui/react-components";

import { AccordionPanel }     from "@fluentui/react-components";

// fluentui: calendar

import { Calendar12Filled }             from "@fluentui/react-icons";

import { Calendar }                     from "@fluentui/react-calendar-compat";

import { defaultCalendarStrings  }      from "@fluentui/react-calendar-compat";

import { CalendarStrings }              from "@fluentui/react-calendar-compat";

// helper

import { WebDate } from '../../../helper/WebDate.js';

import { __ } from '../../../helper/__.js';

//-----------------------------------------------------------------------------

/**
 * specifiers
 * 
 *   this class is a named export:
 *     "export function"
 * 
 *   this class is not a default export:
 *     "export default function"
 * 
 *   outside code imports as a named export:
 *     "import { Name } from './path/Name.tsx'"
 * 
 * arguments
 * 
 *   props : CalendarProps
 *   
 */

export const CalendarPicker = function({
  calendarDate
}) {
  
  // localization strings
  // strings: CalendarStrings
  // https://react.fluentui.dev/?path=/docs/compat-components-calendar--docs

  const localizedStrings: CalendarStrings = {

    ...defaultCalendarStrings,

    days: [
      __('Monday'),
      __('Tuesday'),
      __('Wednesday'),
      __('Thursday'),
      __('Friday'),
      __('Saturday'),
      __('Sunday'),
    ],

    shortDays: [
      __('Mo'),
      __('Tu'),
      __('We'),
      __('Th'),
      __('Fr'),
      __('Sa'),
      __('Su'),
    ],

    months: [
      __("January"),
      __("February"),
      __("Marc"),
      __("April"),
      __("May"),
      __("June"),
      __("July"),
      __("August"),

      // Septembrie in Fillipino:
      // if you know, you know
      __("September"),

      __("October"),
      __("November"),
      __("December"),
    ],

    shortMonths: [
      __("Jan"),
      __("Feb"),
      __("Mar"),
      __("Apr"),
      __("May"),
      __("Jun"),
      __("Jul"),
      __("Aug"),
      __("Sep"),
      __("Oct"),
      __("Nov"),
      __("Dec"),
    ],

  };

  let minDate = WebDate.getFirstDayOf({ calendarDate: new Date() });
  let maxDate = WebDate.getLastDayOf({ calendarDate: new Date(), monthOffset: 1 });

  const onSelectDate = React.useCallback((date) => {

    const year = date.getFullYear();

    // January index: 0
    let month = (date.getMonth() + 1).toString();

    month = month.length < 2 ? `0${month}` : month;

    let day = date.getDate().toString();
    day = day.length < 2 ? `0${day}` : day;

    const currentUrl = window.location.href;
    const newRoute = `fluent/${year}-${month}-${day}`;
    const routePattern = /fluent\/*(\d{4}-\d{2}-\d{2})*/;
    const newUrl = currentUrl.replace(routePattern, newRoute);
    
    window.location.href = `${newUrl}`;

  }, []);

  // append props
  const props = {
    // dates
    minDate,
    maxDate,
    showGoToToday: false,
    today: new Date(calendarDate),
    // months
    isMonthPickerVisible: false,
    // function
    onSelectDate,
    // localization
    strings: localizedStrings
  };
  
  return (
    
    <>
    
      <Accordion
        collapsible
        className="bi-text-center">

        <AccordionItem

          // AccordionItem value is mandatory
          
          value="calendar">

          <AccordionHeader
            icon={<Calendar12Filled />}>{ __('Pick a day') }</AccordionHeader>

          <AccordionPanel>

            <div
              className="bi-flexbox bi-flexbox-horizontal">

              <Calendar {...props} />

            </div>
          
          </AccordionPanel>
        
        </AccordionItem>
      
      </Accordion>

    </>

  );

}