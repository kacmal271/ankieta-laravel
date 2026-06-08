//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * StopPickers.jsx
 * 
 * component
 */

import { __ } from '../../../helper/__.js';

import { Url } from "../../../helper/Url.js";

import { PATH_URL_STORAGE_GRAPHICS } from '../../../env.js';

//-----------------------------------------------------------------------------

/**
 * 
 */

export function StopPickers({
  isSmall     =false,
  currentUrl  =null,
  contextData =null,
  title       =""
})
{

  const fontSizeClass = {
    img       : isSmall ? 'bi-w-2'    : 'bi-w-3',
    title     : isSmall ? 'bi-font-l' : 'bi-font-xl',
    paragraph : isSmall ? 'bi-font-m' : 'bi-font-l'
  }

  //*****************************************************************************

  // return Stop Picker

  return (
    
    <>

      {/* routes-title */}

      { (() => {
        
        if (title != null && Boolean(title) !== false)
        {

          return (

            <div className="bi-mb-1">

              <h4 className="bi-text-left bi-h4-line">{ title }</h4>

            </div>

          );

        }

      })()} {/* ./routes-title */}

      {/* routes-wrapper */}

      <div className="bi-flexbox">

        {/**
          * assert: contextData exists and it is contentful 
          **/}

        { contextData == null || contextData.length === 0 ?

          <div className="bi-binary-fill bi-ph-1">

            <span>{ __('The timetable for this line is inactive.') }</span>

          </div> :
        
          contextData.map((oneWayRoute) => 

          /* route-wrapper */

          <div
            // take off service stops
            // should be 2
            key={ contextData.indexOf(oneWayRoute) }
            className="bi-mt-04 bi-binary-fill bi-ph-1">

            {/* route-background */}

            <div className="bi-nowrap bi-p-2 bi-background-puke-green-binary">
              
              {/* destination */}

              <div className="bi-mb-1">

                {/**
                  * this is how you resolve rogue text nodes
                  * text nodes such as the one below trouble Firefox for Android
                  * */}

                <table className="bi-b-0 bi-text-ellipsis bi-responsive">

                  <tbody>

                    <tr>

                      <td>

                        <span className={ fontSizeClass.title }>{ __('To:') } { oneWayRoute[oneWayRoute.length - 1].name }</span>

                      </td>

                    </tr>

                  </tbody>

                </table>
              
              </div> {/* ./destination */}

              { oneWayRoute.map((routeStop) => 

                /* one-way-route */

                <a
                  key={ routeStop.id }

                  // endStation is .id
                  // currentStop is also .id
                  href={ Url.appendResource({
                    $url: currentUrl,
                    $resourceString: `/${oneWayRoute[oneWayRoute.length - 1].id}/${routeStop.id}`
                  }) }

                  /* metro ui 5: adds a:hover text decoration */
                  className="bi-decoration-none bi-reset-style">

                  <div className="bi-overflow-auto bi-pointer bi-p-04 bi-background-puke-green-quart-hover bi-mt-04">

                    {/* zone-letter */}

                    <div className="bi-float-left bi-w-max-25 bi-pr-04">

                      <img
                        className={ fontSizeClass.img }
                        alt=""
                        src={ PATH_URL_STORAGE_GRAPHICS + '/zone_a.svg' } />

                    </div> {/* ./zone-letter */}

                    {/* stop-name */}

                    <div className="bi-float-left bi-w-max-75">

                      {/**
                        * this is how you resolve rogue text nodes
                        * text nodes such as the one below trouble Firefox for Android
                        * */}

                      <table className="bi-b-0 bi-text-ellipsis bi-responsive">

                        <tbody>

                          <tr>

                            <td>

                              <span className={ `bi-color-black ${ fontSizeClass.paragraph }`}>{ routeStop.name }</span>

                            </td>

                          </tr>

                        </tbody>

                      </table>

                    </div> {/* ./stop-name */}

                  </div>

                </a> /* ./one-way-route */

              ) }
            
            </div> {/* ./route-background */}

          </div> /* ./route-wrapper */

        ) }

      </div> {/* ./routes-wrapper */}

    </>

  );
}