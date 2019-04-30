<template>
    <div class="container">
        <h1>Releases</h1>
        <p>tell me what i should do to add cool functionality to this page / how it can filter within all the releases</p>
        <br>
        <release-component
            v-for="release in releases.slice().reverse()"
            track-by="$index"
            :key="release.id"
            :release="release"
        />
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
