import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
  plugins: [
    laravel([
      "resources/js/app.js",
      "resources/js/templates/homepage.js",
      "resources/js/templates/projects.js",
      "resources/js/templates/board.js",
      "resources/js/templates/news.js",
      "resources/js/components/project-cards.js",
      "resources/js/components/loader.js",
      "resources/js/components/burger-menu.js",
      "resources/js/templates/login.js",
      "resources/js/templates/about-me.js",
      "resources/sass/app.scss",
    ]),
  ],
});
