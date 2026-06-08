import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import path from 'path';

export default defineConfig({

  resolve: {

    alias: {

      '@graphics': path.resolve(__dirname, 'resources/graphics')

    }

  },

  plugins: [

    laravel({

      input: [
        '/resources/js/app.js',
        '/resources/js/app.jsx',
        '/resources/css/app.css'
      ],

      refresh: true

    }),

    react()

  ],

});