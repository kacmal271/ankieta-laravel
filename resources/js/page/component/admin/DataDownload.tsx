//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * DataPreview.tsx
 */

import { usePage } from "@inertiajs/react";

import { __ } from "../../../helper/__";

//-----------------------------------------------------------------------------

export function DataDownload({
  $downloadLink,
  $csrf_field,
})
{

  // laravel:inertina:validation
  //   read validation messages
  //   errors.field_name
  //   errors.max_null_values
  const { errors } = usePage().props;

  // console.log(errors);

  //*****************************************************************************
  
  return (

    <>

      {/* data-download */}

      <div>

        <form
          action={ $downloadLink }
          method="post"
          className="bi-w-100">

          {/* csrf_field token mandatory for POST form submitssion */}

          <span dangerouslySetInnerHTML={{ __html: $csrf_field }}></span>

          {/* data-filtering */}

          <div>

            {/* title */}

            <div className="bi-mt-1">

              <h4 className="bi-text-left bi-h4">{ __('Data filtering') }</h4>

            </div> {/* ./title */}

            {/* checkbox-switches */}

            <div className="bi-children-mt-04">

              {/* max-null-values */}

              <div className="bi-children-pr-1 bi-flexbox-no-media bi-flexbox-horizontal-left-no-media bi-flexbox-vertical-no-media">

                <div>

                  <biwork-checkbox
                    checkboxName="is_max_null_values"
                    disables="max_null_values"
                    class="bi-inline-block"
                    >{ __('Empty columns limit') }</biwork-checkbox>

                </div>

                {/* input-wrapper */}

                <div className="bi-w-max-128">

                  <input
                    name="max_null_values"
                    id="max_null_values"
                    type="text" />

                </div> {/* ./input-wrapper */}

              </div> {/* ./max-null-values */}

              {/* filter-empty-research-questions */}

              <div>

                <biwork-checkbox
                  checkboxName="is_empty_research_question"
                  class="bi-inline-block"
                  >{ __('Reject empty research questions') }</biwork-checkbox>

              </div> {/* ./filter-empty-research-questions */}

              {/* filter-wrong-control-question */}

              <div>

                <biwork-checkbox
                  checkboxName="is_wrong_control_question"
                  class="bi-inline-block"
                  >{ __('Reject invalid control questions') }</biwork-checkbox>

              </div> {/* ./filter-wrong-control-question */}

            </div> {/* ./checkbox-switches */}

          </div> {/* ./data-filtering */}

          {/* download-button-wrapper */}

          <div className="bi-mt-1">

            <button className="bi-h-2 bi-button bi-button-button">

              <i className="icon-download-alt"></i>

              <span className="bi-pl-04">{ __('Download.verb') }</span>

            </button>

          </div> {/* ./download-button-wrapper */}
          
        </form>

      </div> {/* ./data-download */}
    
    </>

  );
}