<template>
    <div class="container" id="main_page">
        <div id="main_page_first" v-if="curr_view == 0">
            <div id="main_background">
                <h1 id="main_page_header1">{{label}}</h1>
                <a id="main_page_about" @click="updatePage(1)" href="#">about</a>
            </div>
        </div>
        <!-- image with name on top
		resize images to be squares on mibile
		make headers, paragraph and other texts the right size
        -->
        <div id="main_page_second" v-else-if="curr_view == 1">
            <h3 id="main_page_header3">{{label}}</h3>
            <a
                id="main_page_back"
                href="#"
                @click="updatePage(0)"
                aria-label="Back to main view"
            >back</a>
            <p id="main_page_short_desc">{{short_description}}</p>
            <a
                v-for="link in label_socials"
                :key="link.short_name"
                :href="link.url"
                id="main_page_social_link"
            >{{link.short_name}}</a>

            <main-page-artists-list-component/>
        </div>
    </div>
</template>

<script>
import MainPageArtistsListComponent from "./MainPageArtistsListComponent.vue";

import {
    curr_view,
    label,
    short_description,
    label_socials
} from "../JSON/data.json";

export default {
    data() {
        return {
            curr_view: curr_view,
            label: label,
            short_description,
            label_socials
        };
    },
    mounted() {
        console.log("Main Component mounted.");
    },
    components: {
        MainPageArtistsListComponent
    },
    methods: {
        updatePage(n) {
            this.curr_view = n;
        }
    }
};
</script>
