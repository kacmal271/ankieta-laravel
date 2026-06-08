//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * BackwardLinks
 */

import { __ } from '../../../helper/__.js';

export const BackwardLinks = function({ links }) {

  let linksCounter = 0;

  //*****************************************************************************

  function lookupFontelloIconClass($serviceType)
  {
    return  $serviceType === 'bus' ?
              'icon-bus' :
            $serviceType === 'night' ?
              'icon-moon' : 
            $serviceType === 'tourist' ?
              'icon-suitcase' :
            $serviceType === 'tram' ?
              'icon-train' :
            undefined;
  }

  //*****************************************************************************

  return (

    <>

      <table className="bi-w-100 bi-b-0 no-wrap bi-responsive bi-mb-1">

        <tbody>

          <tr>
              
            <td
              key={ linksCounter }
              className="bi-pb-04">

              { links.map((link) => {

                linksCounter++;

                return (

                  <div
                    key={ linksCounter }
                    className="bi-inline-block bi-pl-02">

                    <a
                      href={ link.link }
                      style={{ color: "#FFFFFF", backgroundColor: "#72c4e7" }}

                      // animated hover feels like it's disturbing MDL principles
                      // className="animated-border-hover-white button default bi-curvy-0 link">

                      className="bi-button default bi-curvy-0 link">
                        
                      <span><i className="icon-left" /></span>

                      {/* "link.label" is translated by the server */}

                      <span className="bi-pl-04 bi-font-l">{ link.label }</span>
                        
                      <span className="bi-pl-04">
                        <i className={ lookupFontelloIconClass(link.serviceType) }></i>
                      </span>
                    
                    </a>

                  </div>

                );

              }) }
                
            </td>
            
          </tr>

        </tbody>

      </table>

    </>

  );

}