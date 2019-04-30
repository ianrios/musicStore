<template>
    <div class="container">
        <!-- seclection panel -->
        <span>select:</span>
        <a
            v-for="(n,i) in 3"
            :key="i"
            href="#"
            @click="update_view(i)"
            :class="{active: sel_view === i }"
        >{{artist_types[i]}}</a>
        <!-- artists images and bios -->
        <div class="overflow-auto" id="artist_list">
            <div v-for="artist in filteredArtists" :key="artist.id" id="artist_row">
                <a :href="'/artists#'+artist.anchor">
                    <img
                        :src="'/img/artists/'+artist.profile"
                        id="artist_profile"
                        :alt="artist.name"
                    >
                </a>

                <!-- click artist name to go to artists/artist name -->
                <a :href="'/artists#'+artist.anchor">{{artist.name}}</a>
                <!-- roles of artist -->
                <!-- <span>{{artist.name}}</span> -->

                <!-- short description of artist -->
                <!-- <span>{{artist.short_desc}}</span> -->
            </div>
        </div>
    </div>
</template>

<script>
import { artists } from "../JSON/data.json";

export default {
    data: function() {
        return {
            sel_view: 0, //0: all, 1: individuals, 2: groups
            artist_types: ["all", "individuals", "groups"],
            artists: artists
        };
    },
    methods: {
        update_view(n) {
            this.sel_view = n;
        }
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
