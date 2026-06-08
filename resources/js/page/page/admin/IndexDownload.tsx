//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * IndexDownload.tsx
 */

import { DataDownload } from "../../component/admin/DataDownload";
import { DataPreview } from "../../component/admin/DataPreview";

//-----------------------------------------------------------------------------

export function IndexDownload({
  $contextData,
  $csrf_field
})
{

  //*****************************************************************************
  // Render

  return (
    
    <>

      {/**
        * contenatize inside: <div>
        * easy to implement as: a component
        **/}

      <div>

        <DataDownload
          $downloadLink={ $contextData.downloadLink }
          $csrf_field={ $csrf_field } />

        <DataPreview
          $tabularHeader={ $contextData.tabularHeader }
          $tabularData={ $contextData.tabularData }
          $paginator={ $contextData.paginator }
          $paginatorOptions={ $contextData.paginatorOptions } />

      </div>

    </>

  );
}