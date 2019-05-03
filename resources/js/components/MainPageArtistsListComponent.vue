<template>
    <div class="container" id="artist_list_main">
        <!-- artists images and bios -->
        <div v-for="artist in filteredArtists" :key="artist.id" id="artist_home_row">
            <!-- click artist name to go to artists/artist name -->
            <a id="artist_home_name_link" :href="'/artists#'+artist.anchor">{{artist.name}}</a>
            <a id="artist_home_image_link" :href="'/artists#'+artist.anchor">
                <img
                    :src="'/img/artists/'+artist.profile"
                    id="artist_home_profile"
                    :alt="artist.name"
                >
            </a>

            <!-- roles of artist -->
            <!-- <span>{{artist.name}}</span> -->

            <!-- short description of artist -->
            <p id="artist_home_short_desc">{{artist.short_desc}}</p>
        </div>
    </div>
</template>

<script>
import { artists, artist_types } from "../JSON/data.json";

export default {
    data: function() {
        return {
            artists: artists
        };
    },
    props: {
        sel_view: Number
    },
    mounted() {
        console.log("Artists Home List Component mounted.");
    },
    computed: {
        filteredArtists() {
            var self = this;
            if (!this.sel_view) {
                return this.artists;
            }
            return this.artists.filter(a => a.num_artists == self.sel_view);
        }
    }
};
</script>
