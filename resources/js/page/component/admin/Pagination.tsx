//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Pagination.tsx
 */

import { Url } from "../../../helper/Url";

//-----------------------------------------------------------------------------

export function Pagination({
  $paginator,
  $paginatorOptions
})
{
  const firstPage = $paginatorOptions.firstPage;
  const lastPage = $paginatorOptions.lastPage;
  const currentPage = $paginator.current_page;

  const firstLink = $paginator.first_page_url;

  let nextPage = currentPage + 1;
  nextPage = nextPage > lastPage ? lastPage : nextPage;

  const nextLink = Url.updateQueryString({
    $url: firstLink,
    $key: 'page',
    $newValue: nextPage.toString()
  });

  let previousPage = currentPage - 1;
  previousPage = previousPage < firstPage ? firstPage : previousPage;

  const previousLink = Url.updateQueryString({
    $url: firstLink,
    $key: 'page',
    $newValue: previousPage.toString()
  });

  const lastLink = Url.updateQueryString({
    $url: firstLink,
    $key: 'page',
    $newValue: lastPage
  });

  //*****************************************************************************
  
  return (

    <>

      {/* pagination-wrapper */}

      <div>

        <div className="bi-navigation-horizontal">

          {/* first-link */}

          <a
            href={ firstLink }
            className="bi-decoration-none bi-color-pagination-button bi-background-pagination-button bi-button bi-navigation-horizontal-element"
            >&#60;&#60;</a> {/* ./first-link */}

          {/* previous-link */}

          <a
            href={ previousLink }
            className="bi-decoration-none bi-color-pagination-button bi-background-pagination-button bi-button bi-navigation-horizontal-element"
            >&#60;</a> {/* ./previous-link */}

          {/* current-page */}

          <div className="bi-navigation-horizontal-element">

            <span
              className="bi-cursor bi-background-pagination-button-active bi-button bi-button-route"
              >{ currentPage } &#47; { lastPage }</span>
          
          </div> {/* ./current-page */}

          {/* next-link */}

          <a
            href={ nextLink }
            className="bi-decoration-none bi-color-pagination-button bi-background-pagination-button bi-button bi-navigation-horizontal-element"
            >&#62;</a> {/* ./next-link */}

          {/* last-link */}

          <a
            href={ lastLink }
            className="bi-decoration-none bi-color-pagination-button bi-background-pagination-button bi-button bi-navigation-horizontal-element"
            >&#62;&#62;</a> {/* ./last-link */}

        </div>

      </div> {/* ./pagination-wrapper */}
    
    </>

  );
}