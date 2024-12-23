import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
				'resources/css/app.css',
				'resources/css/dropdown.css',
				'resources/js/app.js',
				'resources/js/post.js'],
            refresh: true,
        }),
    ],
	build: {
		outDir: './public/build_prod'
	}
});