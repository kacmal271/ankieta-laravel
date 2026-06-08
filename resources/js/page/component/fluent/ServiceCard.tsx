//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * ServiceCard
 */

import { Url } from "../../../helper/Url.js";

import { Card } from "@fluentui/react-components";

import { Button } from '@fluentui/react-components';

//-----------------------------------------------------------------------------

export const ServiceCard = function({
  iconName,
  titleString,
  currentUrl,
  contextData
})
{

  let lineCounter = 0;

  //*****************************************************************************

  return (

    <>

      <Card>

        {/* wrapper */}

        <div className="bi-ph-2">

          {/* intruduction */}

          <div className="bi-mb-04">

            <i className={ iconName }></i>

            <span className="bi-pl-04">{ titleString }</span>

          </div> {/* /intruduction */}

          {/* lines */}

          <div>

            {contextData.map(line => {

              lineCounter++;

              return (

                <div
                  // each mapped child requires: unique 'key' property value
                  key={ lineCounter }

                  className="bi-inline-block bi-pr-1 bi-mt-04">

                  <Button
                    href={ Url.appendResource({
                      $url: currentUrl,
                      $resourceString: `/${line.type}/${line.no}`
                    }) }
                    appearance="secondary"
                    size="small"
                    shape="circular"
                    as="a">{ line.no }</Button>


                </div>

              );

            })}

          </div> {/* /lines */}

        </div> {/* /wrapper */}
            
      </Card>

    </>

  );

}