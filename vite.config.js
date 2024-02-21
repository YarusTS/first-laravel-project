import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/font-awesome.min.css',
                'resources/css/magnific-popup.css',

                'resources/js/app.js',
                'resources/js/custom.js',
                'resources/js/bootstrap.min.js',
                'resources/js/particles.min.js',
                'resources/js/smoothscroll.js',
                'resources/js/jquery.js',
                'resources/js/jquery.parallax.js',


                // 'resources/fonts/font-awesome.min.css',
                // 'resources/fonts/FontAwesome.otf',
                // 'resources/fonts/fontawesome-webfont.ttf',
                // 'resources/fonts/fontawesome-webfont.woff',
                // 'resources/fonts/fontawesome-webfont.woff2',

            ],
            refresh: true,
        }),
    ],
});
