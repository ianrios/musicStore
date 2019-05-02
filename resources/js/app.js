/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// example component
Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

//homepage components
Vue.component(
    "main-page-artists-list-component",
    require("./components/MainPageArtistsListComponent.vue").default
);
Vue.component(
    "main-page-component",
    require("./components/MainPageComponent.vue").default
);

//artists page components
Vue.component(
    "artist-component",
    require("./components/ArtistComponent.vue").default
);
Vue.component(
    "artists-page-component",
    require("./components/ArtistsPageComponent.vue").default
);

//releases page components
Vue.component(
    "release-component",
    require("./components/ReleaseComponent.vue").default
);
Vue.component(
    "releases-page-component",
    require("./components/ReleasesPageComponent.vue").default
);

//cycle page components
Vue.component(
    "cycle-page-component",
    require("./components/CyclePageComponent.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});
