//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * DataPreview.tsx
 */

import { __ } from "../../../helper/__";

import { Pagination } from "./Pagination";

//-----------------------------------------------------------------------------

export function DataPreview({
  $tabularHeader,
  $tabularData,
  $paginator,
  $paginatorOptions
})
{
  //*****************************************************************************

  return (
    
    <>
    
      {/* data-preview */}

      <div>

        {/* title */}

        <div className="bi-mt-1">

          <h4 className="bi-text-left bi-h4">{ __('Unfiltered data preview') }</h4>
        
        </div> {/* ./title */}

        {/* tabular-data */}

        <div className="bi-mha bi-w-100 bi-overflow-auto">

          <table className="bi-responsive-b-01 bi-responsive">

            <tbody>

              <tr>

                { Object.values($tabularHeader).map((headerData) => {

                  if (typeof headerData === `string`)
                  {
                    // return null when: key entry hit

                    return;
                  }

                  return (
                    
                    <th
                      key={ headerData['key'] }
                      className="bi-ph-02 bi-nowrap"
                      >{ headerData['value'] }</th>

                  )

                })}
              
              </tr>

              {/**
                * map(element, index)
                */}

              { $tabularData.map((row, rowIndex) => {

                if (typeof row === `string`)
                {
                  // return null when: key entry hit

                  // empty fragment: also requires key in loop
                  
                  // return <></>;

                  return;
                }

                return (

                  <tr key={ row['key'] }>

                    { Object.values(row).map((attribute) => {
                      
                      if (typeof attribute === `number`)
                      {
                        return;
                      }

                      return (

                        <td
                          key={ attribute['key'] }
                          className="bi-ph-02 bi-nowrap"
                          >{ attribute['value'] }</td>

                      )

                    })}

                  </tr>

                );

              })}

            </tbody>

          </table>

        </div> {/* ./tabular-data */}

        {/* pagination */}

        <div className="bi-text-center bi-mt-1">

          <Pagination
            $paginator={ $paginator }
            $paginatorOptions={ $paginatorOptions } />

        </div> {/* ./pagination */}
      
      </div> {/* data-preview */}
    
    </>

  );
}