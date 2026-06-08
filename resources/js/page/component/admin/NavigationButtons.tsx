//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * NavigationButtons.tsx
 */

import { __ } from "../../../helper/__.js";

import { AdminIndex } from "../../../helper/enumeration/admin/AdminIndex.js";
import { Url } from "../../../helper/Url.js";

//-----------------------------------------------------------------------------

export function NavigationButtons({
  $adminIndex     = null
})
{
  

  //*****************************************************************************

  function changeUrl($fromAdminIndex, $toAdminIndex)
  {
    return Url.updateResource({ $from: $fromAdminIndex, $to: $toAdminIndex });
  }

  //*****************************************************************************
  
  return (

    <>

      {/* buttons-navigation */}

      <div className="bi-children-not-last-pr-04 bi-navigation-horizontal">

        <div className="bi-navigation-horizontal-element">

          <a
            className={ ($adminIndex == AdminIndex.Download ? `bi-active` : `bi-inactive`) + ` bi-button`}
            href={ (() => changeUrl($adminIndex, AdminIndex.Download))() }
            >{ __('Download.noun') }</a>

        </div>

        <div className="bi-navigation-horizontal-element">

          <a
            className={ ($adminIndex == AdminIndex.Statistics ? `bi-active` : `bi-inactive`) + ` bi-button`}
            href={ (() => changeUrl($adminIndex, AdminIndex.Statistics))() }
            >{ __('Statistics') }</a>

        </div>

      </div> {/* ./buttons-navigation */}
    
    </>

  );
}