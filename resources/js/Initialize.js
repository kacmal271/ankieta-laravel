
import { dd } from "./helper/dd";

//-----------------------------------------------------------------------------

export class Initialize
{

  //*****************************************************************************

  /**
   * initialize = assign values to static variables
   */

  static initialize(props)
  {
    // setup translations

    const translations = props.initialPage.props.translations;

    const translationsStringified = JSON.stringify(translations);
    
    sessionStorage.setItem('laravelSurvey.lang.json', translationsStringified);

    // remove "loading..." information
    this.#removeLoadingMessage();
  }

  //*****************************************************************************

  static #removeLoadingMessage()
  {
    // remove "loading..." information

    const myLoadingMessage = document.getElementById('loading-message');

    if (myLoadingMessage)
    {
      // if not undefined for some reason
      // goal: prevent unexpected exceptions
      document.getElementById('loading-message').remove();
    }
  }
}