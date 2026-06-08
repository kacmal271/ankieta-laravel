//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * StopPickers, as component
 */

import { __ } from '../../../helper/__.js';

import { Url } from "../../../helper/Url.js";

import { Card } from "@fluentui/react-components";

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
}) {

  const animationSpeed = 250;
  const animationStartState = `height: 0.5rem;`;
  const animationEndState = `height: 2rem;`;

  const fontSizeClass = {
    img       : isSmall ? 'bi-w-2'    : 'bi-w-4',
    title     : isSmall ? 'bi-font-l' : 'bi-font-xl',
    paragraph : isSmall ? 'bi-font-m' : 'bi-font-l'
  }

  //*****************************************************************************

  /**
   * onClick delegate handler
   */

  function animateLinkItem(event, elementId)
  {
    const linkItem = event.target;

    const animation = document.createElement('div');

    animation.classList.add('background-link-item-before');

    linkItem.appendChild(animation);

    animation.classList.add('animate-click');

    window.setTimeout(() => {

      linkItem.removeChild(animation);

    }, animationSpeed);
  }

  //*****************************************************************************

  // return Stop Picker

  return (
    
    <>

      <style>

        {`
        
          @keyframes animateExpand
          {
            0%    { ${animationStartState} }
            100%  { ${animationEndState} }
          }

          @-webkit-keyframes animateExpand
          {
            0%    { ${animationStartState} }
            100%  { ${animationEndState} }
          }

          .animate-click {
            /* 250 / 1000 = 0.25 */
            animation: animateExpand ${animationSpeed / 1000}s ease-in;
            -webkit-animation: animateExpand ${animationSpeed / 1000}s ease-in;
          }

          .background-link-item-before {

            ${animationStartState}
            
            display: block;
            transform: translate(0%, -50%);
            left: -0.4rem;
            top: 50%;
            position: absolute;
            border-radius: 1000rem;
            border: 0.125rem solid #d585ff;
            content: '';
          }
          
          .background-link-item {
            position: relative;
          }
          
          .background-link-item:hover {
            background-color: #e6e6e6;
          }
        
        `}

      </style>

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

      <div className="bi-children-pr-1 bi-flexbox">

        {/* return: title only if no context data */}

        { contextData == null || contextData.length === 0 ?

          <div className="bi-binary-fill bi-p-1">

            <span className="bi-font-l">{ __('The timetable for this line is inactive.' ) }</span>

          </div> :
          
          contextData.map((oneWayRoute) => 

            /* route-wrapper */

            <div
              // take off service stops
              // should be 2
              key={ contextData.indexOf(oneWayRoute) }
              className="bi-w-min-256 bi-mt-1 bi-binary-fill">

              {/* route-background */}

              <Card>

                {/* route-padding */}

                <div className="bi-p-2">

                  {/* route-destination */}

                  <div className="bi-mb-2">

                    {/**
                      * this is how you resolve rogue text nodes
                      * text nodes such as the one below trouble Firefox for Android
                      **/}

                    <table className="bi-b-0 bi-nowrap bi-responsive">

                      {/**
                        * react.js: <table> <tbody> <tr>
                        **/}

                      <tbody>

                        <tr>

                          <td>

                            <span className={ fontSizeClass.title }>{ __('To:') } { oneWayRoute[oneWayRoute.length - 1].name }</span>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                  </div> {/* ./route-destination */}

                  { oneWayRoute.map((routeStop) => 

                    /* one-way-route-anchor-wrapper */

                    <div

                        key={ routeStop.id }

                        id={ routeStop.id }

                        // addEventListener is handled by React.js
                        onClick={ (e) => animateLinkItem(e, routeStop.id) }

                        className="bi-mv-04 bi-curvy-04 background-link-item">

                      {/* one-way-route-anchor */}

                      <a

                        // endStation is .id
                        // currentStop is also .id
                        href={ Url.appendResource({
                          $url: currentUrl,
                          $resourceString: `/${oneWayRoute[oneWayRoute.length - 1].id}/${routeStop.id}`
                        }) }

                        className="bi-block bi-p-04 bi-font-black bi-decoration-none bi-reset-style">

                        {/* one-way-route-entry */}

                        <div className="bi-flexbox-no-media bi-flexbox-horizontal-left-no-media bi-flexbox-vertical-no-media bi-pointer">

                          {/* zone-letter */}

                          <div className="bi-w-max-25">

                            <img
                              className="bi-w-max-2 bi-h-max-2"
                              alt=""
                              src={ PATH_URL_STORAGE_GRAPHICS + '/zone_a_fluent.svg' } />

                          </div> {/* ./zone-letter */}

                          {/* stop-name */}

                          <div className="bi-w-max-75 bi-pl-04">

                            {/**
                              * this is how you resolve rogue text nodes
                              * text nodes such as the one below trouble Firefox for Android
                              * */}

                            <table className="bi-b-0 bi-nowrap bi-responsive">

                              <tbody>

                                <tr>

                                  <td>

                                    <span className={ `bi-text-ellipsis ${ fontSizeClass.paragraph }`}>{ routeStop.name }</span>

                                  </td>

                                </tr>
                              
                              </tbody>

                            </table>

                          </div> {/* ./stop-name */}

                        </div> {/* ./one-way-route-entry */}

                      </a> {/* ./one-way-route-anchor */}

                    </div> /* ./one-way-route-anchor-wrapper */

                  ) }
                
                </div> {/* ./route-padding */}

              </Card> {/* ./route-background */}

            </div> /* ./route-wrapper */

          )

        }

      </div> {/* ./routes-wrapper */}

    </>

  );
}