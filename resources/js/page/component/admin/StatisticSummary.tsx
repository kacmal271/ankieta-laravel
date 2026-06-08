
import { StatisticViewer } from "./StatisticViewer";

export function StatisticSummary({
  $numericData,
  $chartData
})
{

  return (

    <div className="bi-p-1">
    
      { $numericData.map(function (data, index) {

        if (typeof data === `string`)
        {
          // key attribute hit
          return;
        }

        return (

          <div key={ data.id }>
          
            <StatisticViewer
              $title={ data.title }
              $statistic={ data.data } />
          
          </div>

        )
        
      })}
    
      { $chartData.map(function (chart, index) {

        if (typeof chart === `string`)
        {
          // key attribute hit
          return;
        }

        return (

          <div key={ chart.id }>
          
            <StatisticViewer
              $title={ chart.title }
              $statistic={ chart.chart }
              $chartType={ chart.chartType }
              $chartData={ chart.chartData } />
          
          </div>

        )

      })}
    
    </div>

  );

}