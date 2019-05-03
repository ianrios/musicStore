<template>
    <div class="container" id="artists_page">
        <h1 id="artists_page_title">Artists</h1>
        <p id="artists_page_info">Each artist has many roles-> coming soon</p>
        <div id="artists_views">
            <artist-component
                v-for="artist in artists"
                :key="artist.name"
                id="artists_page_name"
                :artist="artist"
            />
        </div>
        <!-- artist filter 
				all, individual, groups
				role_type,
				releases,
				number of releases,
				network of collaborations
				featured artists, collab artists, singers
				time since last release
				upcoming releases,
				radioactivity
			

			add 'ai' as an artist
        -->
    </div>
</template>

<script>
import ArtistComponent from "./ArtistComponent.vue";
import { artists, curr_view } from "../JSON/data.json";
export default {
    mounted() {
        console.log("Artists View Component mounted.");
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
