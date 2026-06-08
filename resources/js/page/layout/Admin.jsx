//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Admin.jsx
 * 
 * ja zakladam w tym projekcie ze jest tylko 1 user: admin
 */

import { useEcho } from "@laravel/echo-react";

// Components
import { NavigationButtons } from "../component/admin/NavigationButtons.tsx";

// Pages
import { IndexDownload } from "../page/admin/IndexDownload.tsx";
import { IndexStatistics } from "../page/admin/IndexStatistics.tsx";

// Helper
import { AdminIndex } from "../../helper/enumeration/admin/AdminIndex.js";

import { __ } from "../../helper/__.js";

//-----------------------------------------------------------------------------

export default function Admin({
  $admin,
  $adminIndex,
  $contextData,
  $csrf_field = null
})
{
  ///////////////////////////////////////////////////////////////////////////////
  // Hooks

  /**
   * React.js Setup
   */

  // useEcho(
  //   `file.${$admin.id}`,
  //   `.FileDownloadReady`,
  //   (e) => {
  //     console.log(e.downloadLink);
  //   }
  // );

  window.Echo.channel(`file.${$admin.id}`)
    .listen('.FileDownloadReady', (e) => {
      window.location.href = e.downloadLink
    });

  ///////////////////////////////////////////////////////////////////////////////
  // Data

  let bodyContext = <></>;

  switch ($adminIndex)
  {
    case AdminIndex.Download:

      bodyContext = <>
      
        <IndexDownload
          $contextData={ $contextData }
          $csrf_field={ $csrf_field } />
      
      </>;

      break;
    
    case AdminIndex.Statistics:

      bodyContext = <>
      
        <IndexStatistics
          $statisticsData={$contextData} />
      
      </>;

      break;
    
    default:

      throw new Exception("Cannot find AdminIndex enum entry");
  }

  ///////////////////////////////////////////////////////////////////////////////
  // Render
  
  return (

    <>

      <div className="bi-ph-1 bi-mha bi-mb-1 bi-children-mt-1 bi-w-1024">

        <div>

          <h5
            className="text-left bi-h5"
            >{ __('Hello, :name in the admin backrooms.', {
              ':name': $admin.name
            }) }</h5>

        </div>

        <div>

          <NavigationButtons
            $adminIndex={$adminIndex} />

        </div>

        <div>

          { bodyContext }

        </div>

      </div>
    
    </>

  );
}