//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * https://react.fluentui.dev/?path=/docs/charts_charts-donutchart--docs
 */

// React.CSSProperties
import * as React from "react";

import {
  useState,
  useLayoutEffect
} from 'react';

// 
import {
  DonutChart,
  ChartProps,
  getColorFromToken
} from "@fluentui/react-charts";

//-----------------------------------------------------------------------------

export function DonutGraph({
  $chartData
})
{
  ///////////////////////////////////////////////////////////////////////////////
  // HOOKS

  const [chartData, setChartData] = useState<ChartProps | null>(null);

  const [valueInsideDonut, setValueInsideDonut] = useState<Number>(0);

  useLayoutEffect(() => {

    // prepare chart data *before* first paint
    setChartData(getChartData());
    setValueInsideDonut(getValueInsideDonut());

  }, [ $chartData ]);

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER DATA

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER FUNCTION

  //*****************************************************************************

  function getChartData()
  {
    let chartData: any = [];

    for (let i = 0; i < $chartData.length; i++)
    {
      chartData.push({
        legend: $chartData[i].name,
        data: $chartData[i].value,
        color: getColorFromToken($chartData[i].color)
      });
    }

    const data: ChartProps = { chartData: chartData };

    return data;
  }

  //*****************************************************************************

  function getValueInsideDonut()
  {
    let valueInsideDonut = 0;

    for (let i = 0; i < $chartData.length; i++)
    {
      valueInsideDonut += $chartData[i].value;
    }

    return valueInsideDonut;
  }

  ///////////////////////////////////////////////////////////////////////////////
  // RENDER

  if ( ! chartData)
  {
    return null;
  }

  return (

    <>

      <style>

        {`
        
          *
          {
            /**
             * control legend font size
             * 
             * notice (!) breaks chart horizontalcentering
             * 
             * --fontSizeBase200: 16px;
             */
          }
        
        `}

      </style>

      <DonutChart
        innerRadius={ valueInsideDonut.toString().length * 10 + 10 }
        legendsOverflowText={"overflow Items"}
        valueInsideDonut={ valueInsideDonut.toString() }
        showLabelsInPercent={ true }
        hideLabels={ false }
        data={ chartData } />
    
    </>

  );

};