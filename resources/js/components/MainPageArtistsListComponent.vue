<template>
    <div class="container">
        <!-- section panel -->
        <div class="btn-group">
            <button type="button" class="btn btn-link" disabled>select:</button>
            <button
                type="button"
                class="btn btn-link"
                v-for="(n,i) in 3"
                :key="i"
                @click="update_view(i)"
                :class="{active: sel_view === i }"
            >{{artist_types[i]}}</button>
        </div>
        <!-- artists images and bios -->
        <div class="overflow-auto" id="artist_list">
            <div v-for="artist in filteredArtists" :key="artist.id" class="row" id="artist_row">
                <div class="col-8">
                    <img
                        :src="'/img/artists/'+artist.profile"
                        class="img-fluid mx-auto image-responsive"
                        id="img-testing-test"
                        :alt="artist.name"
                    >
                </div>
                <div class="col-4">
                    <span>{{artist.name}}</span>
                    <!-- roles of artist -->
                    <!-- <span>{{artist.name}}</span> -->
                </div>
                <br>
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
        console.log(this.artists);
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

<style lang="scss" scoped>
</style>
