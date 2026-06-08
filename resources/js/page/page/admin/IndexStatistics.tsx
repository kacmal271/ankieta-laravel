//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * IndexStatistics.tsx
 */

import { __ } from "../../../helper/__";

import { StatisticSummary } from "../../component/admin/StatisticSummary";

//-----------------------------------------------------------------------------

export function IndexStatistics({
  $statisticsData
})
{
  ///////////////////////////////////////////////////////////////////////////////
  // HOOKS

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER DATA

  const data = {

    dataTotal: {

      id: `dataTotal`,

      numericData: [

        {
          id: `dataTotalTotal`,
          title: __(`All surveys`),
          data: $statisticsData[`surveys.count.total`]
        },

        {
          id: `dataTotalFilled`,
          title: __(`Filled surveys`),
          data: $statisticsData[`surveys.count.filled`]
        },

        {
          id: `dataTotalNull`,
          title: __(`Incomplete surveys`),
          data: $statisticsData[`surveys.count.null`]
        },

      ],

      chartData: [

        {
          id: `dataTotalChart`,
          title: __(`Filled to Incomplete`),
          chartType: `donut`,

          chartData: [

            {
              name: __(`Filled`),
              value: $statisticsData[`surveys.count.filled`],
              color: `#9164fa`
            },

            {
              name: __(`Incomplete`),
              value: $statisticsData[`surveys.count.null`],
              color: `rgba(127, 127, 127, 1)`
            }

          ]
          
        }

      ]

    },

    correctData: {

      id: `correctData`,

      numericData: [

        {
          id: `correctDataCorrect`,
          title: __(`Correct surveys`),
          data: $statisticsData[`surveys.count.correct`]
        },

        {
          id: `correctDataIncorrect`,
          title: __(`Incorrect surveys`),
          data: $statisticsData[`surveys.count.incorrect`]
        }

      ],

      chartData: [

        {
          id: `correctDataChart`,
          title: __(`Correct to Incorrect`),
          chartType: `donut`,

          chartData: [

            {
              name: __(`Correct`),
              value: $statisticsData[`surveys.count.correct`],
              color: `#9164fa`
            },

            {
              name: __(`Incorrect`),
              value: $statisticsData[`surveys.count.incorrect`],
              color: `rgba(127, 127, 127, 1)`
            }

          ]

        }

      ]

    },

    correctControlledData: {

      id: `correctControlledData`,

      numericData: [

        {
          id: `numericDataCorrectControlled`,
          title: __(`Correct and Controlled`),
          data: $statisticsData[`surveys.count.correctControlled`]
        },

        {
          id: `numericDataCorrectControlledOther`,
          title: __(`Other`),
          data: $statisticsData[`surveys.count.correctControlledOther`]
        }

      ],

      chartData: [

        {
          id: `numericDataChart`,
          title: __(`Correct and Controlled to Other`),
          chartType: `donut`,

          chartData: [

            {
              name: __(`Correct and Controlled`),
              value: $statisticsData[`surveys.count.correctControlled`],
              color: `#9164fa`
            },

            {
              name: __(`Other`),
              value: $statisticsData[`surveys.count.correctControlledOther`],
              color: `rgba(127, 127, 127, 1)`
            }

          ]

        }

      ]

    }

  };

  ///////////////////////////////////////////////////////////////////////////////
  // MEMBER FUNCTION

  //*****************************************************************************
  // Render

  return (
    
    <div>
    
      {/**
        * contenatize inside: <div>
        * easy to implement as: a component
        **/}
      
      <div className="bi-flexbox bi-w-min-512 bi-children-ph-1">

        { Object.values(data).map(function (categoryData) {

          return (

            <div
              key={ categoryData.id }
              className="bi-w-50 bi-binary">

              <StatisticSummary
                $numericData={ categoryData.numericData }
                $chartData={ categoryData.chartData } />

            </div>

          )

        })}

      </div>

    </div>

  );
}