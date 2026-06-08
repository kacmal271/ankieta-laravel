//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * StopPicker
 */

import { BackwardLinks }  from '../../component/fluent/BackwardLinks.tsx';
import { StopPickers }    from '../../component/fluent/StopPickers.tsx';

//-----------------------------------------------------------------------------



export function StopPicker({
  previousUrls=undefined,
  isSmall     =false,
  currentUrl  =undefined,
  contextData =undefined,
  title       =""
})
{

  //*****************************************************************************

  return (
    
    <>

      <div className="bi-p-2">

        <BackwardLinks
          links={ previousUrls } />

        <StopPickers
          isSmall     ={ isSmall }
          currentUrl  ={ currentUrl }
          contextData ={ contextData }
          title       ={ title } />

      </div>

    </>

  );
}