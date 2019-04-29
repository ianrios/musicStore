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
            <div v-for="artist in filteredArtists" :key="artist.name" class="row" id="artist_row">
                <div class="col-8">
                    <img
                        :src="'img/'+artist.profile_img"
                        class="img-fluid mx-auto image-responsive"
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
export default {
    data: function() {
        return {
            sel_view: 0, //0: all, 1: individuals, 2: groups
            artist_types: ["all", "individuals", "groups"]
        };
    },
    props: {
        artists: Array
        // roles: Array,
    },
    methods: {
        update_view(n) {
            this.sel_view = n;
        }
    },
    mounted() {
        console.log("Artist List Component mounted.");
    },
    computed: {
        filteredArtists() {
            var self = this;
            if (!this.sel_view) {
                return this.artists;
            }
            return this.artists.filter(a => a.artist_num == self.sel_view);
        }
    }
};
</script>

<style lang="scss" scoped>
img {
    display: block;
    max-width: 100%;
    // min-width: 100%;
    // min-height: 100%;
    height: auto;
}
#artist_row {
    height: 100%;
    width: 100%;
}
#artist_list {
    height: calc(100vh - 100px);
    overflow-y: scroll;
    width: 100%;
}
</style>
