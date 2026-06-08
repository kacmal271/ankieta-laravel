//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * TimeTable
 * 
 * single table instance
 * 
 * Table of Contents
 * # KEY IS REQUIRED
 */

// fluent ui

import {
  TableBody,
  TableCell,
  TableRow,
  Table,
  TableHeader,
  TableHeaderCell
} from "@fluentui/react-components";

// my

import { WebDate } from "../../../helper/WebDate.js";

import { __ } from "../../../helper/__.js";

import { ServerDatabaseConversions } from "../../../helper/ServerDatabaseConversions.js";

//-----------------------------------------------------------------------------

export function TimeTable({ tableData })
{

  if (tableData.length === 0)
  {
    return <></>;
  }

  const dataCellCount = getLongestHour(tableData);

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

  function getMarkupKey(context)
  {
    // prepare unique key

    const departureWrapper = Object.values(tableData)
      .find(element => ! Array.isArray(element));

    const departure = Object.values(departureWrapper)
      .find(departure => ! (departure.id === null));

    return departure.id + Number(context).toString();
  }

  //*****************************************************************************

  /**
   * jsx elements in array
   * array has to be initialized
   * Array.push() member function
   */

  function padWithDataCells($howMany)
  {
    // declare array as library datatype

    let dataCells = [
      <TableCell key={ "table_cell_0" }></TableCell>,
    ];

    // remove extra element
    //   0: elements required
    //   returns: 1 element

    dataCells.pop();

    for (let i = 0; i < $howMany; i++)
    {
      // # KEY IS REQUIRED

      // key is required: any loop
      // key is required: not just map()
      // key is required: in external helper too

      dataCells.push(<TableCell key={ "table_cell_" + (i+1) }></TableCell>);
    }

    // return proper # of elements

    return dataCells;
  }

  //*****************************************************************************

  /**
   * input:   [1: [1,2], 2: [1,4,8]]
   * output:  3
   */

  function getLongestHour($tableData)
  {
    let maximum = 0;

    for (const hour in $tableData)
    {
      const objectLength = Object.keys($tableData[hour]).length

      if (objectLength > maximum)
      {
        maximum = objectLength;
      }
    }

    return maximum;
  }

  //*****************************************************************************

  return (

    <>

      <div className="bi-mb-1 bi-w-min-256 bi-quart-fill">

        <div className="bi-mb-1">

          <h4 className="bi-text-left bi-h4-line">{ $timePeriodName }</h4>

        </div>

        <div>

          <Table
            arial-label={ `${$timePeriodName}` }>

            <TableHeader>

              <TableRow>

                <TableHeaderCell>

                  <span className="bi-overflow-hidden bi-font-bold">{ __('Hour') }</span>

                </TableHeaderCell>

                <TableHeaderCell>

                  <span className="bi-overflow-hidden bi-font-bold">{ __('Minute') }</span>

                </TableHeaderCell>

              </TableRow>

            </TableHeader>

            <TableBody>

              { Object.keys(tableData).map((hour) => {

                return (

                  <TableRow key={ getMarkupKey(hour) }>

                    <TableHeaderCell>
                      
                      <span className="bi-inline-block-middle">{ WebDate.prefixWithZero({ number: hour }) }</span>

                    </TableHeaderCell>

                    { // print-minutes
                      // react.js: cannot use comments outside {}
                      // react.js: cannot use comments inside <tr>
                      // react.js: treasts comments{} as text nodes
                    
                      Object.keys(tableData[hour]).length === 0 ?

                        // minute-empty

                        <TableCell>
                          
                          <span className="bi-inline-block-middle">&#x2D;</span>
                        
                        </TableCell> :

                        // ./minute-empty

                        // minute-number

                        Object.keys(tableData[hour])
                              .map((minute) => {
                        
                          return (
                          
                            <TableCell key={ getMarkupKey(hour + minute) }>
                          
                              <span className="bi-inline-block-middle">{ WebDate.prefixWithZero({ number: minute }) }</span>
                            
                            </TableCell>

                          );

                          // ./minute-number
                          
                        }) // note: corresponding {( above on the same line

                        // ./print-minutes

                    }

                    { // pad-empty-row
                    
                      Object.keys(tableData[hour]).length === 0 ? 
                    
                      padWithDataCells(dataCellCount - 1) :

                      <></>

                      // ./pad-empty-row

                    }

                    { // pad-half-filled-row

                      Object.keys(tableData[hour]).length > 0 &&
                      Object.keys(tableData[hour]).length < dataCellCount ? 
                    
                      padWithDataCells(dataCellCount - Object.keys(tableData[hour]).length) :

                      <></>

                      // ./pad-half-filled-row

                    }

                  </TableRow>

                )

              })}

            </TableBody>

          </Table>

        </div>

      </div>

    </>

  );
}