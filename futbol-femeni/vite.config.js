import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
      laravel({
        input: [
          'resources/css/app.css',
          'resources/css/equips.css',
          'resources/js/app.js',
          'resources/css/jugadores.css',
          'resources/css/estadis.css'],
        refresh: true,
      }),
    ],
  });
