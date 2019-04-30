<template>
    <div class="container">
        <div v-for="artist in artists" :key="artist.name" :href="artist.url" id="artist_name">
            <artist-component :artist="artist"/>
            <br>
        </div>
    </div>
</template>

<script>
import ArtistComponent from "./ArtistComponent.vue";
import { artists, curr_view } from "../JSON/data.json";
export default {
    mounted() {
        console.log("Artists View Component mounted.");
        console.log(artists);
    },
    components: {
        ArtistComponent
    },
    data() {
        return {
            artists: artists,
            curr_view: curr_view
        };
    }
};
</script>
