//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * BackwardLinks
 */

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

      <style>

        {`
        
          .backwardLinks-button {
            box-shadow: 0 0 2px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.14);
            color: #747474 !important;
            background-color: #fefefe;
          }
          
          .backwardLinks-button:hover {
            background-color: #fbfbfb;
          }
        
          .backwardLinks-button-current {
            box-shadow: 0 0 2px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.14);
            color: #FFFFFF !important;
            background-color: #7509ff;
          }
          
          .backwardLinks-button-current:hover {
            background-color: #8322ff;
          }
        
        `}

      </style>

      <table className="bi-w-100 bi-b-0 no-wrap bi-responsive bi-mb-1">

        <tbody>

          <tr>
              
            <td className="bi-children-not-last-pr-1 bi-pb-04">

              { links.map((link) => {

                linksCounter++;

                return (

                  <div
                    key={ linksCounter }
                    className="bi-inline-block">

                    <a
                      href={ link.link }

                      className={

                        (linksCounter >= links.length ? `backwardLinks-button-current` : ``) +

                        ` backwardLinks-button bi-b-0 bi-decoration-none bi-button bi-button-button bi-pv-04 bi-ph-1 bi-curvy-04`

                      }>
                        
                      <span><i className="icon-left" /></span>

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