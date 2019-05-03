<template>
    <div class="container" id="releases_page">
        <h1 id="releases_page_header1">Releases</h1>
        <p
            id="releases_page_p"
        >each release will have a landing page, and can be filtered by artists that appear on each release</p>
        <div id="releases_views">
            <release-component
                id="releases_page_component"
                v-for="release in releases.slice().reverse()"
                track-by="$index"
                :key="release.id"
                :release="release"
            />
        </div>
    </div>
</template>

<script>
import { releases, artists, curr_view } from "../JSON/data.json";
import ReleaseComponent from "./ReleaseComponent.vue";

export default {
    mounted() {
        console.log("Releases Page Component mounted.");
    },
    data() {
        return {
            releases: releases,
            artists: artists,
            curr_view: curr_view
        };
    },
    components: {
        ReleaseComponent
    }
};
</script>
