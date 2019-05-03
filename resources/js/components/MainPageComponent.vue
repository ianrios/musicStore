<template>
    <div class="container" id="main_page">
        <div id="main_page_first" v-if="curr_view == 0">
            <div id="main_background">
                <h1 id="main_page_header1">{{label}}</h1>
            </div>
            <a id="main_page_about" @click="updatePage(1)" href="#">about</a>
        </div>
        <!-- image with name on top
		resize images to be squares on mibile
		make headers, paragraph and other texts the right size
        -->
        <div id="main_page_second" v-else-if="curr_view == 1">
            <div id="header_main_page">
                <h3 id="main_page_header3">
                    <a
                        id="main_page_back"
                        href="#"
                        @click="updatePage(0)"
                        aria-label="Back to main view"
                    >
                        <svg
                            id="i-chevron-left"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 32 32"
                            width="32"
                            height="32"
                            fill="none"
                            stroke="currentcolor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                        >
                            <path d="M20 30 L8 16 20 2"></path>
                        </svg>
                    </a>
                    {{label}}
                </h3>
            </div>
            <div id="main_text">
                <p id="main_page_short_desc">{{short_description}}</p>
                <p v-for="d in long_descriptions" id="main_page_long_desc">{{d}}</p>
            </div>
            <div id="main_page_links">
                <a
                    v-for="link in label_socials"
                    :key="link.short_name"
                    :href="link.url"
                    id="main_page_social_link"
                >{{link.short_name}}</a>
            </div>
            <!-- seclection panel -->
            <div id="selection_links_main">
                <!-- <a id="select_span">select:</a> -->
                <a
                    v-for="(n,i) in artist_types.length"
                    :key="i"
                    href="#"
                    @click="update_view(i)"
                    :class="{active: sel_view === i }"
                    id="main_page_link_select"
                >{{artist_types[i]}}</a>
            </div>

            <main-page-artists-list-component :sel_view="sel_view"/>
        </div>
    </div>
</template>

<script>
import MainPageArtistsListComponent from "./MainPageArtistsListComponent.vue";

import {
    artist_types,
    curr_view,
    label,
    short_description,
    long_descriptions,
    label_socials
} from "../JSON/data.json";

export default {
    data() {
        return {
            sel_view: 0, //0: all, 1: individuals, 2: groups
            artist_types: artist_types,
            curr_view: curr_view,
            label: label,
            short_description: short_description,
            long_descriptions: long_descriptions,
            label_socials: label_socials
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
        },
        update_view(n) {
            this.sel_view = n;
        }
    }
};
</script>
