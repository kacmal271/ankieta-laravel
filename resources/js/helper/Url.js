//-----------------------------------------------------------------------------

/**
 * goal: assert: return-bar-component has valid query-string-callback-url
 */

export class Url
{
  //*****************************************************************************

  /**
   * input:   http://localhost/ankieta-laravel/public?level=140&page=1
   * output:  http://localhost/ankieta-laravel/public?level=140&page=180
   */

  static updateQueryString({
    $url = null,
    $key = ``,
    $newValue = ``
  })
  {
    const url = $url ?? Url.getCurrent();
    
    try
    {

      const urlPattern = /http[s]*:\/\/(([a-zA-Z\-\.]+)|([0-9\.\:]+))\/[a-zA-z\-\.\/]+[\?]?(.*)/;

      const matchedQueryString = url.match(urlPattern)[4];

      const keyValues = matchedQueryString.split('&');

      // iterate in Array
      for (let index in keyValues)
      {
        // see if query string key found
        if (keyValues[index].match(new RegExp(`${$key}`)))
        {
          // query string key found
          const oldEntry = keyValues[index].match(/.*=.*/)[0];

          // this is the updated query string entry
          const newEntry = `${$key}=${$newValue}`;

          const updatedQueryString = matchedQueryString.replace(oldEntry, newEntry);

          const updatedUrl = url.replace(matchedQueryString, updatedQueryString);

          return updatedUrl;
        }
      }

    }
    catch
    {

      return url;

    }

  }

  //*****************************************************************************

  static updateResource({
    $url = null,
    $from = ``,
    $to = ``,
  })
  {
    const url = $url ?? Url.getCurrent();

    const urlPattern = /http[s]*:\/\/(([a-zA-Z\-\.]+)|([0-9\.\:]+))(\/[a-zA-z\-\.\/]+)[\?]?.*/;

    const matchedResource = url.match(urlPattern, $to)[4];

    const replacedResource = matchedResource.replace($from, $to);

    const replacedUrl = url.replace(matchedResource, replacedResource);
    
    return replacedUrl;
    
  }

  //*****************************************************************************

  static appendQueryString({
    $url = null
  })
  {
    const currentUrl = Url.getCurrent();

    const markPosition = currentUrl.indexOf('?');

    if (markPosition < 0)
    {
      return $url;
    }

    const queryString = currentUrl.substring(markPosition);

    return $url + queryString;
  }

  //*****************************************************************************

  /**
   * input:
   * 
   *    @param { $url } $url
   * 
   *        https://my-site.com/resource?queryString=4
   * 
   *    @param { $resourceString } $resourceString
   * 
   *        /path
   * 
   * output:
   * 
   *    @returns
   * 
   *        https://my-site.com/resource/path?queryString=4
   * 
   * @param {*} param0
   */

  static appendResource({
    $url = null,
    $resourceString
  })
  {
    const url = $url == null ? Url.getCurrent() : $url;

    /**
     * String.indexOf() : -1 on not found
     * 
     * String.substring(start, end)     : string
     *   String.substring(0, -1)        : ''
     *   String.substring(-1)           : 'everything'
     */

    const markPosition = url.indexOf('?');
    const endIndex = markPosition < 0 ? undefined : markPosition;
    const resource = url.substring(0, endIndex);

    const newResource = resource + $resourceString;

    return Url.appendQueryString({ $url: newResource });
  }

  //*****************************************************************************

  static getCurrent()
  {
    return window.location.href;
  }
}