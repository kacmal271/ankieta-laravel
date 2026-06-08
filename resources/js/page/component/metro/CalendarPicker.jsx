//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * CalendarPicker.jsx
 * 
 * Table of Contents
 * # INTERCEPT METRO UI 5 COMPONENT EVENT
 */

// react js

import * as React from "react";

// my js

// relative path as good as './'
import { WebDate } from '../../../helper/WebDate.js';
import { __ } from "../../../helper/__.js";

//-----------------------------------------------------------------------------

export function CalendarPicker({
  calendarDate  = null, // laravel controller:
                        // sends null by default as well
})
{

  const dataLabel = ``;

  let minDate = WebDate.getFirstDayOf({ calendarDate: new Date() });
  let maxDate = WebDate.getLastDayOf({ calendarDate: new Date(), monthOffset: 1 });

  // metro ui 5 follows: [from, to)
  maxDate = new Date(maxDate.getFullYear(), maxDate.getMonth(), maxDate.getDate() + 1);

  // maxDate = new Date(maxDate.year, maxDate.month, maxDate.date + 1);
  
  const isPopUp = window.innerWidth <= 512 ? "true" : "false";

  //*****************************************************************************

  /**
   * equivalent to: DOMContentLoaded
   * 
   * extra functionality: emits DOMContentLoaded on page changes
   *   that's why name: "React".js
   */

  React.useEffect(() => {

    // INTERCEPT METRO UI 5 COMPONENT EVENT

    // built-in jquery
    $("#calendarPicker")
      // adding Events to Metro UI 5, finally found it ...?
      .on("dayClick", function(event) {

        const design = 'metro';

        // console log event to get metadata
        const dateString = event.detail.sel;

        const date = new Date(dateString);

        const year = date.getFullYear();

        // January index: 0
        const month = (date.getMonth() + 1).toString();

        // precede with leading zeros
        const monthLeadingZero = month.length < 2 ? `0${month}` : month;

        const day = date.getDate().toString();
        const dayLeadingZero = day.length < 2 ? `0${day}` : day;

        const currentUrl = window.location.href;
        const newRoute = `${design}/${year}-${monthLeadingZero}-${dayLeadingZero}`;
        const routePattern = new RegExp(`${design}\\/*(\\d{4}-\\d{2}-\\d{2})*`);
        const newUrl = currentUrl.replace(routePattern, newRoute);
        
        window.location.href = `${newUrl}`;

      });

  });

  ///////////////////////////////////////////////////////////////////////////////

  return (
    
    <>

      <style>

        {/**
          * author: olton
          * framework: metro ui 5
          *   notes that you should customize the components
          *   with classful css
          * 
          * */}


        {`
          /**
           * resize label text
           */

          .label-for-input
          {
            font-size: inherit;
            text-transform: none;
          }

          /**
           * hide calendar button in input box
           */

          div.input div
          {
            width: 100%;
          }

          div.input div.button-group
          {
            display: none;
          }

          #calendarPicker
          {
            cursor: pointer;
          }

          /**
           * hide year choice
           */

          .prev-year,
          .curr-year,
          .next-year
          {
            display: none !important;
          }

          .calendar .today .day-content
          {
            background: none;
            font-weight: normal;
          }

        `}

      </style>

      {/* calendar-wrapper */}

      <div className="bi-flexbox bi-flexbox-horizontal bi-text-center">

        {/* calendar-positioner */}
    
        <div className="bi-binary bi-inline-block bi-pointer">

          {/* calendar-picker-label */}

          <label htmlFor="calendarPicker">

            <div

              // Metro Ui 5: css variable"
              style={{ border: "1px var(--input-border-color) solid" }}

              className="bi-font-m bi-pv-04 bi-text-center">

              <i className='mif-calendar'></i>
              <span className="bi-pl-04">{ __("Pick a day") }</span>

                    {/**
                      * React.js forbids:
                      * using comments in pattern: {/* / <- slash first
                      */}

            </div>

          </label> {/* ./calendar-picker-label */}

          {/* calendar-picker */}

          <input

            // properties

            id="calendarPicker"
            className="bi-curvy-0 bi-inline-block bi-outline-0 mt-1"
            data-outside="false"
            data-role="calendar-picker"
            data-label={dataLabel}

            // required: properly formatted short date
            // (A) set to: mm-dd-yyy
            data-value={calendarDate.toLocaleDateString('en')}

            // (!) optional: apply hyphen
            // (A) updated to: dd-mm-yyy
            data-format="DD-MM-YYYY"
            
            data-min-date={minDate}
            data-max-date={maxDate}
            
            // mobile adaptability
            data-dialog-mode={ isPopUp }
            
            /> {/* ./calendar-picker */}

        </div> {/* ./calendar-positioner */}
      
      </div> {/* ./calendar-wrapper */}
    
    </>

  );
}