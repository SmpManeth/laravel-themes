import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/themes/default/app.css",
                "resources/css/themes/modern/app.css",
            ],
            refresh: true,
        }),
    ],
});
