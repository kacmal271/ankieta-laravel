
// react js
import { createRoot } from 'react-dom/client';

// inertia
import { createInertiaApp } from '@inertiajs/react';

// fluent ui
import { FluentProvider }   from '@fluentui/react-components';
import { webLightTheme }    from '@fluentui/react-components';

// add globally helper classes
// relative path as good as './'
import { Timetable }        from './Timetable.js';
import { Initialize }        from './Initialize.js';

// add globally helper function
import { dd }               from "./helper/dd";
import { __ }               from "./helper/__";

//*****************************************************************************

createInertiaApp({

  // resolve: fires before page is started to load
  // like code that creates new object
  // new Object()
  resolve: name => {

    // search folder is programmer adjustable
    // can be: "./view/**/*.jsx"
    const pages = import.meta.glob('./page/**/*.jsx', { eager: true });

    // this is starting page specified
    // specified dynamically
    return pages[
      // (!) order: matters
      `./page/${name}.jsx`,
      `./page/layout/${name}.jsx`
    ];

  },

  // setup: fires on page loaded
  // like constructor after object creation
  // Object::Object()
  setup({ el, App, props }) {

    // preprocess props
    props = Timetable.middlewareProps(props);

    // initialize application
    Initialize.initialize(props);

    // markup element: div perhaps ?
    const rootElement = createRoot(el);

    // /fluent or /metro or metro-test
    switch (props.initialPage.component)
    {
      case "Admin":

        // /admin

        rootElement.render(
          <App {...props} />,
        );

      case "Fluent":

        // /fluent

        rootElement.render(

          <FluentProvider
            theme={webLightTheme}

            // gotta round this component
            // cannot apply elsewhere
            className="bi-curvy-t-1">
            
            <App {...props} />

          </FluentProvider>,

        );

        break;

      case "Metro":

        // /metro

        rootElement.render(
          <App {...props} />,
        );

        break;
    }
    
  },

});