const path = require("path");

import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
        hmr: {
            host: "localhost",
        },
    },
    plugins: [
        laravel({
            input: [
                "resources/scss/app.scss",
                "resources/js/app.js",
                "resources/js/bootstrap.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "~resources": "/resources/",
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
});
