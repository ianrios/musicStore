<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Releases Page Component</div>

                    <div class="card-body">I'm the releases page component.</div>
                </div>
            </div>
            <br>
            <release-component
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

<style lang="scss" scoped>
</style>
