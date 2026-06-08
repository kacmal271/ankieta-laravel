export function __($translationKey, $parameters = [])
{
  const translationsStringified = sessionStorage.getItem('laravelSurvey.lang.json');

  const translations = JSON.parse(translationsStringified);

  // those are your options
  //   translation : undefined
  //   translation : string
  let translation = translations[$translationKey];

  if (translation == undefined)
  {
    return $translationKey;
  }

  for (let parameterKey in $parameters)
  {
    translation = translation.replaceAll(parameterKey, $parameters[parameterKey])
  }

  return translation;
}