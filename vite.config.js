import {defineConfig} from 'vite';
export default defineConfig({
    build: {
        emptyOutDir: false,
        manifest: true,
        rollupOptions: {
            input: ['resources/css/af.css'],
            output: {
                assetFileNames: file => {
                    let ext = file.name.split('.').pop()
                    if (ext === 'css') {
                        return 'css/af.css'
                    }
                }
            }
        },
        outDir: 'public',
    },
});
