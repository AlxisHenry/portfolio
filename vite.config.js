import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
  plugins: [
    laravel([
      "resources/js/app.js",
      "resources/js/pages/homepage.js",
      "resources/js/pages/projects.js",
      "resources/js/pages/board.js",
      "resources/js/pages/news.js",
      "resources/js/components/project-cards.js",
      "resources/js/components/loader.js",
      "resources/js/components/burger-menu.js",
      "resources/js/pages/login.js",
      "resources/js/pages/about-me.js",
      "resources/sass/app.scss",
    ]),
  ],
  server: {
    cors: false,
    hmr: {
      host: "localhost"
    }
  }
});
