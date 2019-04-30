<template>
    <div class="container h-100">
        <div v-if="curr_view == 0" class="row h-100 justify-content-center align-items-center">
            <div class="col">
                <div style="background-image: url(img/11.jpg)"></div>
                <h2>{{label}}</h2>
                <a @click="updatePage(1)" href="#">about</a>
            </div>
        </div>

        <div v-else-if="curr_view == 1" class="row">
            <div class="col-4">
                <h3>{{label}}</h3>
                <p>{{short_description}}</p>
                <div>
                    <a
                        v-for="link in label_socials"
                        :key="link.short_name"
                        :href="link.url"
                        id="social_link"
                    >
                        {{link.short_name}}
                        <br>
                    </a>
                </div>
                <button
                    class="btn btn-link"
                    @click="updatePage(0)"
                    aria-label="Back to main view"
                >back</button>
            </div>
            <div class="col-8">
                <main-page-artists-list-component/>
            </div>
        </div>
    </div>
</template>

<script>
import MainPageArtistsListComponent from "./MainPageArtistsListComponent.vue";

import {
    artists,
    curr_view,
    label,
    short_description,
    label_socials
} from "../JSON/data.json";

export default {
    data() {
        return {
            artists: artists,
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

<style lang="scss" scoped>
</style>
