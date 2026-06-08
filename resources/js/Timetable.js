//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Table of Contents
 * # MODIFICATION OF: props
 */

"use strict";

import { Url }        from './helper/Url.js';

//-----------------------------------------------------------------------------

export class Timetable
{

  //*****************************************************************************

  /**
   * middleware = preprocessor
   */

  static middlewareProps(props)
  {
    
    /**
     * this = class Timetable
     * given function: static
     * console.log(this);
     */

    switch (props.initialPage.component)
    {
      case "Fluent":
      case "Metro":

        props = this.#middlewareDates(props);
        props = this.#middlewareLinks(props);

        break;
    }

    return props;
  }

  //*****************************************************************************

  static #middlewareDates(props)
  {
    // calendar: highlighting chosen date
    let calendarDate = props.initialPage.props.calendarDate;

    calendarDate = calendarDate === null ?
      new Date() :
      new Date(calendarDate);
    
      // initialPage is valid even after Vite compilation
    props.initialPage.props.calendarDate = calendarDate;

    return props;
  }

  //*****************************************************************************

  static #middlewareLinks(props)
  {
    const stopPickerData = props.initialPage.props.contextData.stopPickerData;
    const timeViewerData = props.initialPage.props.contextData.timeViewerData;

    const stopData = Timetable.#middlewareLinksInObject(stopPickerData);
    const timeData = Timetable.#middlewareLinksInObject(timeViewerData);

    props.initialPage.props.contextData.stopPickerData = stopData;
    props.initialPage.props.contextData.timeViewerData = timeData;

    // get current url
    const currentUrl = Url.getCurrent();

    props.initialPage.props.currentUrl = currentUrl;

    return props;
  }

  //*****************************************************************************

  static #middlewareLinksInObject($object)
  {
    if ($object == null)
    {
      return $object;
    }

    for (const key in $object.previousUrls)
    {
      // http://link.com..
      const link = $object.previousUrls[key].link;

      if (link !== undefined)
      {
        // MODIFICATION OF: props
        const appendedLink = Url.appendQueryString({ $url: link });

        $object.previousUrls[key].link = appendedLink;
      }
    }

    return $object;
  }
}