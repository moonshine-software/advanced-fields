import {defineConfig} from 'vite';
export default defineConfig({
    build: {
        emptyOutDir: false,
        manifest: true,
        rollupOptions: {
            input: ['resources/css/main.css', 'resources/js/app.js'],
            output: {
                assetFileNames: file => {
                    let ext = file.name.split('.').pop()
                    if (ext === 'css') {
                        return 'css/main.css'
                    }
                    if (ext === 'js') {
                        return 'js/app.js'
                    }
                }
            }
        },
        outDir: 'public',
    },
});
