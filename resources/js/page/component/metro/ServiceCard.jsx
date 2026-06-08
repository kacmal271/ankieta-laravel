//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * ServiceCard.jsx
 */

import { Url } from "../../../helper/Url.js";

export const ServiceCard = function({
  iconName,
  titleString,
  currentUrl,
  contextData
}) {

  return (

    <>

      <style>

        {`
        

            @media (max-width: 511px)
            {
            
              /*
            
              .icon-box[data-line=true]
              {
                width: 100% !important;
              }
            
              .icon-box[data-line=true] *
              {
                width: 100% !important;
              }

              */

            }

        `}

       </style>

      {/* wrapper */}

      <div className="bi-flexbox bi-mt-1">

        {/* intruduction */}

        <div
          className="bi-mr-1 bi-mt-1 bi-p-0 bi-hex-fill bi-curvy-0 icon-box">

          <div className="icon">

            <i className={ iconName }></i>

          </div>

          <div className="bi-text-ellipsis bi-flexbox bi-flexbox-vertical bi-flexbox-horizontal bi-nowrap content">
            
            <span className="bi-text-ellipsis bi-font-l">{ titleString }</span>

          </div>

        </div> {/* /intruduction */}

        {/* lines */}

        <div
          className="bi-flexbox-no-media bi-p-0 bi-binary-fill">

          {contextData.map(line => {

            {/**
              * each mapped child requires: unique 'key' property value
              */}

            return (

              <div key={ line.id }>

                {/**
                  * React.js: return requires single child
                  * cannot even write a comment aside fragment <>
                  * Compare: Livewire
                  */ }

                {/* line */}

                <div
                  data-line="true"

                  // metro ui 5: annoying styling issues
                  style={{ width: '90px' }}

                  className="bi-mt-1 bi-mr-1 bi-animate-push-75-linear-fast-active bi-pointer bi-curvy-0 icon-box">

                  <a
                    href={ Url.appendResource({
                      $url: currentUrl,
                      $resourceString: `/${line.type}/${line.no}`
                    }) }
                    className="bi-color-black">

                    <div className="icon">
                      
                        <span
                        
                          // styling in react.js:
                          // object inside moustache notation
                          // {{ inside an object }}
                          // styling with javascript naming system 
                          style={{
                            height: 'auto',
                            fontSize: '30px'
                          }}

                          className="bi-flexbox-no-media bi-flexbox-horizontal-no-media font-size">{ line.no }</span>

                    </div>
                    
                  </a>

                </div> {/* /line */}
              
              </div>

            );

          })}

        </div> {/* /lines */}
            
      </div> {/* /wrapper */}

    </>

  );

}