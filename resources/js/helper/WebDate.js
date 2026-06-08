//-----------------------------------------------------------------------------

export class WebDate
{
  
  //*****************************************************************************

  static getFirstDayOf({ calendarDate = Date(null), monthOffset = 0, yearOffset = 0 })
  {
    // read selected date (origin: url router string)
    const today = calendarDate;
    const currentYear = today.getFullYear();
    
    // index start: 0
    const currentMonth = today.getMonth();

    // select offset month
    const offsetMonth = currentMonth + monthOffset;

    const offsetYear = currentYear + yearOffset;

    const firstDay = new Date(offsetYear, offsetMonth, 1);

    return firstDay;
  }
  
  //*****************************************************************************

  static getLastDayOf({ calendarDate = Date(null), monthOffset = 0, yearOffset = 0 })
  {
    // read selected date (origin: url router string)
    const today = calendarDate;
    const currentYear = today.getFullYear();
    const currentMonth = today.getMonth(); // index start: 0

    // select offset month
    // [A] "+ 1": picking previous day
    const offsetMonth = currentMonth + monthOffset + 1;

    const offsetYear = currentYear + yearOffset;

    // [A]
    const lastDay = new Date(offsetYear, offsetMonth, 0);

    return lastDay;
  }

  //*****************************************************************************

  static prefixWithZero({ number })
  {
    // handle string-wise
    number = number.toString().trim();

    if (Number(number) != number)
    {
      // non-invasive, no exception
      
      return number;
    }

    if (number.length > 1)
    {
      // 10 or more
      return number;
    }

    // 0-9
    return `0${number}`;
  }
}