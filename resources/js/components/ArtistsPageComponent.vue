<template>
    <div class="container">
        <h1>Artists</h1>
        <p>tell me what i can do to add cool functionality to this page, filtering/general cool ways to display the info</p>
        <div v-for="artist in artists" :key="artist.name" id="artist_page_name">
            <artist-component :artist="artist"/>
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
