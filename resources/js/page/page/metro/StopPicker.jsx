//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * StopPicker
 * 
 * page
 */

import { BackwardLinks }  from '../../component/metro/BackwardLinks.jsx';
import { StopPickers }    from '../../component/metro/StopPickers.jsx';

//-----------------------------------------------------------------------------

/**
 * 
 */

export function StopPicker({
  previousUrls=undefined,
  isSmall     =false,
  currentUrl  =undefined,
  contextData =undefined,
  title       =""
})
{

  //*****************************************************************************
  // return Stop Picker

  return (
    
    <>

      {/* stop-picker-wrapper */}

      <div className="bi-ma bi-w-max-1024">

        <div className="bi-pb-1">

          <BackwardLinks
            links={ previousUrls } />

        </div>

        <StopPickers
          isSmall     ={ isSmall }
          currentUrl  ={ currentUrl }
          contextData ={ contextData }
          title       ={ title } />

      </div> {/* ./stop-picker-wrapper */}

    </>

  );
}