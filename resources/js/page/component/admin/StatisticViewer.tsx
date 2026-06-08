

import { DonutGraph } from './DonutGraph';

export function StatisticViewer({
  $title,
  $statistic,
  $chartType = null,
  $chartData = null,
})
{
  return (

    <>

      <div className="bi-mt-1 bi-background-alt-dark-quart bi-curvy-04 bi-pv-1">

        <div className="bi-pv-01 bi-flexbox bi-flexbox-horizontal-no-media bi-flexbox-vertical-no-media bi-overflow-hidden">

          { $chartType === "donut" && <DonutGraph $chartData={ $chartData } /> }

          { $chartType === null && <span className="bi-font-bold bi-color-black bi-font-xxxl">{ $statistic }</span> }

        </div>

        <div className="bi-pv-01 bi-flexbox bi-flexbox-horizontal-no-media bi-flexbox-vertical-no-media">

          <h6 className="bi-m-0 bi-h6">{ $title }</h6>

        </div>
        
      </div>
    
    </>

  );
} 